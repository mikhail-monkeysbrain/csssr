(function () {
  let Adaptive

  Adaptive = {
    cls: '',
    clsList: {},
    deviceType: 'default',
    deviceTypes: [],
    init: function () {
      this.initConfig()
      // app.on('resize', _.bind(this.update, this))
      app.dom.$window.on('load resize orientationchange', _.bind(this.update, this))
      this.update()
    },
    initConfig: function () {
      /*
      <class>: {                                        // Условия выставления класса <class>
        if: <if>                                        // условие (функция(<data>,<cfg>)) <data> содержит $el, elWidth, elHeight
        element: <selector||element||$element||domKey>  // элемент по которому происходят рассчеты размеров
        rem: <px>                                       // коэфициент перевода rem => px (отменяет зависимость по base)
        from: {
          width: <fromWidth>,                           // Минимальная ширина элемента
          height: <fromHeight>                          // Минимальная высота элемента
        },
        to: {
           width: <toWidth>,                            // Максимальная ширина элемента
           height: <toHeight>                           // Максимальная высота элемента
        },
        base: {
           width: <toWidth>,                            // Базовая элемента для рассчета коэфициента
           height: <toHeight>                           // Базовая элемента экрана для рассчета коэфициента
        },
        k: <k>                                          // Дополнительный коэффициент
        setClass: false||true||<class>                  // выставлять класс при выполнении условий
        setNoClass: false||true||<class>                // выставлять класс при невыполнении условий
        setDeviceType: true||false||<type>              // устанавливать новый deviceType при соответствии условиям (key <class> из конфигурации или конкретный <type>)
      }
     */
      const self = this
      self.defaults = {
        if: false,
        element: '$window',
        rem: false,
        from: false,
        to: false,
        base: false,
        k: 1,
        setClass: false,
        setNoClass: false,
        setDeviceType: false
      }
      self.cfgs = {
        'desktop': {
          if: device.desktop,
          setClass: true,
          setNoClass: true,
          setDeviceType: true
        },
        'desktop:wide': {
          rem: 10,
          from: {
            width: 950
          }
        },
        'desktop:thin': {
          if: device.desktop,
          base: {
            width: 950
          },
          to: {
            width: 950
          }
        }
      }
      _.map(self.cfgs, function (cfg) {
        _.defaults(cfg, self.defaults)
      })
      _.each(self.cfgs, function (cfg, cls) {
        if (cfg.setDeviceType) {
          self.deviceTypes.push(self.calcDeviceType(cfg.setDeviceType, cls))
        }
      })
    },
    update: function () {
      const self = this

      self.cache = {}
      self.setCls(_.filter(_.map(self.cfgs, _.bind(self.checkClass, self)), _.isString))
    },
    getCfgClass: function (cls, setClass, prefix) {
      prefix = prefix || ''
      if (setClass) {
        if (_.isString(setClass)) {
          return setClass
        }
        return prefix + cls
      }
      return false
    },
    checkClass: function (cfg, cls) {
      const self = this
      let data
      let $el
      let elWidth
      let elHeight
      let baseWidth
      let baseHeight
      let baseKs = []
      let baseK
      let rem
      let k = cfg.k || 1
      let If = (!cfg.if || !_.isFunction(cfg.if)) ? false : cfg.if

      if (_.isString(cfg.element) && (data = self.cache[cfg.element])) {
        $el = data['$el']
        elWidth = data['elWidth']
        elHeight = data['elHeight']
      } else {
        data = {}
        data['$el'] = $el = app.dom[cfg.element] || $(cfg.element)
        data['elWidth'] = elWidth = $el.width()
        data['elHeight'] = elHeight = $el.height()
      }
      if (If && !If(data, cfg)) return self.getCfgClass(cls, cfg.setNoClass, 'no-')
      if (cfg.from && (cfg.from.width > elWidth || cfg.from.height > elHeight)) return self.getCfgClass(cls, cfg.setNoClass, 'no-')
      if (cfg.to && (cfg.to.width <= elWidth || cfg.to.height <= elHeight)) return self.getCfgClass(cls, cfg.setNoClass, 'no-')
      if (cfg.rem) {
        rem = cfg.rem
        self.setRem(rem)
      } else if (cfg.base) {
        if ((baseWidth = cfg.base.width)) {
          baseKs.push(elWidth / baseWidth)
        }
        if ((baseHeight = cfg.base.height)) {
          baseKs.push(elHeight / baseHeight)
        }
        baseK = _.min(baseKs)
        rem = baseK * k * 10
        self.setRem(rem)
      }
      if (_.isString(cfg.element)) {
        self.cache[cfg.element] = data
      }
      self.setDeviceType(self.calcDeviceType(cfg.setDeviceType, cls))
      return self.getCfgClass(cls, cfg.setClass, '')
    },

    calcDeviceType: function (setDeviceType, cls) {
      if (setDeviceType === true) {
        return cls
      } else {
        return setDeviceType
      }
    },

    setDeviceType: function (deviceType) {
      if (deviceType && deviceType !== this.deviceType) {
        app.trigger('beforeDeviceChange', this.deviceType)
        this.deviceType = deviceType
        app.trigger('deviceChange', this.deviceType)
      }
    },

    getDeviceType: function () {
      return this.deviceType
    },
    getDeviceTypes: function () {
      return this.deviceTypes
    },

    setCls: function (clss) {
      const self = this
      let arClss
      let strClss

      if (_.isArray(clss)) {
        arClss = clss
        strClss = clss.join(' ')
      } else {
        arClss = clss.split(' ')
        strClss = clss
      }
      if (self.cls !== strClss) {
        app.dom.$html.removeClass(self.cls)
        app.dom.$html.addClass(strClss)
        self.cls = strClss
        self.clsList = {}
        _.each(arClss, function (cls) {
          self.clsList[cls] = true
        })
        app.trigger('html_class', {
          cls: self.cls,
          clsList: self.clsList
        })
      }
    },

    setRem: function (fz) {
      app.rem = fz
      app.dom.$html.css('font-size', fz)
    },

    hasClass: function (cls) {
      return !!this.clsList[cls]
    }
  }

  app.Adaptive = app.components.Adaptive = Adaptive
  Adaptive.init()
})()
