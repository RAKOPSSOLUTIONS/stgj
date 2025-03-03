(self["webpackChunkaffiches"] = self["webpackChunkaffiches"] || []).push([["app"],{

/***/ "./assets/js/elements/ajax-chart.js":
/*!******************************************!*\
  !*** ./assets/js/elements/ajax-chart.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AjaxChart: () => (/* binding */ AjaxChart)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }





















function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


var AjaxChart = /*#__PURE__*/function (_HTMLElement) {
  function AjaxChart() {
    var _this;
    _classCallCheck(this, AjaxChart);
    _this = _callSuper(this, AjaxChart);
    _this.loading = false;
    _this.type = _this.getAttribute("type");
    _this.url = _this.getAttribute("url");
    _this.params = JSON.parse(_this.getAttribute("params")) || {};
    _this.options = JSON.parse(_this.getAttribute("options")) || {};
    _this.render();
    return _this;
  }
  _inherits(AjaxChart, _HTMLElement);
  return _createClass(AjaxChart, [{
    key: "render",
    value: function render() {
      var _this2 = this;
      if (this.loading) return;
      this.toggleLoading(true);
      axios__WEBPACK_IMPORTED_MODULE_22__["default"].get(this.url, {
        params: this.params
      }).then(function (res) {
        if (res.data.status === "success") {
          if (res.data.data.datasets[0].data.length > 0) {
            var config = {
              type: _this2.type,
              data: res.data.data || [],
              options: res.data.options || _this2.options
            };
            var canvas = document.createElement("canvas");
            _this2.appendChild(canvas);
            new window.Chart(canvas.getContext("2d"), config);
          } else {
            _this2.draw("<b>".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_21__.trans)("Aucun résultat n'a été trouvé"), "</b>"));
          }
        } else {
          _this2.draw("<b>".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_21__.trans)("Une erreur est survenue"), "</b>"));
        }
      })["catch"](function (err) {
        _this2.draw("<b>".concat(err.message, "</b>"));
      }).then(function () {
        return _this2.toggleLoading(false);
      });
    }
  }, {
    key: "draw",
    value: function draw(content) {
      this.innerHTML = content;
    }
  }, {
    key: "toggleLoading",
    value: function toggleLoading(status) {
      this.loading = status;
      if (status) {
        this.draw("<span class=\"spinner-border spinner-border-sm\"></span>");
      } else {
        var _this$querySelector;
        (_this$querySelector = this.querySelector(".spinner-border")) === null || _this$querySelector === void 0 || _this$querySelector.remove();
      }
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/ajax-form.js":
/*!*****************************************!*\
  !*** ./assets/js/elements/ajax-form.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AjaxForm: () => (/* binding */ AjaxForm)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }




















function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


var AjaxForm = /*#__PURE__*/function (_HTMLElement) {
  function AjaxForm() {
    _classCallCheck(this, AjaxForm);
    return _callSuper(this, AjaxForm, arguments);
  }
  _inherits(AjaxForm, _HTMLElement);
  return _createClass(AjaxForm, [{
    key: "connectedCallback",
    value: function connectedCallback() {
      window.dispatchEvent(new CustomEvent("ajax.form.ready"));
      this.querySelector("form").addEventListener("submit", this.submit.bind(this));
    }
  }, {
    key: "submit",
    value: function submit(e) {
      var _this = this;
      e.preventDefault();
      var form = this.querySelector("form");
      var formData = new FormData(form);
      var btn = form.querySelector('[type="submit"]');
      var btnHtml = btn.innerHTML;
      btn.innerHTML = "<span class=\"spinner-border spinner-border-sm fs-6\"></span> ".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_20__.trans)("Traitement en cours..."));
      btn.setAttribute("disabled", "disabled");
      axios__WEBPACK_IMPORTED_MODULE_21__["default"].post(form.getAttribute("action"), formData).then(function (res) {
        if (res.data.message !== undefined) {
          toast(res.data.status, res.data.message);
        }
        if (res.data.status === "success") {
          _this.dispatchEvent(new CustomEvent("ajax.form.success", {
            detail: res
          }));
        }
      })["catch"](function (err) {
        toast("error", err.message);
      }).then(function () {
        btn.innerHTML = btnHtml;
        btn.removeAttribute("disabled");
      });
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/ajax-modal.js":
/*!******************************************!*\
  !*** ./assets/js/elements/ajax-modal.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AjaxModal: () => (/* binding */ AjaxModal)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_string_starts_with_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.string.starts-with.js */ "./node_modules/core-js/modules/es.string.starts-with.js");
/* harmony import */ var core_js_modules_es_string_starts_with_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_starts_with_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var bootstrap_js_src_modal__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! bootstrap/js/src/modal */ "./node_modules/bootstrap/js/src/modal.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }























function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }



var AjaxModal = /*#__PURE__*/function (_HTMLElement) {
  function AjaxModal() {
    var _this;
    _classCallCheck(this, AjaxModal);
    _this = _callSuper(this, AjaxModal);
    _this.addEventListener("click", function () {
      // attributes
      _this.url = _this.getAttribute("url");
      _this.width = _this.getAttribute("width");
      _this.params = JSON.parse(_this.getAttribute("params")) || {};
      _this.defaultLoadingMessage = (0,_utils_translation__WEBPACK_IMPORTED_MODULE_24__.trans)("Chargement en cours...");
      _this.message = _this.getAttribute("message") || _this.defaultLoadingMessage;
      // check if require confirmation
      if (_this.getAttribute("confirm") === "1" && !confirm((0,_utils_translation__WEBPACK_IMPORTED_MODULE_24__.trans)("Êtes vous sûre de vouloir executer cette action ?"))) return;
      // blocks
      _this.title = "<span class=\"spinner-border\" style=\"width: 1.4rem; height: 1.4rem;border-width: 0.15em;\"></span> ".concat(_this.message);
      _this.body = "";
      _this.footer = "";
      _this.content = "";
      // open modal
      _this.containerId = "ajax-modal";
      _this.element = document.getElementById(_this.containerId);
      if (_this.element === null) {
        _this.element = document.createElement("div");
        _this.element.setAttribute("class", "modal fade");
        _this.element.setAttribute("id", _this.containerId);
        _this.element.setAttribute("tabindex", "-1");
        document.body.appendChild(_this.element);
      }
      _this.fetch();
    });
    return _this;
  }
  _inherits(AjaxModal, _HTMLElement);
  return _createClass(AjaxModal, [{
    key: "fetch",
    value: function fetch() {
      var _this2 = this;
      this.open(true);
      axios__WEBPACK_IMPORTED_MODULE_25__["default"].get(this.url, {
        params: this.params
      }).then(function (res) {
        if (res.data.message !== undefined) {
          _this2.close(res);
        } else {
          var _this2$element$queryS;
          _this2.title = res.data.title || "";
          _this2.body = res.data.body || "";
          _this2.footer = res.data.footer || "";
          _this2.content = res.data.content || "";
          _this2.render();
          // trigger ready event
          window.dispatchEvent(new CustomEvent("ajax.modal.ready"));
          // close on form submited
          (_this2$element$queryS = _this2.element.querySelector("ajax-form")) === null || _this2$element$queryS === void 0 || _this2$element$queryS.addEventListener("ajax.form.success", function (event) {
            return _this2.close(event.detail);
          });
        }
      })["catch"](function (err) {
        _this2.title = "<i class=\"bi bi-exclamation-triangle\"></i> ".concat(err.message);
        _this2.body = "";
        _this2.footer = "";
        _this2.content = "";
        _this2.render();
      });
    }
  }, {
    key: "open",
    value: function open() {
      var _this3 = this;
      var fetching = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      this.render(fetching);
      new bootstrap_js_src_modal__WEBPACK_IMPORTED_MODULE_23__["default"](this.element, {
        backdrop: "static",
        keyboard: false
      }).show();
      this.element.addEventListener("hide.bs.modal", function () {
        var _document$getElementB;
        (_document$getElementB = document.getElementById(_this3.containerId)) === null || _document$getElementB === void 0 || _document$getElementB.remove();
      });
    }
  }, {
    key: "close",
    value: function close(res) {
      if (res.data.content !== undefined) {
        this.content = res.data.content;
        this.render();
      } else if (res.data.status === "success") {
        var _modal$nextElementSib;
        // hide modal
        var modal = document.getElementById("ajax-modal");
        bootstrap_js_src_modal__WEBPACK_IMPORTED_MODULE_23__["default"].getInstance(modal).hide();
        (_modal$nextElementSib = modal.nextElementSibling) === null || _modal$nextElementSib === void 0 || _modal$nextElementSib.remove();
        modal === null || modal === void 0 || modal.remove();
        // refresh the table
        if (res.data.tableId !== undefined) {
          var table = document.getElementById(res.data.tableId);
          if (table !== null) {
            table.dispatchEvent(new Event("refresh"));
          }
        }
      }
      // show alert
      if (res.data.message !== undefined) {
        toast(res.data.status, res.data.message);
      }
    }
  }, {
    key: "render",
    value: function render() {
      var fetching = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      var html = "\n      <div \n        style=\"margin: 0px auto;width:".concat(fetching ? "fit-content" : !isNaN(this.width) ? this.width + "px" : "auto", ";\"\n        class=\"modal-dialog modal-dialog-centered ").concat(!fetching && (this.width && this.width.startsWith("modal") ? this.width : "modal-lg"), "\" \n      >\n      <div class=\"modal-content\">\n    ");
      if (this.content) {
        html += this.content;
      }
      if (this.title) {
        html += "<div class=\"modal-header".concat(!this.body && " borderless", "\">\n        <h5 class=\"modal-title\">").concat(this.title, "</h5>\n        <button \n          type=\"button\" \n          class=\"btn-close rounded-0 shadow-none\" \n          data-bs-dismiss=\"modal\" \n          aria-label=\"").concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_24__.trans)("Fermer"), "\"\n        ></button>\n      </div>");
      }
      if (this.body) {
        html += "<div class=\"modal-body\">".concat(this.body, "</div>");
      }
      if (this.footer) {
        html += "<div class=\"modal-footer\">".concat(this.footer, "</div>");
      }
      html += "</div></div>";
      this.element.innerHTML = html;
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/ajax-table.js":
/*!******************************************!*\
  !*** ./assets/js/elements/ajax-table.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AjaxTable: () => (/* binding */ AjaxTable)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }































function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


var AjaxTable = /*#__PURE__*/function (_HTMLElement) {
  function AjaxTable() {
    var _this;
    _classCallCheck(this, AjaxTable);
    _this = _callSuper(this, AjaxTable);
    _this.loading = false;
    _this.id = _this.getAttribute("id");
    _this.url = _this.getAttribute("url");
    _this.entity_name = _this.getAttribute("sortable");
    _this.page = _this.getAttribute("page") || 1;
    _this.perpage = _this.getAttribute("perpage") || 10;
    _this.params = JSON.parse(_this.getAttribute("params")) || {};
    if (_this.querySelector("table")) {
      _this.registerEvents();
    } else {
      _this.spinner();
      _this.render();
    }
    _this.addEventListener("refresh", _this.render);
    return _this;
  }
  _inherits(AjaxTable, _HTMLElement);
  return _createClass(AjaxTable, [{
    key: "spinner",
    value: function spinner() {
      this.draw("<div class=\"bd-callout bd-callout-info\">\n        <span class=\"spinner-border spinner-border-sm\"></span>\n        ".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_31__.trans)("Chargement de la table en cours..."), "\n      </div>"));
    }
  }, {
    key: "render",
    value: function render(event) {
      var _this2 = this;
      if (this.loading) return;
      this.toggleLoading(true);

      // merge params from event
      if (_typeof(event === null || event === void 0 ? void 0 : event.detail) === "object") {
        this.params = event.detail;
        this.page = 1;
      }
      var params = _objectSpread({
        page: this.page,
        perpage: this.perpage
      }, this.params);
      axios__WEBPACK_IMPORTED_MODULE_32__["default"].get(this.url, {
        params: params
      }).then(function (res) {
        _this2.draw(res.data);
        if (res.data.includes("table")) {
          _this2.registerEvents();
        }
      })["catch"](function (err) {
        _this2.draw("<div class=\"bd-callout bd-callout-danger\">".concat(err.message, "</div>"));
      }).then(function () {
        return _this2.toggleLoading(false);
      });
    }
  }, {
    key: "on",
    value: function on(event_name, target, callback) {
      var _this3 = this;
      this.querySelectorAll(target).forEach(function (element) {
        return element.addEventListener(event_name, callback.bind(_this3, element));
      });
    }
  }, {
    key: "registerEvents",
    value: function registerEvents() {
      this.on("click", ".bulk-actions", this.bulkActionsChange);
      this.on("click", ".bulk-apply", this.applyBulkAction);
      this.on("change", ".perpage", this.setPerpage);
      this.on("change", ".page-number", this.setPage);
      this.on("click", ".next-page", this.nextPage);
      this.on("click", ".prev-page", this.prevPage);
      this.on("change", ".cb-check-all", this.checkAll);
      this.on("change", ".cb-item", this.toggleCheckAll);
      window.dispatchEvent(new CustomEvent("ajax.table.ready"));
      // make table sortable
      if (window.jQuery && this.entity_name) {
        this.sortableItems();
      }
      this.setBadgeCount();
    }
  }, {
    key: "draw",
    value: function draw(content) {
      this.innerHTML = content;
    }
  }, {
    key: "toggleLoading",
    value: function toggleLoading(status) {
      this.loading = status;
      if (status && this.querySelector("table") !== null) {
        this.classList.add("loading");
      } else {
        this.classList.remove("loading");
      }
      this.querySelector("table").style.opacity = status ? 0.3 : 1;
      var btnLoading = this.querySelector(".btn-loading");
      if (btnLoading) {
        btnLoading.style.display = status ? "block" : "none";
      }
    }
  }, {
    key: "bulkActionsChange",
    value: function bulkActionsChange() {
      var action = this.querySelector(".bulk-actions").querySelector("option:checked").getAttribute("data-name");
      this.querySelectorAll(".cb-item").forEach(function (item) {
        if (action !== null) {
          var dropdown = item.closest("tr").querySelector(".dropdown-menu");
          var exists = dropdown.querySelector(".action-".concat(action)) !== null;
          item.disabled = !exists;
          item.checked = exists && item.checked;
        } else {
          item.disabled = false;
        }
      });
    }
  }, {
    key: "applyBulkAction",
    value: function applyBulkAction() {
      var _this4 = this;
      var url = this.querySelector(".bulk-actions").value;
      if (url === "") {
        toast("warning", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_31__.trans)("Veuillez choisir une action"));
        return;
      }
      var items = [];
      this.querySelectorAll(".cb-item:checked").forEach(function (item) {
        return items.push(item.value);
      });
      if (items.length < 1) {
        toast("warning", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_31__.trans)("Vous devez choisir au moins une ligne"));
        return;
      }
      var btn = this.querySelector(".bulk-apply");
      var btnHtml = btn.innerHTML;
      btn.innerHTML = "<span class=\"spinner-border spinner-border-sm\"></span>";
      btn.setAttribute("disabled", "disabled");
      axios__WEBPACK_IMPORTED_MODULE_32__["default"].post(url, null, {
        params: {
          items: items
        }
      }).then(function (res) {
        if (res.data.status === "success") {
          _this4.render();
        }
        if (res.data.message !== undefined) {
          toast(res.data.status, res.data.message);
        }
      })["catch"](function (err) {
        toast("error", err.message);
      }).then(function () {
        btn.innerHTML = btnHtml;
        btn.removeAttribute("disabled");
      });
    }
  }, {
    key: "setPerpage",
    value: function setPerpage() {
      var perpage = parseInt(this.querySelector(".perpage").value);
      this.page = 1;
      this.perpage = perpage;
      this.render();
    }
  }, {
    key: "setPage",
    value: function setPage() {
      var input = this.querySelector(".page-number");
      var page = parseInt(input.value);
      if (page > 0 && page <= input.getAttribute("max")) {
        if (page != this.page) {
          this.page = page;
          this.render();
        }
      } else {
        toast("warning", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_31__.trans)("Veuillez saisir un numéro de page valide"));
      }
    }
  }, {
    key: "prevPage",
    value: function prevPage() {
      var page = this.querySelector(".page-number").value;
      if (page > 1) {
        this.page = parseInt(page) - 1;
        this.querySelector(".page-number").value = this.page;
        this.render();
      }
    }
  }, {
    key: "nextPage",
    value: function nextPage() {
      var page = this.querySelector(".page-number").value;
      this.page = parseInt(page) + 1;
      this.querySelector(".page-number").value = this.page;
      this.render();
    }
  }, {
    key: "checkAll",
    value: function checkAll(cb) {
      this.querySelectorAll(".cb-item").forEach(function (item) {
        if (!item.disabled) {
          item.checked = cb.checked;
        }
      });
      this.querySelectorAll(".cb-check-all").forEach(function (item) {
        return item.checked = cb.checked;
      });
    }
  }, {
    key: "toggleCheckAll",
    value: function toggleCheckAll() {
      var unchecked = this.querySelectorAll(".cb-item").length;
      var checked = this.querySelectorAll(".cb-item:checked").length;
      this.querySelectorAll(".cb-check-all").forEach(function (item) {
        item.checked = checked === unchecked;
        item.indeterminate = !item.checked && checked > 0;
      });
    }
  }, {
    key: "sortableItems",
    value: function sortableItems() {
      var _this5 = this;
      var $table = $(this.querySelector("table"));
      $table.find("tbody").sortable({
        update: function update() {
          var items_orders = {};
          $table.find("tbody tr").each(function (index, item) {
            items_orders[$(item).data("pkv")] = index + 1;
            $(item).find(".td_increment").text(index + 1);
          });
          $table.css("opacity", "0.3");
          axios__WEBPACK_IMPORTED_MODULE_32__["default"].post("/admin/sort/order/update", null, {
            params: {
              entity_name: _this5.entity_name,
              items_orders: items_orders
            }
          }).then(function (res) {
            if (res.data.status === "error") {
              toast("error", res.data.message);
            }
          })["catch"](function () {
            toast("error", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_31__.trans)("Une erreur est survenue"));
          }).then(function () {
            return $table.css("opacity", 1);
          });
        }
      });
    }
  }, {
    key: "setBadgeCount",
    value: function setBadgeCount() {
      var _this$querySelector;
      var count = ((_this$querySelector = this.querySelector(".chm-table-total")) === null || _this$querySelector === void 0 ? void 0 : _this$querySelector.innerText) || 0;
      document.querySelectorAll("[chm-table-total]").forEach(function (element) {
        element.innerText = count;
      });
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/ajax-upload.js":
/*!*******************************************!*\
  !*** ./assets/js/elements/ajax-upload.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AjaxUpload: () => (/* binding */ AjaxUpload)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }


























function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


var AjaxUpload = /*#__PURE__*/function (_HTMLElement) {
  function AjaxUpload() {
    var _this;
    _classCallCheck(this, AjaxUpload);
    _this = _callSuper(this, AjaxUpload);
    _this.path = _this.getAttribute("path");
    _this.name = _this.getAttribute("name") || "files";
    _this.min = parseInt(_this.getAttribute("min")) || 0;
    _this.max = parseInt(_this.getAttribute("max")) || 0;
    _this.on("click", ".file-delete", _this.remove);
    _this.on("change", '[type="file"]', _this.handleChange);
    return _this;
  }
  _inherits(AjaxUpload, _HTMLElement);
  return _createClass(AjaxUpload, [{
    key: "on",
    value: function on(event_name, target, callback) {
      var _this2 = this;
      this.querySelectorAll(target).forEach(function (element) {
        return element.addEventListener(event_name, callback.bind(_this2, element));
      });
    }
  }, {
    key: "remove",
    value: function remove(el) {
      if (this.querySelectorAll(".file-item").length === this.min) {
        if (this.min > 1) {
          toast("danger", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_26__.trans)("Il faut avoir au mois %min% fichiers", {
            min: this.min
          }));
        } else {
          toast("danger", (0,_utils_translation__WEBPACK_IMPORTED_MODULE_26__.trans)("Il faut avoir au mois un fichier"));
        }
        return;
      } else if (confirm((0,_utils_translation__WEBPACK_IMPORTED_MODULE_26__.trans)("Êtes vous sûre de vouloir supprimer ce fichier ?"))) {
        var _el$closest;
        (_el$closest = el.closest(".file-item")) === null || _el$closest === void 0 || _el$closest.remove();
        this.querySelector(".file-add").style.display = "block";
      }
    }
  }, {
    key: "handleChange",
    value: function handleChange(target) {
      var _this3 = this;
      var icon = this.querySelector(".bi-plus");
      var spinner = this.querySelector(".spinner-border");
      icon.style.display = "none";
      spinner.style.display = "block";
      target.setAttribute("disabled", "");
      var formData = new FormData();
      formData.append("path", this.path);
      formData.append("file", target.files[0]);
      axios__WEBPACK_IMPORTED_MODULE_27__["default"].post("/admin/file/upload", formData).then(function (res) {
        if (res.data.file_name !== undefined) {
          _this3.append(res.data);
        } else {
          toast(res.data.status, res.data.message);
        }
      })["catch"](function (err) {
        return toast("error", err.message);
      }).then(function () {
        icon.style.display = "block";
        spinner.style.display = "none";
        target.removeAttribute("disabled");
        target.value = "";
      });
    }
  }, {
    key: "append",
    value: function append(data) {
      var item = document.createElement("div");
      var value = "{\"name\": \"".concat(data.file_name, "\", \"path\": \"").concat(data.file_path, "\"}");
      item.setAttribute("class", "col-sm-3 col-6 ps-1 mb-3 file-item");
      item.innerHTML = "<div class=\"card\">\n      <a href=\"/uploads/".concat(data.file_path, "\" target=\"_blank\" title=\"").concat(data.file_name, "\">\n        ").concat(["jpeg", "jpg", "png", "gif"].includes(data.extension) ? '<img src="/uploads/' + data.file_path + '" class="img-fluid">' : '<i class="bi bi-' + this.getIcon(data.extension) + '"></i>', "\n      </a>\n      <i class=\"bi bi-x-circle file-delete\"></i>\n      <input type=\"hidden\" name=\"").concat(this.name, "[]\" value='").concat(value, "' />\n    </div>");
      var addFile = this.querySelector(".file-add");
      addFile.parentNode.insertBefore(item, addFile);
      var deleteFile = item.querySelector(".file-delete");
      deleteFile.addEventListener("click", this.remove.bind(this, deleteFile));
      var countItems = this.querySelectorAll(".file-item").length;
      addFile.style.display = this.max === 0 || countItems < this.max ? "block" : "none";
    }
  }, {
    key: "getIcon",
    value: function getIcon(extension) {
      if (["jpeg", "jpg", "png", "gif"].includes(extension)) {
        return "file-image";
      }
      if (["doc", "docx"].includes(extension)) {
        return "file-word";
      }
      if (["xls", "xlsx"].includes(extension)) {
        return "file-excel";
      }
      if (extension === "pdf") {
        return "file-pdf";
      }
      return "file-richtext";
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/react-clock.js":
/*!*******************************************!*\
  !*** ./assets/js/elements/react-clock.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   ReactClock: () => (/* binding */ ReactClock)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_28__);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


























function _slicedToArray(r, e) { return _arrayWithHoles(r) || _iterableToArrayLimit(r, e) || _unsupportedIterableToArray(r, e) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(r) { if (Array.isArray(r)) return r; }



moment__WEBPACK_IMPORTED_MODULE_28___default().locale("fr-FR");
var ClockContainer = function ClockContainer() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_26__.useState)(moment__WEBPACK_IMPORTED_MODULE_28___default()().format("HH:mm")),
    _useState2 = _slicedToArray(_useState, 2),
    currentTime = _useState2[0],
    setCurrentTime = _useState2[1];

  // update clock every minute
  (0,react__WEBPACK_IMPORTED_MODULE_26__.useEffect)(function () {
    var interval = setInterval(function () {
      setCurrentTime(moment__WEBPACK_IMPORTED_MODULE_28___default()().format("HH:mm"));
    }, 10000);
    return function () {
      return clearInterval(interval);
    };
  }, []);
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement("div", {
    className: "d-flex flex-row"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement("div", {
    className: "clock"
  }, currentTime), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement("div", {
    className: "full-date"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement("span", {
    className: "text-capitalize"
  }, moment__WEBPACK_IMPORTED_MODULE_28___default()().format("dddd")), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement("br", null), moment__WEBPACK_IMPORTED_MODULE_28___default()().format("Do MMMM YYYY")));
};
var ReactClock = /*#__PURE__*/function (_HTMLElement) {
  function ReactClock() {
    _classCallCheck(this, ReactClock);
    return _callSuper(this, ReactClock, arguments);
  }
  _inherits(ReactClock, _HTMLElement);
  return _createClass(ReactClock, [{
    key: "connectedCallback",
    value: function connectedCallback() {
      this.innerHTML = '<div id="react-clock"></div>';
      react_dom__WEBPACK_IMPORTED_MODULE_27__.render(/*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_26__.createElement(ClockContainer, null), document.getElementById("react-clock"));
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/reservation-days.js":
/*!************************************************!*\
  !*** ./assets/js/elements/reservation-days.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   ReservationDays: () => (/* binding */ ReservationDays)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");
/* harmony import */ var core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_properties_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptor_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");
/* harmony import */ var core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_own_property_descriptors_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
/* harmony import */ var core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_int_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! axios */ "./node_modules/axios/lib/axios.js");
/* harmony import */ var _utils_translation__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ../utils/translation */ "./assets/js/utils/translation.js");
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }




























function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }


var ReservationDays = /*#__PURE__*/function (_HTMLElement) {
  function ReservationDays() {
    var _this;
    _classCallCheck(this, ReservationDays);
    _this = _callSuper(this, ReservationDays);
    _this.loading = false;
    _this.params = JSON.parse(_this.getAttribute("params")) || {};
    _this.render();
    _this.addEventListener("refresh", _this.render);
    return _this;
  }
  _inherits(ReservationDays, _HTMLElement);
  return _createClass(ReservationDays, [{
    key: "render",
    value: function render(event) {
      var _this2 = this;
      // merge params from event
      if (event !== undefined && _typeof(event.detail) === "object") {
        if (parseInt(this.params.rid) === parseInt(event.detail.rid) && parseInt(this.params.sid) === parseInt(event.detail.sid) && this.params.start === event.detail.start && this.params.end === event.detail.end && this.params.days === event.detail.days) {
          this.toggleLoading(false);
          return;
        }
        this.params = _objectSpread(_objectSpread({}, this.params), event.detail);
      }
      if (this.params.sid < 1 || this.params.start === "" || this.params.end === "") {
        this.draw("");
        this.toggleLoading(false);
        return;
      }
      this.toggleLoading(true);
      axios__WEBPACK_IMPORTED_MODULE_29__["default"].get("/admin/reservations/days", {
        params: this.params
      }).then(function (res) {
        if (res.data.content !== undefined) {
          _this2.draw(res.data.content);
        } else {
          _this2.draw("<center class=\"mb-3\"><b>".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_28__.trans)("Une erreur est survenue"), "</b></center>"));
        }
      })["catch"](function (err) {
        _this2.draw("<center class=\"mb-3\"><b>".concat(err.message, "</b></center>"));
      }).then(function () {
        return _this2.toggleLoading(false);
      });
    }
  }, {
    key: "draw",
    value: function draw(content) {
      this.innerHTML = content;
    }
  }, {
    key: "toggleLoading",
    value: function toggleLoading(status) {
      this.loading = status;
      if (status) {
        this.draw("<center class=\"mb-3\">\n          <span class=\"spinner-border spinner-border-sm\"></span>\n          <b>".concat((0,_utils_translation__WEBPACK_IMPORTED_MODULE_28__.trans)("Chargement en cours..."), "</b>\n        </center>"));
      } else {
        var _this$querySelector;
        (_this$querySelector = this.querySelector(".spinner-border")) === null || _this$querySelector === void 0 || _this$querySelector.remove();
      }
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/elements/search-form.js":
/*!*******************************************!*\
  !*** ./assets/js/elements/search-form.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   SearchForm: () => (/* binding */ SearchForm)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.index-of.js */ "./node_modules/core-js/modules/es.array.index-of.js");
/* harmony import */ var core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_index_of_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.map.js */ "./node_modules/core-js/modules/es.map.js");
/* harmony import */ var core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_map_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_string_ends_with_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.string.ends-with.js */ "./node_modules/core-js/modules/es.string.ends-with.js");
/* harmony import */ var core_js_modules_es_string_ends_with_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_ends_with_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_web_url_search_params_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/web.url-search-params.js */ "./node_modules/core-js/modules/web.url-search-params.js");
/* harmony import */ var core_js_modules_web_url_search_params_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_url_search_params_js__WEBPACK_IMPORTED_MODULE_25__);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }


























function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _wrapNativeSuper(t) { var r = "function" == typeof Map ? new Map() : void 0; return _wrapNativeSuper = function _wrapNativeSuper(t) { if (null === t || !_isNativeFunction(t)) return t; if ("function" != typeof t) throw new TypeError("Super expression must either be null or a function"); if (void 0 !== r) { if (r.has(t)) return r.get(t); r.set(t, Wrapper); } function Wrapper() { return _construct(t, arguments, _getPrototypeOf(this).constructor); } return Wrapper.prototype = Object.create(t.prototype, { constructor: { value: Wrapper, enumerable: !1, writable: !0, configurable: !0 } }), _setPrototypeOf(Wrapper, t); }, _wrapNativeSuper(t); }
function _construct(t, e, r) { if (_isNativeReflectConstruct()) return Reflect.construct.apply(null, arguments); var o = [null]; o.push.apply(o, e); var p = new (t.bind.apply(t, o))(); return r && _setPrototypeOf(p, r.prototype), p; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _isNativeFunction(t) { try { return -1 !== Function.toString.call(t).indexOf("[native code]"); } catch (n) { return "function" == typeof t; } }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
var SearchForm = /*#__PURE__*/function (_HTMLElement) {
  function SearchForm() {
    var _this;
    _classCallCheck(this, SearchForm);
    _this = _callSuper(this, SearchForm);
    _this.tableId = _this.getAttribute("table");
    _this.querySelector(".btn-reset").addEventListener("click", _this.reset.bind(_this));
    _this.querySelector(".btn-search").addEventListener("click", _this.submit.bind(_this));
    return _this;
  }
  _inherits(SearchForm, _HTMLElement);
  return _createClass(SearchForm, [{
    key: "reset",
    value: function reset() {
      var url = window.location.origin + window.location.pathname;
      window.history.pushState(null, document.title, url);
      this.querySelectorAll('input:not([type="hidden"])').forEach(function (element) {
        element.value = "";
        element.removeAttribute("value");
      });
      this.querySelectorAll("select").forEach(function (element) {
        for (var i = 0; i < element.options.length; i++) {
          element.options[i].removeAttribute("selected");
        }
      });
      var table = document.getElementById(this.tableId);
      table.dispatchEvent(new CustomEvent("refresh", {
        detail: {}
      }));
    }
  }, {
    key: "submit",
    value: function submit(e) {
      e.preventDefault();
      var params = {};
      var form = e.target.closest("search-form").querySelector("form");
      var urlParams = new URLSearchParams(new FormData(form));
      urlParams.forEach(function (value, name) {
        if (value !== "") {
          if (name.endsWith("[]")) {
            name = name.replace("[]", "");
            if (params[name] === undefined) {
              params[name] = [];
            }
            params[name].push(value);
          } else {
            params[name] = value;
          }
        }
      });
      var url = window.location.origin + window.location.pathname;
      if (urlParams) url += "?" + urlParams.toString();
      window.history.pushState(null, document.title, url);
      var table = document.getElementById(this.tableId);
      if (table !== null) {
        table.dispatchEvent(new CustomEvent("refresh", {
          detail: params
        }));
      } else {
        window.location.reload();
      }
    }
  }]);
}(/*#__PURE__*/_wrapNativeSuper(HTMLElement));

/***/ }),

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _elements_ajax_table__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./elements/ajax-table */ "./assets/js/elements/ajax-table.js");
/* harmony import */ var _elements_ajax_form__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./elements/ajax-form */ "./assets/js/elements/ajax-form.js");
/* harmony import */ var _elements_ajax_modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./elements/ajax-modal */ "./assets/js/elements/ajax-modal.js");
/* harmony import */ var _elements_ajax_chart__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./elements/ajax-chart */ "./assets/js/elements/ajax-chart.js");
/* harmony import */ var _elements_search_form__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./elements/search-form */ "./assets/js/elements/search-form.js");
/* harmony import */ var _elements_ajax_upload__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./elements/ajax-upload */ "./assets/js/elements/ajax-upload.js");
/* harmony import */ var _elements_react_clock__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./elements/react-clock */ "./assets/js/elements/react-clock.js");
/* harmony import */ var _elements_reservation_days__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./elements/reservation-days */ "./assets/js/elements/reservation-days.js");
/* harmony import */ var _scripts_toast__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./scripts/toast */ "./assets/js/scripts/toast.js");
/* harmony import */ var _scripts_popover__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./scripts/popover */ "./assets/js/scripts/popover.js");
/* harmony import */ var _scripts_tooltip__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./scripts/tooltip */ "./assets/js/scripts/tooltip.js");
/* harmony import */ var _scripts_select2__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./scripts/select2 */ "./assets/js/scripts/select2.js");
/* harmony import */ var _scripts_select2__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_scripts_select2__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _scripts_salle__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./scripts/salle */ "./assets/js/scripts/salle.js");
/* harmony import */ var _scripts_salle__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_scripts_salle__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var _scripts_bureau__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./scripts/bureau */ "./assets/js/scripts/bureau.js");
/* harmony import */ var _scripts_bureau__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(_scripts_bureau__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var _scripts_contacts__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./scripts/contacts */ "./assets/js/scripts/contacts.js");
/* harmony import */ var _scripts_setting__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./scripts/setting */ "./assets/js/scripts/setting.js");
/* harmony import */ var _scripts_setting__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(_scripts_setting__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var _scripts_entries__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./scripts/entries */ "./assets/js/scripts/entries.js");
/* harmony import */ var _scripts_entries__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(_scripts_entries__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var _scripts_autocomplete__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./scripts/autocomplete */ "./assets/js/scripts/autocomplete.js");
/* harmony import */ var _scripts_autocomplete__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(_scripts_autocomplete__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var _scripts_datetimepicker__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./scripts/datetimepicker */ "./assets/js/scripts/datetimepicker.js");
/* harmony import */ var _scripts_consomation__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./scripts/consomation */ "./assets/js/scripts/consomation.js");
/* harmony import */ var _scripts_consomation__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(_scripts_consomation__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var _scripts_reservation_type__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./scripts/reservation-type */ "./assets/js/scripts/reservation-type.js");
/* harmony import */ var _scripts_reservation_days__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./scripts/reservation-days */ "./assets/js/scripts/reservation-days.js");
/* harmony import */ var _scripts_socialnetworks__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./scripts/socialnetworks */ "./assets/js/scripts/socialnetworks.js");
/* harmony import */ var _scripts_socialnetworks__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(_scripts_socialnetworks__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var bootstrap_js_src_tab__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! bootstrap/js/src/tab */ "./node_modules/bootstrap/js/src/tab.js");
/* harmony import */ var bootstrap_js_src_dropdown__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! bootstrap/js/src/dropdown */ "./node_modules/bootstrap/js/src/dropdown.js");
/* harmony import */ var bootstrap_js_src_collapse__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! bootstrap/js/src/collapse */ "./node_modules/bootstrap/js/src/collapse.js");
/* harmony import */ var bootstrap_js_src_offcanvas__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! bootstrap/js/src/offcanvas */ "./node_modules/bootstrap/js/src/offcanvas.js");
/* harmony import */ var _styles_global_scss__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ../styles/global.scss */ "./assets/styles/global.scss");





























// Custom Elements
customElements.define("ajax-table", _elements_ajax_table__WEBPACK_IMPORTED_MODULE_0__.AjaxTable);
customElements.define("ajax-form", _elements_ajax_form__WEBPACK_IMPORTED_MODULE_1__.AjaxForm);
customElements.define("ajax-modal", _elements_ajax_modal__WEBPACK_IMPORTED_MODULE_2__.AjaxModal);
customElements.define("ajax-chart", _elements_ajax_chart__WEBPACK_IMPORTED_MODULE_3__.AjaxChart);
customElements.define("search-form", _elements_search_form__WEBPACK_IMPORTED_MODULE_4__.SearchForm);
customElements.define("ajax-upload", _elements_ajax_upload__WEBPACK_IMPORTED_MODULE_5__.AjaxUpload);
customElements.define("react-clock", _elements_react_clock__WEBPACK_IMPORTED_MODULE_6__.ReactClock);
customElements.define("reservation-days", _elements_reservation_days__WEBPACK_IMPORTED_MODULE_7__.ReservationDays);

/***/ }),

/***/ "./assets/js/scripts/autocomplete.js":
/*!*******************************************!*\
  !*** ./assets/js/scripts/autocomplete.js ***!
  \*******************************************/
/***/ (() => {

window.addEventListener("ajax.modal.ready", function () {
  if (window.jQuery && document.querySelector("#course_adresse_ramassage").length && document.querySelector("#course_adresse_livraison").length) {
    $("#course_adresse_ramassage").autocomplete();
    $("#course_adresse_livraison").autocomplete();
  }
});

/***/ }),

/***/ "./assets/js/scripts/bureau.js":
/*!*************************************!*\
  !*** ./assets/js/scripts/bureau.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
window.addEventListener("ajax.modal.ready", function () {
  var societe = document.getElementById("bureau_societe");
  var direction = document.getElementById("bureau_direction");
  societe === null || societe === void 0 || societe.addEventListener("change", function () {
    direction.querySelectorAll("option:not(:first-child)").forEach(function (option) {
      var societeValue = parseInt(societe.value) || 0;
      var societeId = parseInt(option.getAttribute("data-societe"));
      if (societeValue === societeId) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
        if (direction.value === option.value) {
          direction.value = "";
        }
      }
    });
  });
});

/***/ }),

/***/ "./assets/js/scripts/consomation.js":
/*!******************************************!*\
  !*** ./assets/js/scripts/consomation.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.number.to-fixed.js */ "./node_modules/core-js/modules/es.number.to-fixed.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
window.updateConsomationTotal = function () {
  var total = 0;
  document.querySelectorAll(".consomation-sous-total").forEach(function (input) {
    total += parseFloat(input.value) || 0;
  });
  document.getElementById("consomation_total").value = total.toFixed(2);
};

/***/ }),

/***/ "./assets/js/scripts/contacts.js":
/*!***************************************!*\
  !*** ./assets/js/scripts/contacts.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _utils_email__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../utils/email */ "./assets/js/utils/email.js");





var initContacts = function initContacts() {
  if (!window.jQuery || !jQuery.fn.select2 || !document.querySelectorAll("select.contacts").length) {
    return;
  }
  document.querySelectorAll("select.contacts").forEach(function (select) {
    $(select).select2({
      ajax: {
        url: "/admin/contacts/search",
        type: "GET",
        dataType: "json",
        delay: 250,
        cache: true,
        data: function data(params) {
          return {
            keywords: params.term
          };
        },
        processResults: function processResults(data) {
          return {
            more: false,
            results: data.contacts.map(function (email) {
              return {
                id: email,
                text: email
              };
            })
          };
        }
      },
      tags: true,
      multiple: true,
      language: "fr",
      tokenSeparators: [","],
      closeOnSelect: true,
      minimumInputLength: 1,
      dropdownParent: $(select).parent(),
      createTag: function createTag(term) {
        var value = term.term;
        if ((0,_utils_email__WEBPACK_IMPORTED_MODULE_4__.isValidEmail)(value)) {
          return {
            id: value,
            text: value
          };
        }
        return null;
      }
    });
  });
};
window.addEventListener("ajax.modal.ready", initContacts);
window.addEventListener("ajax.form.ready", initContacts);

/***/ }),

/***/ "./assets/js/scripts/datetimepicker.js":
/*!*********************************************!*\
  !*** ./assets/js/scripts/datetimepicker.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _reservation_days__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./reservation-days */ "./assets/js/scripts/reservation-days.js");




var initDatetimepicker = function initDatetimepicker() {
  if (!window.jQuery || !document.querySelectorAll("input.datetimepicker").length) {
    return;
  }
  document.querySelectorAll("input.datetimepicker").forEach(function (input) {
    $(input).datetimepicker({
      locale: "fr",
      stepping: 5,
      sideBySide: true,
      minDate: "2021-01-01",
      maxDate: "2030-12-31",
      format: "DD/MM/YYYY HH:mm"
    }).on("dp.change", _reservation_days__WEBPACK_IMPORTED_MODULE_3__.fetchReservationDays);
  });
};
window.addEventListener("ajax.modal.ready", initDatetimepicker);
window.addEventListener("ajax.form.ready", initDatetimepicker);

/***/ }),

/***/ "./assets/js/scripts/entries.js":
/*!**************************************!*\
  !*** ./assets/js/scripts/entries.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.ends-with.js */ "./node_modules/core-js/modules/es.string.ends-with.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
window.addEventListener("ajax.form.ready", function () {
  // add item
  document.querySelectorAll("button.entry-add").forEach(function (button) {
    button.addEventListener("click", function () {
      var time = new Date().getTime();
      var itemsContainer = document.getElementById(button.getAttribute("data-target"));
      var entry = itemsContainer.querySelector(".entry-item").cloneNode(true);
      entry.querySelectorAll(".form-control, .form-select").forEach(function (control) {
        if (control.getAttribute("id").endsWith("_id")) {
          control.value = "0";
        } else {
          control.value = "";
        }
        control.setAttribute("id", control.getAttribute("id").replace(/_([0-9]+)_/, "_".concat(time, "_")));
        control.setAttribute("name", control.getAttribute("name").replace(/_([0-9]+)_/, "_".concat(time, "_")));
      });
      entry.querySelectorAll(".image-item").forEach(function (image) {
        return image.remove();
      });
      entry.querySelectorAll("image-upload").forEach(function (upload) {
        upload.setAttribute("name", upload.getAttribute("name").replace(/_([0-9]+)_/, "_".concat(time, "_")));
      });
      itemsContainer.append(entry);
      entry.querySelector("button.entry-delete").addEventListener("click", function () {
        if (confirm("Êtes vous sûr ?")) {
          entry.remove();
          var callback = this.getAttribute("callback");
          if (callback !== null) {
            window[callback]();
          }
        }
      });
    });
  });
  // delete entry
  document.querySelectorAll("button.entry-delete").forEach(function (button) {
    button.addEventListener("click", function () {
      if (button.closest(".entries").querySelectorAll(".entry-item").length > 1) {
        if (confirm("Êtes vous sûr ?")) {
          button.closest(".entry-item").remove();
          var callback = button.getAttribute("callback");
          if (callback !== null) {
            window[callback]();
          }
        }
      } else {
        toast("warning", "Veuillez ajouter d'autres éléments pour pouvoir supprimer cet élément");
      }
    });
  });
});

/***/ }),

/***/ "./assets/js/scripts/popover.js":
/*!**************************************!*\
  !*** ./assets/js/scripts/popover.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var bootstrap_js_src_popover__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! bootstrap/js/src/popover */ "./node_modules/bootstrap/js/src/popover.js");




window.addEventListener("ajax.table.ready", function () {
  document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (element) {
    new bootstrap_js_src_popover__WEBPACK_IMPORTED_MODULE_3__["default"](element, {
      container: "body"
    });
  });
});
document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (element) {
  new bootstrap_js_src_popover__WEBPACK_IMPORTED_MODULE_3__["default"](element, {
    container: "body"
  });
});

/***/ }),

/***/ "./assets/js/scripts/reservation-days.js":
/*!***********************************************!*\
  !*** ./assets/js/scripts/reservation-days.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   fetchReservationDays: () => (/* binding */ fetchReservationDays)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _utils_reservation__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../utils/reservation */ "./assets/js/utils/reservation.js");





var initReservationDaysElements = function initReservationDaysElements() {
  var elements = ['[id$="type"] [type="radio"]', "input.start_date", "input.end_date", '[id$="jours_recurrente"] [type="checkbox"]', "select.capacite", "select.salle"];
  elements.forEach(function (selector) {
    var _document$querySelect;
    (_document$querySelect = document.querySelectorAll(selector)) === null || _document$querySelect === void 0 || _document$querySelect.forEach(function (element) {
      return element.addEventListener("change", fetchReservationDays);
    });
  });
  fetchReservationDays();
};
var fetchReservationDays = function fetchReservationDays() {
  var _$$data, _$$data2;
  if (document.querySelector("reservation-days") === null) {
    return;
  }
  if (document.querySelector('[id$="type"] input:checked').value === "all_day") {
    (0,_utils_reservation__WEBPACK_IMPORTED_MODULE_4__.updateEndDate)();
  }
  var startDate = (_$$data = $("input.start_date").data("DateTimePicker")) === null || _$$data === void 0 ? void 0 : _$$data.date().toDate();
  var endDate = (_$$data2 = $("input.end_date").data("DateTimePicker")) === null || _$$data2 === void 0 ? void 0 : _$$data2.date().toDate();
  var days = [];
  document.querySelectorAll('[id$="jours_recurrente"] [type="checkbox"]:checked').forEach(function (input) {
    return days.push(input.value);
  });
  var params = {
    rid: document.querySelector("input.reservation_id").value || 0,
    sid: document.querySelector("select.salle").value || 0,
    days: days.join(","),
    start: moment(startDate).format("YYYY-MM-DD HH:mm:00"),
    end: moment(endDate).format("YYYY-MM-DD HH:mm:00")
  };
  document.querySelector("reservation-days").dispatchEvent(new CustomEvent("refresh", {
    detail: params
  }));
};
window.addEventListener("ajax.modal.ready", initReservationDaysElements);
window.addEventListener("ajax.form.ready", initReservationDaysElements);

/***/ }),

/***/ "./assets/js/scripts/reservation-type.js":
/*!***********************************************!*\
  !*** ./assets/js/scripts/reservation-type.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _utils_reservation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../utils/reservation */ "./assets/js/utils/reservation.js");




var initJoursRecurrente = function initJoursRecurrente() {
  document.querySelectorAll('[id$="type"] [type="radio"]').forEach(function (element) {
    element.addEventListener("change", function () {
      var dateFin = document.getElementById("field_end_date");
      var joursRecurrente = document.querySelector('[id$="jours_recurrente"]');
      var jours = joursRecurrente.closest("#field-jours-recurrente");
      var days = joursRecurrente.querySelectorAll('[type="checkbox"]');
      days.forEach(function (cb) {
        return cb.checked = false;
      });
      switch (this.value) {
        case "normal":
          jours.style.display = "none";
          dateFin.style.display = "block";
          break;
        case "all_day":
          jours.style.display = "none";
          dateFin.style.display = "none";
          (0,_utils_reservation__WEBPACK_IMPORTED_MODULE_3__.updateEndDate)();
          break;
        case "recurrente":
          dateFin.style.display = "block";
          jours.style.display = "block";
          break;
      }
    });
  });
};
window.addEventListener("ajax.modal.ready", initJoursRecurrente);
window.addEventListener("ajax.form.ready", initJoursRecurrente);

/***/ }),

/***/ "./assets/js/scripts/salle.js":
/*!************************************!*\
  !*** ./assets/js/scripts/salle.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
var showSallesByCapacite = function showSallesByCapacite() {
  var salle = document.querySelector("select.salle");
  var capacite = document.querySelector("select.capacite");
  capacite === null || capacite === void 0 || capacite.addEventListener("change", function () {
    salle.querySelectorAll("option:not(:first-child)").forEach(function (option) {
      var capaciteValue = parseInt(capacite.value) || 0;
      var salleCapacite = parseInt(option.getAttribute("data-capacite"));
      if (capaciteValue > 0 && salleCapacite >= capaciteValue) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
        if (salle.value === option.value) {
          salle.value = "";
        }
      }
    });
  });
};
window.addEventListener("ajax.modal.ready", showSallesByCapacite);
window.addEventListener("ajax.form.ready", showSallesByCapacite);

/***/ }),

/***/ "./assets/js/scripts/select2.js":
/*!**************************************!*\
  !*** ./assets/js/scripts/select2.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
var initSelect2 = function initSelect2() {
  if (!window.jQuery || !jQuery.fn.select2 || !document.querySelectorAll(".chm-select2").length) {
    return;
  }
  document.querySelectorAll(".chm-select2").forEach(function (element) {
    $(element).select2({
      language: "fr",
      tags: true,
      dropdownParent: $(element).parent()
    });
  });
};
window.addEventListener("ajax.modal.ready", initSelect2);
window.addEventListener("ajax.form.ready", initSelect2);

/***/ }),

/***/ "./assets/js/scripts/setting.js":
/*!**************************************!*\
  !*** ./assets/js/scripts/setting.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
window.addEventListener("ajax.modal.ready", function () {
  var type = document.getElementById("setting_field_type");
  type === null || type === void 0 || type.addEventListener("change", function () {
    var _this = this;
    document.querySelectorAll("[data-field-type]").forEach(function (field) {
      if (field.getAttribute("data-field-type") === _this.value) {
        field.style.display = "block";
      } else {
        field.style.display = "none";
      }
    });
  });
  // add item
  document.querySelectorAll("button.addLine").forEach(function (button) {
    button.addEventListener("click", function () {
      var keys = [];
      var itemsContainer = button.previousElementSibling;
      itemsContainer.querySelectorAll(".input-group input").forEach(function (input) {
        keys.push(input.getAttribute("data-key"));
      });
      var key = keys.length > 0 ? Math.max.apply(Math, keys) + 1 : 1;
      var item = document.createElement("div");
      item.setAttribute("class", "input-group");
      var fieldType = itemsContainer.closest("[data-field-type]").getAttribute("data-field-type");
      item.innerHTML = "\n          <input type=\"text\" name=\"value[".concat(fieldType, "][").concat(key, "]\" class=\"form-control\" data-key=\"").concat(key, "\">\n          <button type=\"button\" class=\"input-group-text bg-danger text-white deleteLine\">\n              <i class=\"bi bi-dash\"></i>\n          </button>\n        ");
      itemsContainer.append(item);
      item.querySelector(".deleteLine").addEventListener("click", function () {
        return item.remove();
      });
    });
    // delete item
    document.querySelectorAll("button.deleteLine").forEach(function (button) {
      button.addEventListener("click", function () {
        button.closest(".input-group").remove();
      });
    });
  });
});

/***/ }),

/***/ "./assets/js/scripts/socialnetworks.js":
/*!*********************************************!*\
  !*** ./assets/js/scripts/socialnetworks.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
window.addEventListener("ajax.modal.ready", function () {
  // add item
  document.querySelectorAll("button.add-entry").forEach(function (button) {
    button.addEventListener("click", function () {
      var time = new Date().getTime();
      var itemsContainer = button.previousElementSibling;
      var entry = itemsContainer.querySelector(".card-entry").cloneNode(true);
      entry.querySelectorAll(".form-control, .form-select").forEach(function (control) {
        control.value = "";
        control.setAttribute("id", control.getAttribute("id").replace(/_([0-9]+)_/, "_".concat(time, "_")));
        control.setAttribute("name", control.getAttribute("name").replace(/_([0-9]+)_/, "_".concat(time, "_")));
        /*control.setAttribute(
          "link",
          control.getAttribute("link").replace(/_([0-9]+)_/, `_${time}_`)
        );
        control.setAttribute(
          "folowersCount",
          control.getAttribute("folowersCount").replace(/_([0-9]+)_/, `_${time}_`)
        );*/
      });
      itemsContainer.append(entry);
      entry.querySelector("button.delete-entry").addEventListener("click", function () {
        if (confirm("Êtes vous sûr ?")) {
          entry.remove();
        }
      });
    });
  });
  // delete entry
  document.querySelectorAll("button.delete-entry").forEach(function (button) {
    button.addEventListener("click", function () {
      if (button.closest(".entries").querySelectorAll(".card-entry").length > 1) {
        if (confirm("Êtes vous sûr ?")) {
          button.closest(".card-entry").remove();
        }
      } else {
        toast("warning", "Veuillez ajouter d'autres éléments pour pouvoir supprimer cet élément");
      }
    });
  });
});

/***/ }),

/***/ "./assets/js/scripts/toast.js":
/*!************************************!*\
  !*** ./assets/js/scripts/toast.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var bootstrap_js_src_toast__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! bootstrap/js/src/toast */ "./node_modules/bootstrap/js/src/toast.js");

window.toast = function () {
  var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "info";
  var message = arguments.length > 1 ? arguments[1] : undefined;
  var delay = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 3000;
  var toast = document.getElementById("chm-toast") || document.createElement("div");
  toast.setAttribute("class", "toast ".concat(type));
  toast.setAttribute("id", "chm-toast");
  document.body.appendChild(toast);
  toast.innerHTML = "<div class=\"d-flex\">\n      <div class=\"toast-body\">".concat(message, "</div>\n      <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>\n    </div>");
  new bootstrap_js_src_toast__WEBPACK_IMPORTED_MODULE_0__["default"](toast, {
    delay: delay
  }).show();
  toast.addEventListener("hide.bs.toast", function () {
    var _document$getElementB;
    (_document$getElementB = document.getElementById("chm-toast")) === null || _document$getElementB === void 0 || _document$getElementB.remove();
  });
};

/***/ }),

/***/ "./assets/js/scripts/tooltip.js":
/*!**************************************!*\
  !*** ./assets/js/scripts/tooltip.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var bootstrap_js_src_tooltip__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! bootstrap/js/src/tooltip */ "./node_modules/bootstrap/js/src/tooltip.js");




window.addEventListener("ajax.table.ready", function () {
  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (element) {
    new bootstrap_js_src_tooltip__WEBPACK_IMPORTED_MODULE_3__["default"](element, {
      container: "body"
    });
  });
});
document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (element) {
  new bootstrap_js_src_tooltip__WEBPACK_IMPORTED_MODULE_3__["default"](element, {
    container: "body"
  });
});

/***/ }),

/***/ "./assets/js/utils/email.js":
/*!**********************************!*\
  !*** ./assets/js/utils/email.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   isValidEmail: () => (/* binding */ isValidEmail)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_0__);

function isValidEmail(email) {
  var patern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@(([[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,10}))$/;
  return patern.test(email);
}

/***/ }),

/***/ "./assets/js/utils/reservation.js":
/*!****************************************!*\
  !*** ./assets/js/utils/reservation.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   updateEndDate: () => (/* binding */ updateEndDate)
/* harmony export */ });
function updateEndDate() {
  var _$$data;
  var startDate = (_$$data = $("input.start_date").data("DateTimePicker")) === null || _$$data === void 0 ? void 0 : _$$data.date().toDate();
  $("input.end_date").val(moment(startDate).format("DD/MM/YYYY 18:30"));
}

/***/ }),

/***/ "./assets/js/utils/translation.js":
/*!****************************************!*\
  !*** ./assets/js/utils/translation.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   replaceVars: () => (/* binding */ replaceVars),
/* harmony export */   trans: () => (/* binding */ trans)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.entries.js */ "./node_modules/core-js/modules/es.object.entries.js");
/* harmony import */ var core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_entries_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
function _slicedToArray(r, e) { return _arrayWithHoles(r) || _iterableToArrayLimit(r, e) || _unsupportedIterableToArray(r, e) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(r) { if (Array.isArray(r)) return r; }
















function trans(msgid) {
  var variables = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var locale = document.querySelector("html").getAttribute("lang");
  if (window.strings !== undefined && window.strings[locale] !== undefined && window.strings[locale][msgid] !== undefined) {
    return replaceVars(window.strings[locale][msgid], variables);
  } else {
    return replaceVars(msgid, variables);
  }
}
function replaceVars(msgid, variables) {
  for (var _i = 0, _Object$entries = Object.entries(variables); _i < _Object$entries.length; _i++) {
    var _Object$entries$_i = _slicedToArray(_Object$entries[_i], 2),
      key = _Object$entries$_i[0],
      value = _Object$entries$_i[1];
    msgid = msgid.replace("%".concat(key, "%"), value);
  }
  return msgid;
}

/***/ }),

/***/ "./assets/styles/global.scss":
/*!***********************************!*\
  !*** ./assets/styles/global.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./node_modules/moment/locale sync recursive ^\\.\\/.*$":
/*!***************************************************!*\
  !*** ./node_modules/moment/locale/ sync ^\.\/.*$ ***!
  \***************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./af": "./node_modules/moment/locale/af.js",
	"./af.js": "./node_modules/moment/locale/af.js",
	"./ar": "./node_modules/moment/locale/ar.js",
	"./ar-dz": "./node_modules/moment/locale/ar-dz.js",
	"./ar-dz.js": "./node_modules/moment/locale/ar-dz.js",
	"./ar-kw": "./node_modules/moment/locale/ar-kw.js",
	"./ar-kw.js": "./node_modules/moment/locale/ar-kw.js",
	"./ar-ly": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ly.js": "./node_modules/moment/locale/ar-ly.js",
	"./ar-ma": "./node_modules/moment/locale/ar-ma.js",
	"./ar-ma.js": "./node_modules/moment/locale/ar-ma.js",
	"./ar-ps": "./node_modules/moment/locale/ar-ps.js",
	"./ar-ps.js": "./node_modules/moment/locale/ar-ps.js",
	"./ar-sa": "./node_modules/moment/locale/ar-sa.js",
	"./ar-sa.js": "./node_modules/moment/locale/ar-sa.js",
	"./ar-tn": "./node_modules/moment/locale/ar-tn.js",
	"./ar-tn.js": "./node_modules/moment/locale/ar-tn.js",
	"./ar.js": "./node_modules/moment/locale/ar.js",
	"./az": "./node_modules/moment/locale/az.js",
	"./az.js": "./node_modules/moment/locale/az.js",
	"./be": "./node_modules/moment/locale/be.js",
	"./be.js": "./node_modules/moment/locale/be.js",
	"./bg": "./node_modules/moment/locale/bg.js",
	"./bg.js": "./node_modules/moment/locale/bg.js",
	"./bm": "./node_modules/moment/locale/bm.js",
	"./bm.js": "./node_modules/moment/locale/bm.js",
	"./bn": "./node_modules/moment/locale/bn.js",
	"./bn-bd": "./node_modules/moment/locale/bn-bd.js",
	"./bn-bd.js": "./node_modules/moment/locale/bn-bd.js",
	"./bn.js": "./node_modules/moment/locale/bn.js",
	"./bo": "./node_modules/moment/locale/bo.js",
	"./bo.js": "./node_modules/moment/locale/bo.js",
	"./br": "./node_modules/moment/locale/br.js",
	"./br.js": "./node_modules/moment/locale/br.js",
	"./bs": "./node_modules/moment/locale/bs.js",
	"./bs.js": "./node_modules/moment/locale/bs.js",
	"./ca": "./node_modules/moment/locale/ca.js",
	"./ca.js": "./node_modules/moment/locale/ca.js",
	"./cs": "./node_modules/moment/locale/cs.js",
	"./cs.js": "./node_modules/moment/locale/cs.js",
	"./cv": "./node_modules/moment/locale/cv.js",
	"./cv.js": "./node_modules/moment/locale/cv.js",
	"./cy": "./node_modules/moment/locale/cy.js",
	"./cy.js": "./node_modules/moment/locale/cy.js",
	"./da": "./node_modules/moment/locale/da.js",
	"./da.js": "./node_modules/moment/locale/da.js",
	"./de": "./node_modules/moment/locale/de.js",
	"./de-at": "./node_modules/moment/locale/de-at.js",
	"./de-at.js": "./node_modules/moment/locale/de-at.js",
	"./de-ch": "./node_modules/moment/locale/de-ch.js",
	"./de-ch.js": "./node_modules/moment/locale/de-ch.js",
	"./de.js": "./node_modules/moment/locale/de.js",
	"./dv": "./node_modules/moment/locale/dv.js",
	"./dv.js": "./node_modules/moment/locale/dv.js",
	"./el": "./node_modules/moment/locale/el.js",
	"./el.js": "./node_modules/moment/locale/el.js",
	"./en-au": "./node_modules/moment/locale/en-au.js",
	"./en-au.js": "./node_modules/moment/locale/en-au.js",
	"./en-ca": "./node_modules/moment/locale/en-ca.js",
	"./en-ca.js": "./node_modules/moment/locale/en-ca.js",
	"./en-gb": "./node_modules/moment/locale/en-gb.js",
	"./en-gb.js": "./node_modules/moment/locale/en-gb.js",
	"./en-ie": "./node_modules/moment/locale/en-ie.js",
	"./en-ie.js": "./node_modules/moment/locale/en-ie.js",
	"./en-il": "./node_modules/moment/locale/en-il.js",
	"./en-il.js": "./node_modules/moment/locale/en-il.js",
	"./en-in": "./node_modules/moment/locale/en-in.js",
	"./en-in.js": "./node_modules/moment/locale/en-in.js",
	"./en-nz": "./node_modules/moment/locale/en-nz.js",
	"./en-nz.js": "./node_modules/moment/locale/en-nz.js",
	"./en-sg": "./node_modules/moment/locale/en-sg.js",
	"./en-sg.js": "./node_modules/moment/locale/en-sg.js",
	"./eo": "./node_modules/moment/locale/eo.js",
	"./eo.js": "./node_modules/moment/locale/eo.js",
	"./es": "./node_modules/moment/locale/es.js",
	"./es-do": "./node_modules/moment/locale/es-do.js",
	"./es-do.js": "./node_modules/moment/locale/es-do.js",
	"./es-mx": "./node_modules/moment/locale/es-mx.js",
	"./es-mx.js": "./node_modules/moment/locale/es-mx.js",
	"./es-us": "./node_modules/moment/locale/es-us.js",
	"./es-us.js": "./node_modules/moment/locale/es-us.js",
	"./es.js": "./node_modules/moment/locale/es.js",
	"./et": "./node_modules/moment/locale/et.js",
	"./et.js": "./node_modules/moment/locale/et.js",
	"./eu": "./node_modules/moment/locale/eu.js",
	"./eu.js": "./node_modules/moment/locale/eu.js",
	"./fa": "./node_modules/moment/locale/fa.js",
	"./fa.js": "./node_modules/moment/locale/fa.js",
	"./fi": "./node_modules/moment/locale/fi.js",
	"./fi.js": "./node_modules/moment/locale/fi.js",
	"./fil": "./node_modules/moment/locale/fil.js",
	"./fil.js": "./node_modules/moment/locale/fil.js",
	"./fo": "./node_modules/moment/locale/fo.js",
	"./fo.js": "./node_modules/moment/locale/fo.js",
	"./fr": "./node_modules/moment/locale/fr.js",
	"./fr-ca": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ca.js": "./node_modules/moment/locale/fr-ca.js",
	"./fr-ch": "./node_modules/moment/locale/fr-ch.js",
	"./fr-ch.js": "./node_modules/moment/locale/fr-ch.js",
	"./fr.js": "./node_modules/moment/locale/fr.js",
	"./fy": "./node_modules/moment/locale/fy.js",
	"./fy.js": "./node_modules/moment/locale/fy.js",
	"./ga": "./node_modules/moment/locale/ga.js",
	"./ga.js": "./node_modules/moment/locale/ga.js",
	"./gd": "./node_modules/moment/locale/gd.js",
	"./gd.js": "./node_modules/moment/locale/gd.js",
	"./gl": "./node_modules/moment/locale/gl.js",
	"./gl.js": "./node_modules/moment/locale/gl.js",
	"./gom-deva": "./node_modules/moment/locale/gom-deva.js",
	"./gom-deva.js": "./node_modules/moment/locale/gom-deva.js",
	"./gom-latn": "./node_modules/moment/locale/gom-latn.js",
	"./gom-latn.js": "./node_modules/moment/locale/gom-latn.js",
	"./gu": "./node_modules/moment/locale/gu.js",
	"./gu.js": "./node_modules/moment/locale/gu.js",
	"./he": "./node_modules/moment/locale/he.js",
	"./he.js": "./node_modules/moment/locale/he.js",
	"./hi": "./node_modules/moment/locale/hi.js",
	"./hi.js": "./node_modules/moment/locale/hi.js",
	"./hr": "./node_modules/moment/locale/hr.js",
	"./hr.js": "./node_modules/moment/locale/hr.js",
	"./hu": "./node_modules/moment/locale/hu.js",
	"./hu.js": "./node_modules/moment/locale/hu.js",
	"./hy-am": "./node_modules/moment/locale/hy-am.js",
	"./hy-am.js": "./node_modules/moment/locale/hy-am.js",
	"./id": "./node_modules/moment/locale/id.js",
	"./id.js": "./node_modules/moment/locale/id.js",
	"./is": "./node_modules/moment/locale/is.js",
	"./is.js": "./node_modules/moment/locale/is.js",
	"./it": "./node_modules/moment/locale/it.js",
	"./it-ch": "./node_modules/moment/locale/it-ch.js",
	"./it-ch.js": "./node_modules/moment/locale/it-ch.js",
	"./it.js": "./node_modules/moment/locale/it.js",
	"./ja": "./node_modules/moment/locale/ja.js",
	"./ja.js": "./node_modules/moment/locale/ja.js",
	"./jv": "./node_modules/moment/locale/jv.js",
	"./jv.js": "./node_modules/moment/locale/jv.js",
	"./ka": "./node_modules/moment/locale/ka.js",
	"./ka.js": "./node_modules/moment/locale/ka.js",
	"./kk": "./node_modules/moment/locale/kk.js",
	"./kk.js": "./node_modules/moment/locale/kk.js",
	"./km": "./node_modules/moment/locale/km.js",
	"./km.js": "./node_modules/moment/locale/km.js",
	"./kn": "./node_modules/moment/locale/kn.js",
	"./kn.js": "./node_modules/moment/locale/kn.js",
	"./ko": "./node_modules/moment/locale/ko.js",
	"./ko.js": "./node_modules/moment/locale/ko.js",
	"./ku": "./node_modules/moment/locale/ku.js",
	"./ku-kmr": "./node_modules/moment/locale/ku-kmr.js",
	"./ku-kmr.js": "./node_modules/moment/locale/ku-kmr.js",
	"./ku.js": "./node_modules/moment/locale/ku.js",
	"./ky": "./node_modules/moment/locale/ky.js",
	"./ky.js": "./node_modules/moment/locale/ky.js",
	"./lb": "./node_modules/moment/locale/lb.js",
	"./lb.js": "./node_modules/moment/locale/lb.js",
	"./lo": "./node_modules/moment/locale/lo.js",
	"./lo.js": "./node_modules/moment/locale/lo.js",
	"./lt": "./node_modules/moment/locale/lt.js",
	"./lt.js": "./node_modules/moment/locale/lt.js",
	"./lv": "./node_modules/moment/locale/lv.js",
	"./lv.js": "./node_modules/moment/locale/lv.js",
	"./me": "./node_modules/moment/locale/me.js",
	"./me.js": "./node_modules/moment/locale/me.js",
	"./mi": "./node_modules/moment/locale/mi.js",
	"./mi.js": "./node_modules/moment/locale/mi.js",
	"./mk": "./node_modules/moment/locale/mk.js",
	"./mk.js": "./node_modules/moment/locale/mk.js",
	"./ml": "./node_modules/moment/locale/ml.js",
	"./ml.js": "./node_modules/moment/locale/ml.js",
	"./mn": "./node_modules/moment/locale/mn.js",
	"./mn.js": "./node_modules/moment/locale/mn.js",
	"./mr": "./node_modules/moment/locale/mr.js",
	"./mr.js": "./node_modules/moment/locale/mr.js",
	"./ms": "./node_modules/moment/locale/ms.js",
	"./ms-my": "./node_modules/moment/locale/ms-my.js",
	"./ms-my.js": "./node_modules/moment/locale/ms-my.js",
	"./ms.js": "./node_modules/moment/locale/ms.js",
	"./mt": "./node_modules/moment/locale/mt.js",
	"./mt.js": "./node_modules/moment/locale/mt.js",
	"./my": "./node_modules/moment/locale/my.js",
	"./my.js": "./node_modules/moment/locale/my.js",
	"./nb": "./node_modules/moment/locale/nb.js",
	"./nb.js": "./node_modules/moment/locale/nb.js",
	"./ne": "./node_modules/moment/locale/ne.js",
	"./ne.js": "./node_modules/moment/locale/ne.js",
	"./nl": "./node_modules/moment/locale/nl.js",
	"./nl-be": "./node_modules/moment/locale/nl-be.js",
	"./nl-be.js": "./node_modules/moment/locale/nl-be.js",
	"./nl.js": "./node_modules/moment/locale/nl.js",
	"./nn": "./node_modules/moment/locale/nn.js",
	"./nn.js": "./node_modules/moment/locale/nn.js",
	"./oc-lnc": "./node_modules/moment/locale/oc-lnc.js",
	"./oc-lnc.js": "./node_modules/moment/locale/oc-lnc.js",
	"./pa-in": "./node_modules/moment/locale/pa-in.js",
	"./pa-in.js": "./node_modules/moment/locale/pa-in.js",
	"./pl": "./node_modules/moment/locale/pl.js",
	"./pl.js": "./node_modules/moment/locale/pl.js",
	"./pt": "./node_modules/moment/locale/pt.js",
	"./pt-br": "./node_modules/moment/locale/pt-br.js",
	"./pt-br.js": "./node_modules/moment/locale/pt-br.js",
	"./pt.js": "./node_modules/moment/locale/pt.js",
	"./ro": "./node_modules/moment/locale/ro.js",
	"./ro.js": "./node_modules/moment/locale/ro.js",
	"./ru": "./node_modules/moment/locale/ru.js",
	"./ru.js": "./node_modules/moment/locale/ru.js",
	"./sd": "./node_modules/moment/locale/sd.js",
	"./sd.js": "./node_modules/moment/locale/sd.js",
	"./se": "./node_modules/moment/locale/se.js",
	"./se.js": "./node_modules/moment/locale/se.js",
	"./si": "./node_modules/moment/locale/si.js",
	"./si.js": "./node_modules/moment/locale/si.js",
	"./sk": "./node_modules/moment/locale/sk.js",
	"./sk.js": "./node_modules/moment/locale/sk.js",
	"./sl": "./node_modules/moment/locale/sl.js",
	"./sl.js": "./node_modules/moment/locale/sl.js",
	"./sq": "./node_modules/moment/locale/sq.js",
	"./sq.js": "./node_modules/moment/locale/sq.js",
	"./sr": "./node_modules/moment/locale/sr.js",
	"./sr-cyrl": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr-cyrl.js": "./node_modules/moment/locale/sr-cyrl.js",
	"./sr.js": "./node_modules/moment/locale/sr.js",
	"./ss": "./node_modules/moment/locale/ss.js",
	"./ss.js": "./node_modules/moment/locale/ss.js",
	"./sv": "./node_modules/moment/locale/sv.js",
	"./sv.js": "./node_modules/moment/locale/sv.js",
	"./sw": "./node_modules/moment/locale/sw.js",
	"./sw.js": "./node_modules/moment/locale/sw.js",
	"./ta": "./node_modules/moment/locale/ta.js",
	"./ta.js": "./node_modules/moment/locale/ta.js",
	"./te": "./node_modules/moment/locale/te.js",
	"./te.js": "./node_modules/moment/locale/te.js",
	"./tet": "./node_modules/moment/locale/tet.js",
	"./tet.js": "./node_modules/moment/locale/tet.js",
	"./tg": "./node_modules/moment/locale/tg.js",
	"./tg.js": "./node_modules/moment/locale/tg.js",
	"./th": "./node_modules/moment/locale/th.js",
	"./th.js": "./node_modules/moment/locale/th.js",
	"./tk": "./node_modules/moment/locale/tk.js",
	"./tk.js": "./node_modules/moment/locale/tk.js",
	"./tl-ph": "./node_modules/moment/locale/tl-ph.js",
	"./tl-ph.js": "./node_modules/moment/locale/tl-ph.js",
	"./tlh": "./node_modules/moment/locale/tlh.js",
	"./tlh.js": "./node_modules/moment/locale/tlh.js",
	"./tr": "./node_modules/moment/locale/tr.js",
	"./tr.js": "./node_modules/moment/locale/tr.js",
	"./tzl": "./node_modules/moment/locale/tzl.js",
	"./tzl.js": "./node_modules/moment/locale/tzl.js",
	"./tzm": "./node_modules/moment/locale/tzm.js",
	"./tzm-latn": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm-latn.js": "./node_modules/moment/locale/tzm-latn.js",
	"./tzm.js": "./node_modules/moment/locale/tzm.js",
	"./ug-cn": "./node_modules/moment/locale/ug-cn.js",
	"./ug-cn.js": "./node_modules/moment/locale/ug-cn.js",
	"./uk": "./node_modules/moment/locale/uk.js",
	"./uk.js": "./node_modules/moment/locale/uk.js",
	"./ur": "./node_modules/moment/locale/ur.js",
	"./ur.js": "./node_modules/moment/locale/ur.js",
	"./uz": "./node_modules/moment/locale/uz.js",
	"./uz-latn": "./node_modules/moment/locale/uz-latn.js",
	"./uz-latn.js": "./node_modules/moment/locale/uz-latn.js",
	"./uz.js": "./node_modules/moment/locale/uz.js",
	"./vi": "./node_modules/moment/locale/vi.js",
	"./vi.js": "./node_modules/moment/locale/vi.js",
	"./x-pseudo": "./node_modules/moment/locale/x-pseudo.js",
	"./x-pseudo.js": "./node_modules/moment/locale/x-pseudo.js",
	"./yo": "./node_modules/moment/locale/yo.js",
	"./yo.js": "./node_modules/moment/locale/yo.js",
	"./zh-cn": "./node_modules/moment/locale/zh-cn.js",
	"./zh-cn.js": "./node_modules/moment/locale/zh-cn.js",
	"./zh-hk": "./node_modules/moment/locale/zh-hk.js",
	"./zh-hk.js": "./node_modules/moment/locale/zh-hk.js",
	"./zh-mo": "./node_modules/moment/locale/zh-mo.js",
	"./zh-mo.js": "./node_modules/moment/locale/zh-mo.js",
	"./zh-tw": "./node_modules/moment/locale/zh-tw.js",
	"./zh-tw.js": "./node_modules/moment/locale/zh-tw.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./node_modules/moment/locale sync recursive ^\\.\\/.*$";

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_moment_locale_af_js-node_modules_moment_locale_ar-dz_js-node_modules_mom-7969cc","vendors-node_modules_popperjs_core_lib_createPopper_js-node_modules_popperjs_core_lib_modifie-b5b9e9","vendors-node_modules_bootstrap_js_src_collapse_js-node_modules_bootstrap_js_src_dropdown_js-n-582c35"], () => (__webpack_exec__("./assets/js/index.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZXMiOlsid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL2VsZW1lbnRzL2FqYXgtY2hhcnQuanMiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9hc3NldHMvanMvZWxlbWVudHMvYWpheC1mb3JtLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL2VsZW1lbnRzL2FqYXgtbW9kYWwuanMiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9hc3NldHMvanMvZWxlbWVudHMvYWpheC10YWJsZS5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9lbGVtZW50cy9hamF4LXVwbG9hZC5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9lbGVtZW50cy9yZWFjdC1jbG9jay5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9lbGVtZW50cy9yZXNlcnZhdGlvbi1kYXlzLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL2VsZW1lbnRzL3NlYXJjaC1mb3JtLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL2luZGV4LmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvYXV0b2NvbXBsZXRlLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvYnVyZWF1LmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvY29uc29tYXRpb24uanMiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9hc3NldHMvanMvc2NyaXB0cy9jb250YWN0cy5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9zY3JpcHRzL2RhdGV0aW1lcGlja2VyLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvZW50cmllcy5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9zY3JpcHRzL3BvcG92ZXIuanMiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9hc3NldHMvanMvc2NyaXB0cy9yZXNlcnZhdGlvbi1kYXlzLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvcmVzZXJ2YXRpb24tdHlwZS5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9zY3JpcHRzL3NhbGxlLmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvc2VsZWN0Mi5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9zY3JpcHRzL3NldHRpbmcuanMiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9hc3NldHMvanMvc2NyaXB0cy9zb2NpYWxuZXR3b3Jrcy5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy9zY3JpcHRzL3RvYXN0LmpzIiwid2VicGFjazovL2FmZmljaGVzLy4vYXNzZXRzL2pzL3NjcmlwdHMvdG9vbHRpcC5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy91dGlscy9lbWFpbC5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy91dGlscy9yZXNlcnZhdGlvbi5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9qcy91dGlscy90cmFuc2xhdGlvbi5qcyIsIndlYnBhY2s6Ly9hZmZpY2hlcy8uL2Fzc2V0cy9zdHlsZXMvZ2xvYmFsLnNjc3MiLCJ3ZWJwYWNrOi8vYWZmaWNoZXMvLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS8gc3luYyBeXFwuXFwvLiokIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBheGlvcyBmcm9tIFwiYXhpb3NcIjtcclxuXHJcbmltcG9ydCB7IHRyYW5zIH0gZnJvbSBcIi4uL3V0aWxzL3RyYW5zbGF0aW9uXCI7XHJcblxyXG5leHBvcnQgY2xhc3MgQWpheENoYXJ0IGV4dGVuZHMgSFRNTEVsZW1lbnQge1xyXG4gIGNvbnN0cnVjdG9yKCkge1xyXG4gICAgc3VwZXIoKTtcclxuICAgIHRoaXMubG9hZGluZyA9IGZhbHNlO1xyXG4gICAgdGhpcy50eXBlID0gdGhpcy5nZXRBdHRyaWJ1dGUoXCJ0eXBlXCIpO1xyXG4gICAgdGhpcy51cmwgPSB0aGlzLmdldEF0dHJpYnV0ZShcInVybFwiKTtcclxuICAgIHRoaXMucGFyYW1zID0gSlNPTi5wYXJzZSh0aGlzLmdldEF0dHJpYnV0ZShcInBhcmFtc1wiKSkgfHwge307XHJcbiAgICB0aGlzLm9wdGlvbnMgPSBKU09OLnBhcnNlKHRoaXMuZ2V0QXR0cmlidXRlKFwib3B0aW9uc1wiKSkgfHwge307XHJcbiAgICB0aGlzLnJlbmRlcigpO1xyXG4gIH1cclxuICByZW5kZXIoKSB7XHJcbiAgICBpZiAodGhpcy5sb2FkaW5nKSByZXR1cm47XHJcbiAgICB0aGlzLnRvZ2dsZUxvYWRpbmcodHJ1ZSk7XHJcbiAgICBheGlvc1xyXG4gICAgICAuZ2V0KHRoaXMudXJsLCB7IHBhcmFtczogdGhpcy5wYXJhbXMgfSlcclxuICAgICAgLnRoZW4oKHJlcykgPT4ge1xyXG4gICAgICAgIGlmIChyZXMuZGF0YS5zdGF0dXMgPT09IFwic3VjY2Vzc1wiKSB7XHJcbiAgICAgICAgICBpZiAocmVzLmRhdGEuZGF0YS5kYXRhc2V0c1swXS5kYXRhLmxlbmd0aCA+IDApIHtcclxuICAgICAgICAgICAgY29uc3QgY29uZmlnID0ge1xyXG4gICAgICAgICAgICAgIHR5cGU6IHRoaXMudHlwZSxcclxuICAgICAgICAgICAgICBkYXRhOiByZXMuZGF0YS5kYXRhIHx8IFtdLFxyXG4gICAgICAgICAgICAgIG9wdGlvbnM6IHJlcy5kYXRhLm9wdGlvbnMgfHwgdGhpcy5vcHRpb25zLFxyXG4gICAgICAgICAgICB9O1xyXG4gICAgICAgICAgICBjb25zdCBjYW52YXMgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiY2FudmFzXCIpO1xyXG4gICAgICAgICAgICB0aGlzLmFwcGVuZENoaWxkKGNhbnZhcyk7XHJcbiAgICAgICAgICAgIG5ldyB3aW5kb3cuQ2hhcnQoY2FudmFzLmdldENvbnRleHQoXCIyZFwiKSwgY29uZmlnKTtcclxuICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIHRoaXMuZHJhdyhgPGI+JHt0cmFucyhcIkF1Y3VuIHLDqXN1bHRhdCBuJ2Egw6l0w6kgdHJvdXbDqVwiKX08L2I+YCk7XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgIHRoaXMuZHJhdyhgPGI+JHt0cmFucyhcIlVuZSBlcnJldXIgZXN0IHN1cnZlbnVlXCIpfTwvYj5gKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0pXHJcbiAgICAgIC5jYXRjaCgoZXJyKSA9PiB7XHJcbiAgICAgICAgdGhpcy5kcmF3KGA8Yj4ke2Vyci5tZXNzYWdlfTwvYj5gKTtcclxuICAgICAgfSlcclxuICAgICAgLnRoZW4oKCkgPT4gdGhpcy50b2dnbGVMb2FkaW5nKGZhbHNlKSk7XHJcbiAgfVxyXG4gIGRyYXcoY29udGVudCkge1xyXG4gICAgdGhpcy5pbm5lckhUTUwgPSBjb250ZW50O1xyXG4gIH1cclxuICB0b2dnbGVMb2FkaW5nKHN0YXR1cykge1xyXG4gICAgdGhpcy5sb2FkaW5nID0gc3RhdHVzO1xyXG4gICAgaWYgKHN0YXR1cykge1xyXG4gICAgICB0aGlzLmRyYXcoYDxzcGFuIGNsYXNzPVwic3Bpbm5lci1ib3JkZXIgc3Bpbm5lci1ib3JkZXItc21cIj48L3NwYW4+YCk7XHJcbiAgICB9IGVsc2Uge1xyXG4gICAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIuc3Bpbm5lci1ib3JkZXJcIik/LnJlbW92ZSgpO1xyXG4gICAgfVxyXG4gIH1cclxufVxyXG4iLCJpbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XHJcblxyXG5pbXBvcnQgeyB0cmFucyB9IGZyb20gXCIuLi91dGlscy90cmFuc2xhdGlvblwiO1xyXG5cclxuZXhwb3J0IGNsYXNzIEFqYXhGb3JtIGV4dGVuZHMgSFRNTEVsZW1lbnQge1xyXG4gIGNvbm5lY3RlZENhbGxiYWNrKCkge1xyXG4gICAgd2luZG93LmRpc3BhdGNoRXZlbnQobmV3IEN1c3RvbUV2ZW50KFwiYWpheC5mb3JtLnJlYWR5XCIpKTtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvcihcImZvcm1cIikuYWRkRXZlbnRMaXN0ZW5lcihcclxuICAgICAgXCJzdWJtaXRcIixcclxuICAgICAgdGhpcy5zdWJtaXQuYmluZCh0aGlzKVxyXG4gICAgKTtcclxuICB9XHJcbiAgc3VibWl0KGUpIHtcclxuICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgIGNvbnN0IGZvcm0gPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCJmb3JtXCIpO1xyXG4gICAgY29uc3QgZm9ybURhdGEgPSBuZXcgRm9ybURhdGEoZm9ybSk7XHJcbiAgICBjb25zdCBidG4gPSBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1t0eXBlPVwic3VibWl0XCJdJyk7XHJcbiAgICBjb25zdCBidG5IdG1sID0gYnRuLmlubmVySFRNTDtcclxuICAgIGJ0bi5pbm5lckhUTUwgPSBgPHNwYW4gY2xhc3M9XCJzcGlubmVyLWJvcmRlciBzcGlubmVyLWJvcmRlci1zbSBmcy02XCI+PC9zcGFuPiAke3RyYW5zKFxyXG4gICAgICBcIlRyYWl0ZW1lbnQgZW4gY291cnMuLi5cIlxyXG4gICAgKX1gO1xyXG4gICAgYnRuLnNldEF0dHJpYnV0ZShcImRpc2FibGVkXCIsIFwiZGlzYWJsZWRcIik7XHJcbiAgICBheGlvc1xyXG4gICAgICAucG9zdChmb3JtLmdldEF0dHJpYnV0ZShcImFjdGlvblwiKSwgZm9ybURhdGEpXHJcbiAgICAgIC50aGVuKChyZXMpID0+IHtcclxuICAgICAgICBpZiAocmVzLmRhdGEubWVzc2FnZSAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgICB0b2FzdChyZXMuZGF0YS5zdGF0dXMsIHJlcy5kYXRhLm1lc3NhZ2UpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBpZiAocmVzLmRhdGEuc3RhdHVzID09PSBcInN1Y2Nlc3NcIikge1xyXG4gICAgICAgICAgdGhpcy5kaXNwYXRjaEV2ZW50KFxyXG4gICAgICAgICAgICBuZXcgQ3VzdG9tRXZlbnQoXCJhamF4LmZvcm0uc3VjY2Vzc1wiLCB7IGRldGFpbDogcmVzIH0pXHJcbiAgICAgICAgICApO1xyXG4gICAgICAgIH1cclxuICAgICAgfSlcclxuICAgICAgLmNhdGNoKChlcnIpID0+IHtcclxuICAgICAgICB0b2FzdChcImVycm9yXCIsIGVyci5tZXNzYWdlKTtcclxuICAgICAgfSlcclxuICAgICAgLnRoZW4oKCkgPT4ge1xyXG4gICAgICAgIGJ0bi5pbm5lckhUTUwgPSBidG5IdG1sO1xyXG4gICAgICAgIGJ0bi5yZW1vdmVBdHRyaWJ1dGUoXCJkaXNhYmxlZFwiKTtcclxuICAgICAgfSk7XHJcbiAgfVxyXG59XHJcbiIsImltcG9ydCBheGlvcyBmcm9tIFwiYXhpb3NcIjtcclxuaW1wb3J0IE1vZGFsIGZyb20gXCJib290c3RyYXAvanMvc3JjL21vZGFsXCI7XHJcblxyXG5pbXBvcnQgeyB0cmFucyB9IGZyb20gXCIuLi91dGlscy90cmFuc2xhdGlvblwiO1xyXG5cclxuZXhwb3J0IGNsYXNzIEFqYXhNb2RhbCBleHRlbmRzIEhUTUxFbGVtZW50IHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHN1cGVyKCk7XHJcbiAgICB0aGlzLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XHJcbiAgICAgIC8vIGF0dHJpYnV0ZXNcclxuICAgICAgdGhpcy51cmwgPSB0aGlzLmdldEF0dHJpYnV0ZShcInVybFwiKTtcclxuICAgICAgdGhpcy53aWR0aCA9IHRoaXMuZ2V0QXR0cmlidXRlKFwid2lkdGhcIik7XHJcbiAgICAgIHRoaXMucGFyYW1zID0gSlNPTi5wYXJzZSh0aGlzLmdldEF0dHJpYnV0ZShcInBhcmFtc1wiKSkgfHwge307XHJcbiAgICAgIHRoaXMuZGVmYXVsdExvYWRpbmdNZXNzYWdlID0gdHJhbnMoXCJDaGFyZ2VtZW50IGVuIGNvdXJzLi4uXCIpO1xyXG4gICAgICB0aGlzLm1lc3NhZ2UgPSB0aGlzLmdldEF0dHJpYnV0ZShcIm1lc3NhZ2VcIikgfHwgdGhpcy5kZWZhdWx0TG9hZGluZ01lc3NhZ2U7XHJcbiAgICAgIC8vIGNoZWNrIGlmIHJlcXVpcmUgY29uZmlybWF0aW9uXHJcbiAgICAgIGlmIChcclxuICAgICAgICB0aGlzLmdldEF0dHJpYnV0ZShcImNvbmZpcm1cIikgPT09IFwiMVwiICYmXHJcbiAgICAgICAgIWNvbmZpcm0odHJhbnMoXCLDinRlcyB2b3VzIHPDu3JlIGRlIHZvdWxvaXIgZXhlY3V0ZXIgY2V0dGUgYWN0aW9uID9cIikpXHJcbiAgICAgIClcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIC8vIGJsb2Nrc1xyXG4gICAgICB0aGlzLnRpdGxlID0gYDxzcGFuIGNsYXNzPVwic3Bpbm5lci1ib3JkZXJcIiBzdHlsZT1cIndpZHRoOiAxLjRyZW07IGhlaWdodDogMS40cmVtO2JvcmRlci13aWR0aDogMC4xNWVtO1wiPjwvc3Bhbj4gJHt0aGlzLm1lc3NhZ2V9YDtcclxuICAgICAgdGhpcy5ib2R5ID0gXCJcIjtcclxuICAgICAgdGhpcy5mb290ZXIgPSBcIlwiO1xyXG4gICAgICB0aGlzLmNvbnRlbnQgPSBcIlwiO1xyXG4gICAgICAvLyBvcGVuIG1vZGFsXHJcbiAgICAgIHRoaXMuY29udGFpbmVySWQgPSBcImFqYXgtbW9kYWxcIjtcclxuICAgICAgdGhpcy5lbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQodGhpcy5jb250YWluZXJJZCk7XHJcbiAgICAgIGlmICh0aGlzLmVsZW1lbnQgPT09IG51bGwpIHtcclxuICAgICAgICB0aGlzLmVsZW1lbnQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiZGl2XCIpO1xyXG4gICAgICAgIHRoaXMuZWxlbWVudC5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLCBcIm1vZGFsIGZhZGVcIik7XHJcbiAgICAgICAgdGhpcy5lbGVtZW50LnNldEF0dHJpYnV0ZShcImlkXCIsIHRoaXMuY29udGFpbmVySWQpO1xyXG4gICAgICAgIHRoaXMuZWxlbWVudC5zZXRBdHRyaWJ1dGUoXCJ0YWJpbmRleFwiLCBcIi0xXCIpO1xyXG4gICAgICAgIGRvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQodGhpcy5lbGVtZW50KTtcclxuICAgICAgfVxyXG4gICAgICB0aGlzLmZldGNoKCk7XHJcbiAgICB9KTtcclxuICB9XHJcbiAgZmV0Y2goKSB7XHJcbiAgICB0aGlzLm9wZW4odHJ1ZSk7XHJcbiAgICBheGlvc1xyXG4gICAgICAuZ2V0KHRoaXMudXJsLCB7XHJcbiAgICAgICAgcGFyYW1zOiB0aGlzLnBhcmFtcyxcclxuICAgICAgfSlcclxuICAgICAgLnRoZW4oKHJlcykgPT4ge1xyXG4gICAgICAgIGlmIChyZXMuZGF0YS5tZXNzYWdlICE9PSB1bmRlZmluZWQpIHtcclxuICAgICAgICAgIHRoaXMuY2xvc2UocmVzKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgdGhpcy50aXRsZSA9IHJlcy5kYXRhLnRpdGxlIHx8IFwiXCI7XHJcbiAgICAgICAgICB0aGlzLmJvZHkgPSByZXMuZGF0YS5ib2R5IHx8IFwiXCI7XHJcbiAgICAgICAgICB0aGlzLmZvb3RlciA9IHJlcy5kYXRhLmZvb3RlciB8fCBcIlwiO1xyXG4gICAgICAgICAgdGhpcy5jb250ZW50ID0gcmVzLmRhdGEuY29udGVudCB8fCBcIlwiO1xyXG4gICAgICAgICAgdGhpcy5yZW5kZXIoKTtcclxuICAgICAgICAgIC8vIHRyaWdnZXIgcmVhZHkgZXZlbnRcclxuICAgICAgICAgIHdpbmRvdy5kaXNwYXRjaEV2ZW50KG5ldyBDdXN0b21FdmVudChcImFqYXgubW9kYWwucmVhZHlcIikpO1xyXG4gICAgICAgICAgLy8gY2xvc2Ugb24gZm9ybSBzdWJtaXRlZFxyXG4gICAgICAgICAgdGhpcy5lbGVtZW50XHJcbiAgICAgICAgICAgIC5xdWVyeVNlbGVjdG9yKFwiYWpheC1mb3JtXCIpXHJcbiAgICAgICAgICAgID8uYWRkRXZlbnRMaXN0ZW5lcihcImFqYXguZm9ybS5zdWNjZXNzXCIsIChldmVudCkgPT5cclxuICAgICAgICAgICAgICB0aGlzLmNsb3NlKGV2ZW50LmRldGFpbClcclxuICAgICAgICAgICAgKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0pXHJcbiAgICAgIC5jYXRjaCgoZXJyKSA9PiB7XHJcbiAgICAgICAgdGhpcy50aXRsZSA9IGA8aSBjbGFzcz1cImJpIGJpLWV4Y2xhbWF0aW9uLXRyaWFuZ2xlXCI+PC9pPiAke2Vyci5tZXNzYWdlfWA7XHJcbiAgICAgICAgdGhpcy5ib2R5ID0gXCJcIjtcclxuICAgICAgICB0aGlzLmZvb3RlciA9IFwiXCI7XHJcbiAgICAgICAgdGhpcy5jb250ZW50ID0gXCJcIjtcclxuICAgICAgICB0aGlzLnJlbmRlcigpO1xyXG4gICAgICB9KTtcclxuICB9XHJcbiAgb3BlbihmZXRjaGluZyA9IGZhbHNlKSB7XHJcbiAgICB0aGlzLnJlbmRlcihmZXRjaGluZyk7XHJcbiAgICBuZXcgTW9kYWwodGhpcy5lbGVtZW50LCB7XHJcbiAgICAgIGJhY2tkcm9wOiBcInN0YXRpY1wiLFxyXG4gICAgICBrZXlib2FyZDogZmFsc2UsXHJcbiAgICB9KS5zaG93KCk7XHJcbiAgICB0aGlzLmVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcImhpZGUuYnMubW9kYWxcIiwgKCkgPT4ge1xyXG4gICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCh0aGlzLmNvbnRhaW5lcklkKT8ucmVtb3ZlKCk7XHJcbiAgICB9KTtcclxuICB9XHJcbiAgY2xvc2UocmVzKSB7XHJcbiAgICBpZiAocmVzLmRhdGEuY29udGVudCAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgIHRoaXMuY29udGVudCA9IHJlcy5kYXRhLmNvbnRlbnQ7XHJcbiAgICAgIHRoaXMucmVuZGVyKCk7XHJcbiAgICB9IGVsc2UgaWYgKHJlcy5kYXRhLnN0YXR1cyA9PT0gXCJzdWNjZXNzXCIpIHtcclxuICAgICAgLy8gaGlkZSBtb2RhbFxyXG4gICAgICBjb25zdCBtb2RhbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYWpheC1tb2RhbFwiKTtcclxuICAgICAgTW9kYWwuZ2V0SW5zdGFuY2UobW9kYWwpLmhpZGUoKTtcclxuICAgICAgbW9kYWwubmV4dEVsZW1lbnRTaWJsaW5nPy5yZW1vdmUoKTtcclxuICAgICAgbW9kYWw/LnJlbW92ZSgpO1xyXG4gICAgICAvLyByZWZyZXNoIHRoZSB0YWJsZVxyXG4gICAgICBpZiAocmVzLmRhdGEudGFibGVJZCAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgY29uc3QgdGFibGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChyZXMuZGF0YS50YWJsZUlkKTtcclxuICAgICAgICBpZiAodGFibGUgIT09IG51bGwpIHtcclxuICAgICAgICAgIHRhYmxlLmRpc3BhdGNoRXZlbnQobmV3IEV2ZW50KFwicmVmcmVzaFwiKSk7XHJcbiAgICAgICAgfVxyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgICAvLyBzaG93IGFsZXJ0XHJcbiAgICBpZiAocmVzLmRhdGEubWVzc2FnZSAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgIHRvYXN0KHJlcy5kYXRhLnN0YXR1cywgcmVzLmRhdGEubWVzc2FnZSk7XHJcbiAgICB9XHJcbiAgfVxyXG4gIHJlbmRlcihmZXRjaGluZyA9IGZhbHNlKSB7XHJcbiAgICBsZXQgaHRtbCA9IGBcclxuICAgICAgPGRpdiBcclxuICAgICAgICBzdHlsZT1cIm1hcmdpbjogMHB4IGF1dG87d2lkdGg6JHtcclxuICAgICAgICAgIGZldGNoaW5nXHJcbiAgICAgICAgICAgID8gXCJmaXQtY29udGVudFwiXHJcbiAgICAgICAgICAgIDogIWlzTmFOKHRoaXMud2lkdGgpXHJcbiAgICAgICAgICAgID8gdGhpcy53aWR0aCArIFwicHhcIlxyXG4gICAgICAgICAgICA6IFwiYXV0b1wiXHJcbiAgICAgICAgfTtcIlxyXG4gICAgICAgIGNsYXNzPVwibW9kYWwtZGlhbG9nIG1vZGFsLWRpYWxvZy1jZW50ZXJlZCAke1xyXG4gICAgICAgICAgIWZldGNoaW5nICYmXHJcbiAgICAgICAgICAodGhpcy53aWR0aCAmJiB0aGlzLndpZHRoLnN0YXJ0c1dpdGgoXCJtb2RhbFwiKVxyXG4gICAgICAgICAgICA/IHRoaXMud2lkdGhcclxuICAgICAgICAgICAgOiBcIm1vZGFsLWxnXCIpXHJcbiAgICAgICAgfVwiIFxyXG4gICAgICA+XHJcbiAgICAgIDxkaXYgY2xhc3M9XCJtb2RhbC1jb250ZW50XCI+XHJcbiAgICBgO1xyXG4gICAgaWYgKHRoaXMuY29udGVudCkge1xyXG4gICAgICBodG1sICs9IHRoaXMuY29udGVudDtcclxuICAgIH1cclxuICAgIGlmICh0aGlzLnRpdGxlKSB7XHJcbiAgICAgIGh0bWwgKz0gYDxkaXYgY2xhc3M9XCJtb2RhbC1oZWFkZXIkeyF0aGlzLmJvZHkgJiYgXCIgYm9yZGVybGVzc1wifVwiPlxyXG4gICAgICAgIDxoNSBjbGFzcz1cIm1vZGFsLXRpdGxlXCI+JHt0aGlzLnRpdGxlfTwvaDU+XHJcbiAgICAgICAgPGJ1dHRvbiBcclxuICAgICAgICAgIHR5cGU9XCJidXR0b25cIiBcclxuICAgICAgICAgIGNsYXNzPVwiYnRuLWNsb3NlIHJvdW5kZWQtMCBzaGFkb3ctbm9uZVwiIFxyXG4gICAgICAgICAgZGF0YS1icy1kaXNtaXNzPVwibW9kYWxcIiBcclxuICAgICAgICAgIGFyaWEtbGFiZWw9XCIke3RyYW5zKFwiRmVybWVyXCIpfVwiXHJcbiAgICAgICAgPjwvYnV0dG9uPlxyXG4gICAgICA8L2Rpdj5gO1xyXG4gICAgfVxyXG4gICAgaWYgKHRoaXMuYm9keSkge1xyXG4gICAgICBodG1sICs9IGA8ZGl2IGNsYXNzPVwibW9kYWwtYm9keVwiPiR7dGhpcy5ib2R5fTwvZGl2PmA7XHJcbiAgICB9XHJcbiAgICBpZiAodGhpcy5mb290ZXIpIHtcclxuICAgICAgaHRtbCArPSBgPGRpdiBjbGFzcz1cIm1vZGFsLWZvb3RlclwiPiR7dGhpcy5mb290ZXJ9PC9kaXY+YDtcclxuICAgIH1cclxuICAgIGh0bWwgKz0gXCI8L2Rpdj48L2Rpdj5cIjtcclxuICAgIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSBodG1sO1xyXG4gIH1cclxufVxyXG4iLCJpbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XHJcblxyXG5pbXBvcnQgeyB0cmFucyB9IGZyb20gXCIuLi91dGlscy90cmFuc2xhdGlvblwiO1xyXG5cclxuZXhwb3J0IGNsYXNzIEFqYXhUYWJsZSBleHRlbmRzIEhUTUxFbGVtZW50IHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHN1cGVyKCk7XHJcbiAgICB0aGlzLmxvYWRpbmcgPSBmYWxzZTtcclxuICAgIHRoaXMuaWQgPSB0aGlzLmdldEF0dHJpYnV0ZShcImlkXCIpO1xyXG4gICAgdGhpcy51cmwgPSB0aGlzLmdldEF0dHJpYnV0ZShcInVybFwiKTtcclxuICAgIHRoaXMuZW50aXR5X25hbWUgPSB0aGlzLmdldEF0dHJpYnV0ZShcInNvcnRhYmxlXCIpO1xyXG4gICAgdGhpcy5wYWdlID0gdGhpcy5nZXRBdHRyaWJ1dGUoXCJwYWdlXCIpIHx8IDE7XHJcbiAgICB0aGlzLnBlcnBhZ2UgPSB0aGlzLmdldEF0dHJpYnV0ZShcInBlcnBhZ2VcIikgfHwgMTA7XHJcbiAgICB0aGlzLnBhcmFtcyA9IEpTT04ucGFyc2UodGhpcy5nZXRBdHRyaWJ1dGUoXCJwYXJhbXNcIikpIHx8IHt9O1xyXG4gICAgaWYgKHRoaXMucXVlcnlTZWxlY3RvcihcInRhYmxlXCIpKSB7XHJcbiAgICAgIHRoaXMucmVnaXN0ZXJFdmVudHMoKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIHRoaXMuc3Bpbm5lcigpO1xyXG4gICAgICB0aGlzLnJlbmRlcigpO1xyXG4gICAgfVxyXG4gICAgdGhpcy5hZGRFdmVudExpc3RlbmVyKFwicmVmcmVzaFwiLCB0aGlzLnJlbmRlcik7XHJcbiAgfVxyXG4gIHNwaW5uZXIoKSB7XHJcbiAgICB0aGlzLmRyYXcoXHJcbiAgICAgIGA8ZGl2IGNsYXNzPVwiYmQtY2FsbG91dCBiZC1jYWxsb3V0LWluZm9cIj5cclxuICAgICAgICA8c3BhbiBjbGFzcz1cInNwaW5uZXItYm9yZGVyIHNwaW5uZXItYm9yZGVyLXNtXCI+PC9zcGFuPlxyXG4gICAgICAgICR7dHJhbnMoXCJDaGFyZ2VtZW50IGRlIGxhIHRhYmxlIGVuIGNvdXJzLi4uXCIpfVxyXG4gICAgICA8L2Rpdj5gXHJcbiAgICApO1xyXG4gIH1cclxuICByZW5kZXIoZXZlbnQpIHtcclxuICAgIGlmICh0aGlzLmxvYWRpbmcpIHJldHVybjtcclxuICAgIHRoaXMudG9nZ2xlTG9hZGluZyh0cnVlKTtcclxuXHJcbiAgICAvLyBtZXJnZSBwYXJhbXMgZnJvbSBldmVudFxyXG4gICAgaWYgKHR5cGVvZiBldmVudD8uZGV0YWlsID09PSBcIm9iamVjdFwiKSB7XHJcbiAgICAgIHRoaXMucGFyYW1zID0gZXZlbnQuZGV0YWlsO1xyXG4gICAgICB0aGlzLnBhZ2UgPSAxO1xyXG4gICAgfVxyXG5cclxuICAgIGNvbnN0IHBhcmFtcyA9IHsgcGFnZTogdGhpcy5wYWdlLCBwZXJwYWdlOiB0aGlzLnBlcnBhZ2UsIC4uLnRoaXMucGFyYW1zIH07XHJcblxyXG4gICAgYXhpb3NcclxuICAgICAgLmdldCh0aGlzLnVybCwgeyBwYXJhbXMgfSlcclxuICAgICAgLnRoZW4oKHJlcykgPT4ge1xyXG4gICAgICAgIHRoaXMuZHJhdyhyZXMuZGF0YSk7XHJcbiAgICAgICAgaWYgKHJlcy5kYXRhLmluY2x1ZGVzKFwidGFibGVcIikpIHtcclxuICAgICAgICAgIHRoaXMucmVnaXN0ZXJFdmVudHMoKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0pXHJcbiAgICAgIC5jYXRjaCgoZXJyKSA9PiB7XHJcbiAgICAgICAgdGhpcy5kcmF3KFxyXG4gICAgICAgICAgYDxkaXYgY2xhc3M9XCJiZC1jYWxsb3V0IGJkLWNhbGxvdXQtZGFuZ2VyXCI+JHtlcnIubWVzc2FnZX08L2Rpdj5gXHJcbiAgICAgICAgKTtcclxuICAgICAgfSlcclxuICAgICAgLnRoZW4oKCkgPT4gdGhpcy50b2dnbGVMb2FkaW5nKGZhbHNlKSk7XHJcbiAgfVxyXG4gIG9uKGV2ZW50X25hbWUsIHRhcmdldCwgY2FsbGJhY2spIHtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvckFsbCh0YXJnZXQpLmZvckVhY2goKGVsZW1lbnQpID0+XHJcbiAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihldmVudF9uYW1lLCBjYWxsYmFjay5iaW5kKHRoaXMsIGVsZW1lbnQpKVxyXG4gICAgKTtcclxuICB9XHJcbiAgcmVnaXN0ZXJFdmVudHMoKSB7XHJcbiAgICB0aGlzLm9uKFwiY2xpY2tcIiwgXCIuYnVsay1hY3Rpb25zXCIsIHRoaXMuYnVsa0FjdGlvbnNDaGFuZ2UpO1xyXG4gICAgdGhpcy5vbihcImNsaWNrXCIsIFwiLmJ1bGstYXBwbHlcIiwgdGhpcy5hcHBseUJ1bGtBY3Rpb24pO1xyXG4gICAgdGhpcy5vbihcImNoYW5nZVwiLCBcIi5wZXJwYWdlXCIsIHRoaXMuc2V0UGVycGFnZSk7XHJcbiAgICB0aGlzLm9uKFwiY2hhbmdlXCIsIFwiLnBhZ2UtbnVtYmVyXCIsIHRoaXMuc2V0UGFnZSk7XHJcbiAgICB0aGlzLm9uKFwiY2xpY2tcIiwgXCIubmV4dC1wYWdlXCIsIHRoaXMubmV4dFBhZ2UpO1xyXG4gICAgdGhpcy5vbihcImNsaWNrXCIsIFwiLnByZXYtcGFnZVwiLCB0aGlzLnByZXZQYWdlKTtcclxuICAgIHRoaXMub24oXCJjaGFuZ2VcIiwgXCIuY2ItY2hlY2stYWxsXCIsIHRoaXMuY2hlY2tBbGwpO1xyXG4gICAgdGhpcy5vbihcImNoYW5nZVwiLCBcIi5jYi1pdGVtXCIsIHRoaXMudG9nZ2xlQ2hlY2tBbGwpO1xyXG4gICAgd2luZG93LmRpc3BhdGNoRXZlbnQobmV3IEN1c3RvbUV2ZW50KFwiYWpheC50YWJsZS5yZWFkeVwiKSk7XHJcbiAgICAvLyBtYWtlIHRhYmxlIHNvcnRhYmxlXHJcbiAgICBpZiAod2luZG93LmpRdWVyeSAmJiB0aGlzLmVudGl0eV9uYW1lKSB7XHJcbiAgICAgIHRoaXMuc29ydGFibGVJdGVtcygpO1xyXG4gICAgfVxyXG4gICAgdGhpcy5zZXRCYWRnZUNvdW50KCk7XHJcbiAgfVxyXG4gIGRyYXcoY29udGVudCkge1xyXG4gICAgdGhpcy5pbm5lckhUTUwgPSBjb250ZW50O1xyXG4gIH1cclxuICB0b2dnbGVMb2FkaW5nKHN0YXR1cykge1xyXG4gICAgdGhpcy5sb2FkaW5nID0gc3RhdHVzO1xyXG4gICAgaWYgKHN0YXR1cyAmJiB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCJ0YWJsZVwiKSAhPT0gbnVsbCkge1xyXG4gICAgICB0aGlzLmNsYXNzTGlzdC5hZGQoXCJsb2FkaW5nXCIpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdGhpcy5jbGFzc0xpc3QucmVtb3ZlKFwibG9hZGluZ1wiKTtcclxuICAgIH1cclxuICAgIHRoaXMucXVlcnlTZWxlY3RvcihcInRhYmxlXCIpLnN0eWxlLm9wYWNpdHkgPSBzdGF0dXMgPyAwLjMgOiAxO1xyXG4gICAgY29uc3QgYnRuTG9hZGluZyA9IHRoaXMucXVlcnlTZWxlY3RvcihcIi5idG4tbG9hZGluZ1wiKTtcclxuICAgIGlmIChidG5Mb2FkaW5nKSB7XHJcbiAgICAgIGJ0bkxvYWRpbmcuc3R5bGUuZGlzcGxheSA9IHN0YXR1cyA/IFwiYmxvY2tcIiA6IFwibm9uZVwiO1xyXG4gICAgfVxyXG4gIH1cclxuICBidWxrQWN0aW9uc0NoYW5nZSgpIHtcclxuICAgIGNvbnN0IGFjdGlvbiA9IHRoaXMucXVlcnlTZWxlY3RvcihcIi5idWxrLWFjdGlvbnNcIilcclxuICAgICAgLnF1ZXJ5U2VsZWN0b3IoXCJvcHRpb246Y2hlY2tlZFwiKVxyXG4gICAgICAuZ2V0QXR0cmlidXRlKFwiZGF0YS1uYW1lXCIpO1xyXG4gICAgdGhpcy5xdWVyeVNlbGVjdG9yQWxsKFwiLmNiLWl0ZW1cIikuZm9yRWFjaCgoaXRlbSkgPT4ge1xyXG4gICAgICBpZiAoYWN0aW9uICE9PSBudWxsKSB7XHJcbiAgICAgICAgY29uc3QgZHJvcGRvd24gPSBpdGVtLmNsb3Nlc3QoXCJ0clwiKS5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLW1lbnVcIik7XHJcbiAgICAgICAgY29uc3QgZXhpc3RzID0gZHJvcGRvd24ucXVlcnlTZWxlY3RvcihgLmFjdGlvbi0ke2FjdGlvbn1gKSAhPT0gbnVsbDtcclxuICAgICAgICBpdGVtLmRpc2FibGVkID0gIWV4aXN0cztcclxuICAgICAgICBpdGVtLmNoZWNrZWQgPSBleGlzdHMgJiYgaXRlbS5jaGVja2VkO1xyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIGl0ZW0uZGlzYWJsZWQgPSBmYWxzZTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfVxyXG4gIGFwcGx5QnVsa0FjdGlvbigpIHtcclxuICAgIGNvbnN0IHVybCA9IHRoaXMucXVlcnlTZWxlY3RvcihcIi5idWxrLWFjdGlvbnNcIikudmFsdWU7XHJcbiAgICBpZiAodXJsID09PSBcIlwiKSB7XHJcbiAgICAgIHRvYXN0KFwid2FybmluZ1wiLCB0cmFucyhcIlZldWlsbGV6IGNob2lzaXIgdW5lIGFjdGlvblwiKSk7XHJcbiAgICAgIHJldHVybjtcclxuICAgIH1cclxuICAgIGNvbnN0IGl0ZW1zID0gW107XHJcbiAgICB0aGlzLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2ItaXRlbTpjaGVja2VkXCIpLmZvckVhY2goKGl0ZW0pID0+XHJcbiAgICAgIGl0ZW1zLnB1c2goaXRlbS52YWx1ZSlcclxuICAgICk7XHJcbiAgICBpZiAoaXRlbXMubGVuZ3RoIDwgMSkge1xyXG4gICAgICB0b2FzdChcIndhcm5pbmdcIiwgdHJhbnMoXCJWb3VzIGRldmV6IGNob2lzaXIgYXUgbW9pbnMgdW5lIGxpZ25lXCIpKTtcclxuICAgICAgcmV0dXJuO1xyXG4gICAgfVxyXG4gICAgY29uc3QgYnRuID0gdGhpcy5xdWVyeVNlbGVjdG9yKFwiLmJ1bGstYXBwbHlcIik7XHJcbiAgICBjb25zdCBidG5IdG1sID0gYnRuLmlubmVySFRNTDtcclxuICAgIGJ0bi5pbm5lckhUTUwgPSBgPHNwYW4gY2xhc3M9XCJzcGlubmVyLWJvcmRlciBzcGlubmVyLWJvcmRlci1zbVwiPjwvc3Bhbj5gO1xyXG4gICAgYnRuLnNldEF0dHJpYnV0ZShcImRpc2FibGVkXCIsIFwiZGlzYWJsZWRcIik7XHJcbiAgICBheGlvc1xyXG4gICAgICAucG9zdCh1cmwsIG51bGwsIHsgcGFyYW1zOiB7IGl0ZW1zIH0gfSlcclxuICAgICAgLnRoZW4oKHJlcykgPT4ge1xyXG4gICAgICAgIGlmIChyZXMuZGF0YS5zdGF0dXMgPT09IFwic3VjY2Vzc1wiKSB7XHJcbiAgICAgICAgICB0aGlzLnJlbmRlcigpO1xyXG4gICAgICAgIH1cclxuICAgICAgICBpZiAocmVzLmRhdGEubWVzc2FnZSAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgICB0b2FzdChyZXMuZGF0YS5zdGF0dXMsIHJlcy5kYXRhLm1lc3NhZ2UpO1xyXG4gICAgICAgIH1cclxuICAgICAgfSlcclxuICAgICAgLmNhdGNoKChlcnIpID0+IHtcclxuICAgICAgICB0b2FzdChcImVycm9yXCIsIGVyci5tZXNzYWdlKTtcclxuICAgICAgfSlcclxuICAgICAgLnRoZW4oKCkgPT4ge1xyXG4gICAgICAgIGJ0bi5pbm5lckhUTUwgPSBidG5IdG1sO1xyXG4gICAgICAgIGJ0bi5yZW1vdmVBdHRyaWJ1dGUoXCJkaXNhYmxlZFwiKTtcclxuICAgICAgfSk7XHJcbiAgfVxyXG4gIHNldFBlcnBhZ2UoKSB7XHJcbiAgICBjb25zdCBwZXJwYWdlID0gcGFyc2VJbnQodGhpcy5xdWVyeVNlbGVjdG9yKFwiLnBlcnBhZ2VcIikudmFsdWUpO1xyXG4gICAgdGhpcy5wYWdlID0gMTtcclxuICAgIHRoaXMucGVycGFnZSA9IHBlcnBhZ2U7XHJcbiAgICB0aGlzLnJlbmRlcigpO1xyXG4gIH1cclxuICBzZXRQYWdlKCkge1xyXG4gICAgY29uc3QgaW5wdXQgPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIucGFnZS1udW1iZXJcIik7XHJcbiAgICBjb25zdCBwYWdlID0gcGFyc2VJbnQoaW5wdXQudmFsdWUpO1xyXG4gICAgaWYgKHBhZ2UgPiAwICYmIHBhZ2UgPD0gaW5wdXQuZ2V0QXR0cmlidXRlKFwibWF4XCIpKSB7XHJcbiAgICAgIGlmIChwYWdlICE9IHRoaXMucGFnZSkge1xyXG4gICAgICAgIHRoaXMucGFnZSA9IHBhZ2U7XHJcbiAgICAgICAgdGhpcy5yZW5kZXIoKTtcclxuICAgICAgfVxyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdG9hc3QoXCJ3YXJuaW5nXCIsIHRyYW5zKFwiVmV1aWxsZXogc2Fpc2lyIHVuIG51bcOpcm8gZGUgcGFnZSB2YWxpZGVcIikpO1xyXG4gICAgfVxyXG4gIH1cclxuICBwcmV2UGFnZSgpIHtcclxuICAgIGNvbnN0IHBhZ2UgPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIucGFnZS1udW1iZXJcIikudmFsdWU7XHJcbiAgICBpZiAocGFnZSA+IDEpIHtcclxuICAgICAgdGhpcy5wYWdlID0gcGFyc2VJbnQocGFnZSkgLSAxO1xyXG4gICAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIucGFnZS1udW1iZXJcIikudmFsdWUgPSB0aGlzLnBhZ2U7XHJcbiAgICAgIHRoaXMucmVuZGVyKCk7XHJcbiAgICB9XHJcbiAgfVxyXG4gIG5leHRQYWdlKCkge1xyXG4gICAgY29uc3QgcGFnZSA9IHRoaXMucXVlcnlTZWxlY3RvcihcIi5wYWdlLW51bWJlclwiKS52YWx1ZTtcclxuICAgIHRoaXMucGFnZSA9IHBhcnNlSW50KHBhZ2UpICsgMTtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvcihcIi5wYWdlLW51bWJlclwiKS52YWx1ZSA9IHRoaXMucGFnZTtcclxuICAgIHRoaXMucmVuZGVyKCk7XHJcbiAgfVxyXG4gIGNoZWNrQWxsKGNiKSB7XHJcbiAgICB0aGlzLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2ItaXRlbVwiKS5mb3JFYWNoKChpdGVtKSA9PiB7XHJcbiAgICAgIGlmICghaXRlbS5kaXNhYmxlZCkge1xyXG4gICAgICAgIGl0ZW0uY2hlY2tlZCA9IGNiLmNoZWNrZWQ7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgdGhpcy5xdWVyeVNlbGVjdG9yQWxsKFwiLmNiLWNoZWNrLWFsbFwiKS5mb3JFYWNoKFxyXG4gICAgICAoaXRlbSkgPT4gKGl0ZW0uY2hlY2tlZCA9IGNiLmNoZWNrZWQpXHJcbiAgICApO1xyXG4gIH1cclxuICB0b2dnbGVDaGVja0FsbCgpIHtcclxuICAgIGNvbnN0IHVuY2hlY2tlZCA9IHRoaXMucXVlcnlTZWxlY3RvckFsbChcIi5jYi1pdGVtXCIpLmxlbmd0aDtcclxuICAgIGNvbnN0IGNoZWNrZWQgPSB0aGlzLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2ItaXRlbTpjaGVja2VkXCIpLmxlbmd0aDtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvckFsbChcIi5jYi1jaGVjay1hbGxcIikuZm9yRWFjaCgoaXRlbSkgPT4ge1xyXG4gICAgICBpdGVtLmNoZWNrZWQgPSBjaGVja2VkID09PSB1bmNoZWNrZWQ7XHJcbiAgICAgIGl0ZW0uaW5kZXRlcm1pbmF0ZSA9ICFpdGVtLmNoZWNrZWQgJiYgY2hlY2tlZCA+IDA7XHJcbiAgICB9KTtcclxuICB9XHJcbiAgc29ydGFibGVJdGVtcygpIHtcclxuICAgIGNvbnN0ICR0YWJsZSA9ICQodGhpcy5xdWVyeVNlbGVjdG9yKFwidGFibGVcIikpO1xyXG4gICAgJHRhYmxlLmZpbmQoXCJ0Ym9keVwiKS5zb3J0YWJsZSh7XHJcbiAgICAgIHVwZGF0ZTogKCkgPT4ge1xyXG4gICAgICAgIGNvbnN0IGl0ZW1zX29yZGVycyA9IHt9O1xyXG4gICAgICAgICR0YWJsZS5maW5kKFwidGJvZHkgdHJcIikuZWFjaCgoaW5kZXgsIGl0ZW0pID0+IHtcclxuICAgICAgICAgIGl0ZW1zX29yZGVyc1skKGl0ZW0pLmRhdGEoXCJwa3ZcIildID0gaW5kZXggKyAxO1xyXG4gICAgICAgICAgJChpdGVtKVxyXG4gICAgICAgICAgICAuZmluZChcIi50ZF9pbmNyZW1lbnRcIilcclxuICAgICAgICAgICAgLnRleHQoaW5kZXggKyAxKTtcclxuICAgICAgICB9KTtcclxuICAgICAgICAkdGFibGUuY3NzKFwib3BhY2l0eVwiLCBcIjAuM1wiKTtcclxuICAgICAgICBheGlvc1xyXG4gICAgICAgICAgLnBvc3QoXCIvYWRtaW4vc29ydC9vcmRlci91cGRhdGVcIiwgbnVsbCwge1xyXG4gICAgICAgICAgICBwYXJhbXM6IHsgZW50aXR5X25hbWU6IHRoaXMuZW50aXR5X25hbWUsIGl0ZW1zX29yZGVycyB9LFxyXG4gICAgICAgICAgfSlcclxuICAgICAgICAgIC50aGVuKChyZXMpID0+IHtcclxuICAgICAgICAgICAgaWYgKHJlcy5kYXRhLnN0YXR1cyA9PT0gXCJlcnJvclwiKSB7XHJcbiAgICAgICAgICAgICAgdG9hc3QoXCJlcnJvclwiLCByZXMuZGF0YS5tZXNzYWdlKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgfSlcclxuICAgICAgICAgIC5jYXRjaCgoKSA9PiB7XHJcbiAgICAgICAgICAgIHRvYXN0KFwiZXJyb3JcIiwgdHJhbnMoXCJVbmUgZXJyZXVyIGVzdCBzdXJ2ZW51ZVwiKSk7XHJcbiAgICAgICAgICB9KVxyXG4gICAgICAgICAgLnRoZW4oKCkgPT4gJHRhYmxlLmNzcyhcIm9wYWNpdHlcIiwgMSkpO1xyXG4gICAgICB9LFxyXG4gICAgfSk7XHJcbiAgfVxyXG4gIHNldEJhZGdlQ291bnQoKSB7XHJcbiAgICBjb25zdCBjb3VudCA9IHRoaXMucXVlcnlTZWxlY3RvcihcIi5jaG0tdGFibGUtdG90YWxcIik/LmlubmVyVGV4dCB8fCAwO1xyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIltjaG0tdGFibGUtdG90YWxdXCIpLmZvckVhY2goKGVsZW1lbnQpID0+IHtcclxuICAgICAgZWxlbWVudC5pbm5lclRleHQgPSBjb3VudDtcclxuICAgIH0pO1xyXG4gIH1cclxufVxyXG4iLCJpbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XHJcblxyXG5pbXBvcnQgeyB0cmFucyB9IGZyb20gXCIuLi91dGlscy90cmFuc2xhdGlvblwiO1xyXG5cclxuZXhwb3J0IGNsYXNzIEFqYXhVcGxvYWQgZXh0ZW5kcyBIVE1MRWxlbWVudCB7XHJcbiAgY29uc3RydWN0b3IoKSB7XHJcbiAgICBzdXBlcigpO1xyXG4gICAgdGhpcy5wYXRoID0gdGhpcy5nZXRBdHRyaWJ1dGUoXCJwYXRoXCIpO1xyXG4gICAgdGhpcy5uYW1lID0gdGhpcy5nZXRBdHRyaWJ1dGUoXCJuYW1lXCIpIHx8IFwiZmlsZXNcIjtcclxuICAgIHRoaXMubWluID0gcGFyc2VJbnQodGhpcy5nZXRBdHRyaWJ1dGUoXCJtaW5cIikpIHx8IDA7XHJcbiAgICB0aGlzLm1heCA9IHBhcnNlSW50KHRoaXMuZ2V0QXR0cmlidXRlKFwibWF4XCIpKSB8fCAwO1xyXG4gICAgdGhpcy5vbihcImNsaWNrXCIsIFwiLmZpbGUtZGVsZXRlXCIsIHRoaXMucmVtb3ZlKTtcclxuICAgIHRoaXMub24oXCJjaGFuZ2VcIiwgJ1t0eXBlPVwiZmlsZVwiXScsIHRoaXMuaGFuZGxlQ2hhbmdlKTtcclxuICB9XHJcbiAgb24oZXZlbnRfbmFtZSwgdGFyZ2V0LCBjYWxsYmFjaykge1xyXG4gICAgdGhpcy5xdWVyeVNlbGVjdG9yQWxsKHRhcmdldCkuZm9yRWFjaCgoZWxlbWVudCkgPT5cclxuICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKGV2ZW50X25hbWUsIGNhbGxiYWNrLmJpbmQodGhpcywgZWxlbWVudCkpXHJcbiAgICApO1xyXG4gIH1cclxuICByZW1vdmUoZWwpIHtcclxuICAgIGlmICh0aGlzLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuZmlsZS1pdGVtXCIpLmxlbmd0aCA9PT0gdGhpcy5taW4pIHtcclxuICAgICAgaWYgKHRoaXMubWluID4gMSkge1xyXG4gICAgICAgIHRvYXN0KFxyXG4gICAgICAgICAgXCJkYW5nZXJcIixcclxuICAgICAgICAgIHRyYW5zKFwiSWwgZmF1dCBhdm9pciBhdSBtb2lzICVtaW4lIGZpY2hpZXJzXCIsIHsgbWluOiB0aGlzLm1pbiB9KVxyXG4gICAgICAgICk7XHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgdG9hc3QoXCJkYW5nZXJcIiwgdHJhbnMoXCJJbCBmYXV0IGF2b2lyIGF1IG1vaXMgdW4gZmljaGllclwiKSk7XHJcbiAgICAgIH1cclxuICAgICAgcmV0dXJuO1xyXG4gICAgfSBlbHNlIGlmIChcclxuICAgICAgY29uZmlybSh0cmFucyhcIsOKdGVzIHZvdXMgc8O7cmUgZGUgdm91bG9pciBzdXBwcmltZXIgY2UgZmljaGllciA/XCIpKVxyXG4gICAgKSB7XHJcbiAgICAgIGVsLmNsb3Nlc3QoXCIuZmlsZS1pdGVtXCIpPy5yZW1vdmUoKTtcclxuICAgICAgdGhpcy5xdWVyeVNlbGVjdG9yKFwiLmZpbGUtYWRkXCIpLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgICB9XHJcbiAgfVxyXG4gIGhhbmRsZUNoYW5nZSh0YXJnZXQpIHtcclxuICAgIGNvbnN0IGljb24gPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIuYmktcGx1c1wiKTtcclxuICAgIGNvbnN0IHNwaW5uZXIgPSB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIuc3Bpbm5lci1ib3JkZXJcIik7XHJcbiAgICBpY29uLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgIHNwaW5uZXIuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgIHRhcmdldC5zZXRBdHRyaWJ1dGUoXCJkaXNhYmxlZFwiLCBcIlwiKTtcclxuICAgIGNvbnN0IGZvcm1EYXRhID0gbmV3IEZvcm1EYXRhKCk7XHJcbiAgICBmb3JtRGF0YS5hcHBlbmQoXCJwYXRoXCIsIHRoaXMucGF0aCk7XHJcbiAgICBmb3JtRGF0YS5hcHBlbmQoXCJmaWxlXCIsIHRhcmdldC5maWxlc1swXSk7XHJcbiAgICBheGlvc1xyXG4gICAgICAucG9zdChcIi9hZG1pbi9maWxlL3VwbG9hZFwiLCBmb3JtRGF0YSlcclxuICAgICAgLnRoZW4oKHJlcykgPT4ge1xyXG4gICAgICAgIGlmIChyZXMuZGF0YS5maWxlX25hbWUgIT09IHVuZGVmaW5lZCkge1xyXG4gICAgICAgICAgdGhpcy5hcHBlbmQocmVzLmRhdGEpO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICB0b2FzdChyZXMuZGF0YS5zdGF0dXMsIHJlcy5kYXRhLm1lc3NhZ2UpO1xyXG4gICAgICAgIH1cclxuICAgICAgfSlcclxuICAgICAgLmNhdGNoKChlcnIpID0+IHRvYXN0KFwiZXJyb3JcIiwgZXJyLm1lc3NhZ2UpKVxyXG4gICAgICAudGhlbigoKSA9PiB7XHJcbiAgICAgICAgaWNvbi5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgIHNwaW5uZXIuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgIHRhcmdldC5yZW1vdmVBdHRyaWJ1dGUoXCJkaXNhYmxlZFwiKTtcclxuICAgICAgICB0YXJnZXQudmFsdWUgPSBcIlwiO1xyXG4gICAgICB9KTtcclxuICB9XHJcbiAgYXBwZW5kKGRhdGEpIHtcclxuICAgIGNvbnN0IGl0ZW0gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiZGl2XCIpO1xyXG4gICAgY29uc3QgdmFsdWUgPSBge1wibmFtZVwiOiBcIiR7ZGF0YS5maWxlX25hbWV9XCIsIFwicGF0aFwiOiBcIiR7ZGF0YS5maWxlX3BhdGh9XCJ9YDtcclxuICAgIGl0ZW0uc2V0QXR0cmlidXRlKFwiY2xhc3NcIiwgXCJjb2wtc20tMyBjb2wtNiBwcy0xIG1iLTMgZmlsZS1pdGVtXCIpO1xyXG4gICAgaXRlbS5pbm5lckhUTUwgPSBgPGRpdiBjbGFzcz1cImNhcmRcIj5cclxuICAgICAgPGEgaHJlZj1cIi91cGxvYWRzLyR7ZGF0YS5maWxlX3BhdGh9XCIgdGFyZ2V0PVwiX2JsYW5rXCIgdGl0bGU9XCIke1xyXG4gICAgICBkYXRhLmZpbGVfbmFtZVxyXG4gICAgfVwiPlxyXG4gICAgICAgICR7XHJcbiAgICAgICAgICBbXCJqcGVnXCIsIFwianBnXCIsIFwicG5nXCIsIFwiZ2lmXCJdLmluY2x1ZGVzKGRhdGEuZXh0ZW5zaW9uKVxyXG4gICAgICAgICAgICA/ICc8aW1nIHNyYz1cIi91cGxvYWRzLycgKyBkYXRhLmZpbGVfcGF0aCArICdcIiBjbGFzcz1cImltZy1mbHVpZFwiPidcclxuICAgICAgICAgICAgOiAnPGkgY2xhc3M9XCJiaSBiaS0nICsgdGhpcy5nZXRJY29uKGRhdGEuZXh0ZW5zaW9uKSArICdcIj48L2k+J1xyXG4gICAgICAgIH1cclxuICAgICAgPC9hPlxyXG4gICAgICA8aSBjbGFzcz1cImJpIGJpLXgtY2lyY2xlIGZpbGUtZGVsZXRlXCI+PC9pPlxyXG4gICAgICA8aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCIke3RoaXMubmFtZX1bXVwiIHZhbHVlPScke3ZhbHVlfScgLz5cclxuICAgIDwvZGl2PmA7XHJcbiAgICBjb25zdCBhZGRGaWxlID0gdGhpcy5xdWVyeVNlbGVjdG9yKFwiLmZpbGUtYWRkXCIpO1xyXG4gICAgYWRkRmlsZS5wYXJlbnROb2RlLmluc2VydEJlZm9yZShpdGVtLCBhZGRGaWxlKTtcclxuICAgIGNvbnN0IGRlbGV0ZUZpbGUgPSBpdGVtLnF1ZXJ5U2VsZWN0b3IoXCIuZmlsZS1kZWxldGVcIik7XHJcbiAgICBkZWxldGVGaWxlLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCB0aGlzLnJlbW92ZS5iaW5kKHRoaXMsIGRlbGV0ZUZpbGUpKTtcclxuICAgIGNvbnN0IGNvdW50SXRlbXMgPSB0aGlzLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuZmlsZS1pdGVtXCIpLmxlbmd0aDtcclxuICAgIGFkZEZpbGUuc3R5bGUuZGlzcGxheSA9XHJcbiAgICAgIHRoaXMubWF4ID09PSAwIHx8IGNvdW50SXRlbXMgPCB0aGlzLm1heCA/IFwiYmxvY2tcIiA6IFwibm9uZVwiO1xyXG4gIH1cclxuICBnZXRJY29uKGV4dGVuc2lvbikge1xyXG4gICAgaWYgKFtcImpwZWdcIiwgXCJqcGdcIiwgXCJwbmdcIiwgXCJnaWZcIl0uaW5jbHVkZXMoZXh0ZW5zaW9uKSkge1xyXG4gICAgICByZXR1cm4gXCJmaWxlLWltYWdlXCI7XHJcbiAgICB9XHJcbiAgICBpZiAoW1wiZG9jXCIsIFwiZG9jeFwiXS5pbmNsdWRlcyhleHRlbnNpb24pKSB7XHJcbiAgICAgIHJldHVybiBcImZpbGUtd29yZFwiO1xyXG4gICAgfVxyXG4gICAgaWYgKFtcInhsc1wiLCBcInhsc3hcIl0uaW5jbHVkZXMoZXh0ZW5zaW9uKSkge1xyXG4gICAgICByZXR1cm4gXCJmaWxlLWV4Y2VsXCI7XHJcbiAgICB9XHJcbiAgICBpZiAoZXh0ZW5zaW9uID09PSBcInBkZlwiKSB7XHJcbiAgICAgIHJldHVybiBcImZpbGUtcGRmXCI7XHJcbiAgICB9XHJcbiAgICByZXR1cm4gXCJmaWxlLXJpY2h0ZXh0XCI7XHJcbiAgfVxyXG59XHJcbiIsImltcG9ydCBSZWFjdCwgeyB1c2VTdGF0ZSwgdXNlRWZmZWN0IH0gZnJvbSBcInJlYWN0XCI7XHJcbmltcG9ydCBSZWFjdERPTSBmcm9tIFwicmVhY3QtZG9tXCI7XHJcbmltcG9ydCBtb21lbnQgZnJvbSBcIm1vbWVudFwiO1xyXG5tb21lbnQubG9jYWxlKFwiZnItRlJcIik7XHJcblxyXG5jb25zdCBDbG9ja0NvbnRhaW5lciA9ICgpID0+IHtcclxuICBjb25zdCBbY3VycmVudFRpbWUsIHNldEN1cnJlbnRUaW1lXSA9IHVzZVN0YXRlKG1vbWVudCgpLmZvcm1hdChcIkhIOm1tXCIpKTtcclxuXHJcbiAgLy8gdXBkYXRlIGNsb2NrIGV2ZXJ5IG1pbnV0ZVxyXG4gIHVzZUVmZmVjdCgoKSA9PiB7XHJcbiAgICBjb25zdCBpbnRlcnZhbCA9IHNldEludGVydmFsKCgpID0+IHtcclxuICAgICAgc2V0Q3VycmVudFRpbWUobW9tZW50KCkuZm9ybWF0KFwiSEg6bW1cIikpO1xyXG4gICAgfSwgMTAwMDApO1xyXG4gICAgcmV0dXJuICgpID0+IGNsZWFySW50ZXJ2YWwoaW50ZXJ2YWwpO1xyXG4gIH0sIFtdKTtcclxuXHJcbiAgcmV0dXJuIChcclxuICAgIDxkaXYgY2xhc3NOYW1lPVwiZC1mbGV4IGZsZXgtcm93XCI+XHJcbiAgICAgIDxkaXYgY2xhc3NOYW1lPVwiY2xvY2tcIj57Y3VycmVudFRpbWV9PC9kaXY+XHJcbiAgICAgIDxkaXYgY2xhc3NOYW1lPVwiZnVsbC1kYXRlXCI+XHJcbiAgICAgICAgPHNwYW4gY2xhc3NOYW1lPVwidGV4dC1jYXBpdGFsaXplXCI+e21vbWVudCgpLmZvcm1hdChcImRkZGRcIil9PC9zcGFuPlxyXG4gICAgICAgIDxiciAvPlxyXG4gICAgICAgIHttb21lbnQoKS5mb3JtYXQoXCJEbyBNTU1NIFlZWVlcIil9XHJcbiAgICAgIDwvZGl2PlxyXG4gICAgPC9kaXY+XHJcbiAgKTtcclxufTtcclxuXHJcbmV4cG9ydCBjbGFzcyBSZWFjdENsb2NrIGV4dGVuZHMgSFRNTEVsZW1lbnQge1xyXG4gIGNvbm5lY3RlZENhbGxiYWNrKCkge1xyXG4gICAgdGhpcy5pbm5lckhUTUwgPSAnPGRpdiBpZD1cInJlYWN0LWNsb2NrXCI+PC9kaXY+JztcclxuICAgIFJlYWN0RE9NLnJlbmRlcig8Q2xvY2tDb250YWluZXIgLz4sIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicmVhY3QtY2xvY2tcIikpO1xyXG4gIH1cclxufVxyXG4iLCJpbXBvcnQgYXhpb3MgZnJvbSBcImF4aW9zXCI7XHJcblxyXG5pbXBvcnQgeyB0cmFucyB9IGZyb20gXCIuLi91dGlscy90cmFuc2xhdGlvblwiO1xyXG5cclxuZXhwb3J0IGNsYXNzIFJlc2VydmF0aW9uRGF5cyBleHRlbmRzIEhUTUxFbGVtZW50IHtcclxuICBjb25zdHJ1Y3RvcigpIHtcclxuICAgIHN1cGVyKCk7XHJcbiAgICB0aGlzLmxvYWRpbmcgPSBmYWxzZTtcclxuICAgIHRoaXMucGFyYW1zID0gSlNPTi5wYXJzZSh0aGlzLmdldEF0dHJpYnV0ZShcInBhcmFtc1wiKSkgfHwge307XHJcbiAgICB0aGlzLnJlbmRlcigpO1xyXG4gICAgdGhpcy5hZGRFdmVudExpc3RlbmVyKFwicmVmcmVzaFwiLCB0aGlzLnJlbmRlcik7XHJcbiAgfVxyXG4gIHJlbmRlcihldmVudCkge1xyXG4gICAgLy8gbWVyZ2UgcGFyYW1zIGZyb20gZXZlbnRcclxuICAgIGlmIChldmVudCAhPT0gdW5kZWZpbmVkICYmIHR5cGVvZiBldmVudC5kZXRhaWwgPT09IFwib2JqZWN0XCIpIHtcclxuICAgICAgaWYgKFxyXG4gICAgICAgIHBhcnNlSW50KHRoaXMucGFyYW1zLnJpZCkgPT09IHBhcnNlSW50KGV2ZW50LmRldGFpbC5yaWQpICYmXHJcbiAgICAgICAgcGFyc2VJbnQodGhpcy5wYXJhbXMuc2lkKSA9PT0gcGFyc2VJbnQoZXZlbnQuZGV0YWlsLnNpZCkgJiZcclxuICAgICAgICB0aGlzLnBhcmFtcy5zdGFydCA9PT0gZXZlbnQuZGV0YWlsLnN0YXJ0ICYmXHJcbiAgICAgICAgdGhpcy5wYXJhbXMuZW5kID09PSBldmVudC5kZXRhaWwuZW5kICYmXHJcbiAgICAgICAgdGhpcy5wYXJhbXMuZGF5cyA9PT0gZXZlbnQuZGV0YWlsLmRheXNcclxuICAgICAgKSB7XHJcbiAgICAgICAgdGhpcy50b2dnbGVMb2FkaW5nKGZhbHNlKTtcclxuICAgICAgICByZXR1cm47XHJcbiAgICAgIH1cclxuICAgICAgdGhpcy5wYXJhbXMgPSB7IC4uLnRoaXMucGFyYW1zLCAuLi5ldmVudC5kZXRhaWwgfTtcclxuICAgIH1cclxuICAgIGlmIChcclxuICAgICAgdGhpcy5wYXJhbXMuc2lkIDwgMSB8fFxyXG4gICAgICB0aGlzLnBhcmFtcy5zdGFydCA9PT0gXCJcIiB8fFxyXG4gICAgICB0aGlzLnBhcmFtcy5lbmQgPT09IFwiXCJcclxuICAgICkge1xyXG4gICAgICB0aGlzLmRyYXcoXCJcIik7XHJcbiAgICAgIHRoaXMudG9nZ2xlTG9hZGluZyhmYWxzZSk7XHJcbiAgICAgIHJldHVybjtcclxuICAgIH1cclxuICAgIHRoaXMudG9nZ2xlTG9hZGluZyh0cnVlKTtcclxuICAgIGF4aW9zXHJcbiAgICAgIC5nZXQoXCIvYWRtaW4vcmVzZXJ2YXRpb25zL2RheXNcIiwgeyBwYXJhbXM6IHRoaXMucGFyYW1zIH0pXHJcbiAgICAgIC50aGVuKChyZXMpID0+IHtcclxuICAgICAgICBpZiAocmVzLmRhdGEuY29udGVudCAhPT0gdW5kZWZpbmVkKSB7XHJcbiAgICAgICAgICB0aGlzLmRyYXcocmVzLmRhdGEuY29udGVudCk7XHJcbiAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgIHRoaXMuZHJhdyhcclxuICAgICAgICAgICAgYDxjZW50ZXIgY2xhc3M9XCJtYi0zXCI+PGI+JHt0cmFucyhcclxuICAgICAgICAgICAgICBcIlVuZSBlcnJldXIgZXN0IHN1cnZlbnVlXCJcclxuICAgICAgICAgICAgKX08L2I+PC9jZW50ZXI+YFxyXG4gICAgICAgICAgKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0pXHJcbiAgICAgIC5jYXRjaCgoZXJyKSA9PiB7XHJcbiAgICAgICAgdGhpcy5kcmF3KGA8Y2VudGVyIGNsYXNzPVwibWItM1wiPjxiPiR7ZXJyLm1lc3NhZ2V9PC9iPjwvY2VudGVyPmApO1xyXG4gICAgICB9KVxyXG4gICAgICAudGhlbigoKSA9PiB0aGlzLnRvZ2dsZUxvYWRpbmcoZmFsc2UpKTtcclxuICB9XHJcbiAgZHJhdyhjb250ZW50KSB7XHJcbiAgICB0aGlzLmlubmVySFRNTCA9IGNvbnRlbnQ7XHJcbiAgfVxyXG4gIHRvZ2dsZUxvYWRpbmcoc3RhdHVzKSB7XHJcbiAgICB0aGlzLmxvYWRpbmcgPSBzdGF0dXM7XHJcbiAgICBpZiAoc3RhdHVzKSB7XHJcbiAgICAgIHRoaXMuZHJhdyhcclxuICAgICAgICBgPGNlbnRlciBjbGFzcz1cIm1iLTNcIj5cclxuICAgICAgICAgIDxzcGFuIGNsYXNzPVwic3Bpbm5lci1ib3JkZXIgc3Bpbm5lci1ib3JkZXItc21cIj48L3NwYW4+XHJcbiAgICAgICAgICA8Yj4ke3RyYW5zKFwiQ2hhcmdlbWVudCBlbiBjb3Vycy4uLlwiKX08L2I+XHJcbiAgICAgICAgPC9jZW50ZXI+YFxyXG4gICAgICApO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgdGhpcy5xdWVyeVNlbGVjdG9yKFwiLnNwaW5uZXItYm9yZGVyXCIpPy5yZW1vdmUoKTtcclxuICAgIH1cclxuICB9XHJcbn1cclxuIiwiZXhwb3J0IGNsYXNzIFNlYXJjaEZvcm0gZXh0ZW5kcyBIVE1MRWxlbWVudCB7XHJcbiAgY29uc3RydWN0b3IoKSB7XHJcbiAgICBzdXBlcigpO1xyXG4gICAgdGhpcy50YWJsZUlkID0gdGhpcy5nZXRBdHRyaWJ1dGUoXCJ0YWJsZVwiKTtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvcihcIi5idG4tcmVzZXRcIikuYWRkRXZlbnRMaXN0ZW5lcihcclxuICAgICAgXCJjbGlja1wiLFxyXG4gICAgICB0aGlzLnJlc2V0LmJpbmQodGhpcylcclxuICAgICk7XHJcbiAgICB0aGlzLnF1ZXJ5U2VsZWN0b3IoXCIuYnRuLXNlYXJjaFwiKS5hZGRFdmVudExpc3RlbmVyKFxyXG4gICAgICBcImNsaWNrXCIsXHJcbiAgICAgIHRoaXMuc3VibWl0LmJpbmQodGhpcylcclxuICAgICk7XHJcbiAgfVxyXG4gIHJlc2V0KCkge1xyXG4gICAgY29uc3QgdXJsID0gd2luZG93LmxvY2F0aW9uLm9yaWdpbiArIHdpbmRvdy5sb2NhdGlvbi5wYXRobmFtZTtcclxuICAgIHdpbmRvdy5oaXN0b3J5LnB1c2hTdGF0ZShudWxsLCBkb2N1bWVudC50aXRsZSwgdXJsKTtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvckFsbCgnaW5wdXQ6bm90KFt0eXBlPVwiaGlkZGVuXCJdKScpLmZvckVhY2goKGVsZW1lbnQpID0+IHtcclxuICAgICAgZWxlbWVudC52YWx1ZSA9IFwiXCI7XHJcbiAgICAgIGVsZW1lbnQucmVtb3ZlQXR0cmlidXRlKFwidmFsdWVcIik7XHJcbiAgICB9KTtcclxuICAgIHRoaXMucXVlcnlTZWxlY3RvckFsbChcInNlbGVjdFwiKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgICAgIGZvciAobGV0IGkgPSAwOyBpIDwgZWxlbWVudC5vcHRpb25zLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgZWxlbWVudC5vcHRpb25zW2ldLnJlbW92ZUF0dHJpYnV0ZShcInNlbGVjdGVkXCIpO1xyXG4gICAgICB9XHJcbiAgICB9KTtcclxuICAgIGNvbnN0IHRhYmxlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQodGhpcy50YWJsZUlkKTtcclxuICAgIHRhYmxlLmRpc3BhdGNoRXZlbnQobmV3IEN1c3RvbUV2ZW50KFwicmVmcmVzaFwiLCB7IGRldGFpbDoge30gfSkpO1xyXG4gIH1cclxuICBzdWJtaXQoZSkge1xyXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgY29uc3QgcGFyYW1zID0ge307XHJcbiAgICBjb25zdCBmb3JtID0gZS50YXJnZXQuY2xvc2VzdChcInNlYXJjaC1mb3JtXCIpLnF1ZXJ5U2VsZWN0b3IoXCJmb3JtXCIpO1xyXG4gICAgY29uc3QgdXJsUGFyYW1zID0gbmV3IFVSTFNlYXJjaFBhcmFtcyhuZXcgRm9ybURhdGEoZm9ybSkpO1xyXG4gICAgdXJsUGFyYW1zLmZvckVhY2goKHZhbHVlLCBuYW1lKSA9PiB7XHJcbiAgICAgIGlmICh2YWx1ZSAhPT0gXCJcIikge1xyXG4gICAgICAgIGlmIChuYW1lLmVuZHNXaXRoKFwiW11cIikpIHtcclxuICAgICAgICAgIG5hbWUgPSBuYW1lLnJlcGxhY2UoXCJbXVwiLCBcIlwiKTtcclxuICAgICAgICAgIGlmIChwYXJhbXNbbmFtZV0gPT09IHVuZGVmaW5lZCkge1xyXG4gICAgICAgICAgICBwYXJhbXNbbmFtZV0gPSBbXTtcclxuICAgICAgICAgIH1cclxuICAgICAgICAgIHBhcmFtc1tuYW1lXS5wdXNoKHZhbHVlKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgcGFyYW1zW25hbWVdID0gdmFsdWU7XHJcbiAgICAgICAgfVxyXG4gICAgICB9XHJcbiAgICB9KTtcclxuICAgIGxldCB1cmwgPSB3aW5kb3cubG9jYXRpb24ub3JpZ2luICsgd2luZG93LmxvY2F0aW9uLnBhdGhuYW1lO1xyXG4gICAgaWYgKHVybFBhcmFtcykgdXJsICs9IFwiP1wiICsgdXJsUGFyYW1zLnRvU3RyaW5nKCk7XHJcbiAgICB3aW5kb3cuaGlzdG9yeS5wdXNoU3RhdGUobnVsbCwgZG9jdW1lbnQudGl0bGUsIHVybCk7XHJcbiAgICBjb25zdCB0YWJsZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHRoaXMudGFibGVJZCk7XHJcbiAgICBpZiAodGFibGUgIT09IG51bGwpIHtcclxuICAgICAgdGFibGUuZGlzcGF0Y2hFdmVudChuZXcgQ3VzdG9tRXZlbnQoXCJyZWZyZXNoXCIsIHsgZGV0YWlsOiBwYXJhbXMgfSkpO1xyXG4gICAgfSBlbHNlIHtcclxuICAgICAgd2luZG93LmxvY2F0aW9uLnJlbG9hZCgpO1xyXG4gICAgfVxyXG4gIH1cclxufVxyXG4iLCJpbXBvcnQgeyBBamF4VGFibGUgfSBmcm9tIFwiLi9lbGVtZW50cy9hamF4LXRhYmxlXCI7XHJcbmltcG9ydCB7IEFqYXhGb3JtIH0gZnJvbSBcIi4vZWxlbWVudHMvYWpheC1mb3JtXCI7XHJcbmltcG9ydCB7IEFqYXhNb2RhbCB9IGZyb20gXCIuL2VsZW1lbnRzL2FqYXgtbW9kYWxcIjtcclxuaW1wb3J0IHsgQWpheENoYXJ0IH0gZnJvbSBcIi4vZWxlbWVudHMvYWpheC1jaGFydFwiO1xyXG5pbXBvcnQgeyBTZWFyY2hGb3JtIH0gZnJvbSBcIi4vZWxlbWVudHMvc2VhcmNoLWZvcm1cIjtcclxuaW1wb3J0IHsgQWpheFVwbG9hZCB9IGZyb20gXCIuL2VsZW1lbnRzL2FqYXgtdXBsb2FkXCI7XHJcbmltcG9ydCB7IFJlYWN0Q2xvY2sgfSBmcm9tIFwiLi9lbGVtZW50cy9yZWFjdC1jbG9ja1wiO1xyXG5pbXBvcnQgeyBSZXNlcnZhdGlvbkRheXMgfSBmcm9tIFwiLi9lbGVtZW50cy9yZXNlcnZhdGlvbi1kYXlzXCI7XHJcblxyXG5pbXBvcnQgXCIuL3NjcmlwdHMvdG9hc3RcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL3BvcG92ZXJcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL3Rvb2x0aXBcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL3NlbGVjdDJcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL3NhbGxlXCI7XHJcbmltcG9ydCBcIi4vc2NyaXB0cy9idXJlYXVcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL2NvbnRhY3RzXCI7XHJcbmltcG9ydCBcIi4vc2NyaXB0cy9zZXR0aW5nXCI7XHJcbmltcG9ydCBcIi4vc2NyaXB0cy9lbnRyaWVzXCI7XHJcbmltcG9ydCBcIi4vc2NyaXB0cy9hdXRvY29tcGxldGVcIjtcclxuaW1wb3J0IFwiLi9zY3JpcHRzL2RhdGV0aW1lcGlja2VyXCI7XHJcbmltcG9ydCBcIi4vc2NyaXB0cy9jb25zb21hdGlvblwiO1xyXG5pbXBvcnQgXCIuL3NjcmlwdHMvcmVzZXJ2YXRpb24tdHlwZVwiO1xyXG5pbXBvcnQgXCIuL3NjcmlwdHMvcmVzZXJ2YXRpb24tZGF5c1wiO1xyXG5pbXBvcnQgXCIuL3NjcmlwdHMvc29jaWFsbmV0d29ya3NcIjtcclxuXHJcbmltcG9ydCBcImJvb3RzdHJhcC9qcy9zcmMvdGFiXCI7XHJcbmltcG9ydCBcImJvb3RzdHJhcC9qcy9zcmMvZHJvcGRvd25cIjtcclxuaW1wb3J0IFwiYm9vdHN0cmFwL2pzL3NyYy9jb2xsYXBzZVwiO1xyXG5pbXBvcnQgXCJib290c3RyYXAvanMvc3JjL29mZmNhbnZhc1wiO1xyXG5cclxuaW1wb3J0IFwiLi4vc3R5bGVzL2dsb2JhbC5zY3NzXCI7XHJcblxyXG4vLyBDdXN0b20gRWxlbWVudHNcclxuY3VzdG9tRWxlbWVudHMuZGVmaW5lKFwiYWpheC10YWJsZVwiLCBBamF4VGFibGUpO1xyXG5jdXN0b21FbGVtZW50cy5kZWZpbmUoXCJhamF4LWZvcm1cIiwgQWpheEZvcm0pO1xyXG5jdXN0b21FbGVtZW50cy5kZWZpbmUoXCJhamF4LW1vZGFsXCIsIEFqYXhNb2RhbCk7XHJcbmN1c3RvbUVsZW1lbnRzLmRlZmluZShcImFqYXgtY2hhcnRcIiwgQWpheENoYXJ0KTtcclxuY3VzdG9tRWxlbWVudHMuZGVmaW5lKFwic2VhcmNoLWZvcm1cIiwgU2VhcmNoRm9ybSk7XHJcbmN1c3RvbUVsZW1lbnRzLmRlZmluZShcImFqYXgtdXBsb2FkXCIsIEFqYXhVcGxvYWQpO1xyXG5jdXN0b21FbGVtZW50cy5kZWZpbmUoXCJyZWFjdC1jbG9ja1wiLCBSZWFjdENsb2NrKTtcclxuY3VzdG9tRWxlbWVudHMuZGVmaW5lKFwicmVzZXJ2YXRpb24tZGF5c1wiLCBSZXNlcnZhdGlvbkRheXMpO1xyXG4iLCJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImFqYXgubW9kYWwucmVhZHlcIiwgKCkgPT4ge1xyXG4gIGlmIChcclxuICAgIHdpbmRvdy5qUXVlcnkgJiZcclxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY291cnNlX2FkcmVzc2VfcmFtYXNzYWdlXCIpLmxlbmd0aCAmJlxyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNjb3Vyc2VfYWRyZXNzZV9saXZyYWlzb25cIikubGVuZ3RoXHJcbiAgKSB7XHJcbiAgICAkKFwiI2NvdXJzZV9hZHJlc3NlX3JhbWFzc2FnZVwiKS5hdXRvY29tcGxldGUoKTtcclxuICAgICQoXCIjY291cnNlX2FkcmVzc2VfbGl2cmFpc29uXCIpLmF1dG9jb21wbGV0ZSgpO1xyXG4gIH1cclxufSk7XHJcbiIsIndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5tb2RhbC5yZWFkeVwiLCAoKSA9PiB7XHJcbiAgY29uc3Qgc29jaWV0ZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYnVyZWF1X3NvY2lldGVcIik7XHJcbiAgY29uc3QgZGlyZWN0aW9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJidXJlYXVfZGlyZWN0aW9uXCIpO1xyXG4gIHNvY2lldGU/LmFkZEV2ZW50TGlzdGVuZXIoXCJjaGFuZ2VcIiwgKCkgPT4ge1xyXG4gICAgZGlyZWN0aW9uLnF1ZXJ5U2VsZWN0b3JBbGwoXCJvcHRpb246bm90KDpmaXJzdC1jaGlsZClcIikuZm9yRWFjaCgob3B0aW9uKSA9PiB7XHJcbiAgICAgIGNvbnN0IHNvY2lldGVWYWx1ZSA9IHBhcnNlSW50KHNvY2lldGUudmFsdWUpIHx8IDA7XHJcbiAgICAgIGNvbnN0IHNvY2lldGVJZCA9IHBhcnNlSW50KG9wdGlvbi5nZXRBdHRyaWJ1dGUoXCJkYXRhLXNvY2lldGVcIikpO1xyXG4gICAgICBpZiAoc29jaWV0ZVZhbHVlID09PSBzb2NpZXRlSWQpIHtcclxuICAgICAgICBvcHRpb24uc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgICAgfSBlbHNlIHtcclxuICAgICAgICBvcHRpb24uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgIGlmIChkaXJlY3Rpb24udmFsdWUgPT09IG9wdGlvbi52YWx1ZSkge1xyXG4gICAgICAgICAgZGlyZWN0aW9uLnZhbHVlID0gXCJcIjtcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH0pO1xyXG59KTtcclxuIiwid2luZG93LnVwZGF0ZUNvbnNvbWF0aW9uVG90YWwgPSAoKSA9PiB7XHJcbiAgbGV0IHRvdGFsID0gMDtcclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLmNvbnNvbWF0aW9uLXNvdXMtdG90YWxcIikuZm9yRWFjaCgoaW5wdXQpID0+IHtcclxuICAgIHRvdGFsICs9IHBhcnNlRmxvYXQoaW5wdXQudmFsdWUpIHx8IDA7XHJcbiAgfSk7XHJcbiAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJjb25zb21hdGlvbl90b3RhbFwiKS52YWx1ZSA9IHRvdGFsLnRvRml4ZWQoMik7XHJcbn07XHJcbiIsImltcG9ydCB7IGlzVmFsaWRFbWFpbCB9IGZyb20gXCIuLi91dGlscy9lbWFpbFwiO1xyXG5cclxuY29uc3QgaW5pdENvbnRhY3RzID0gKCkgPT4ge1xyXG4gIGlmIChcclxuICAgICF3aW5kb3cualF1ZXJ5IHx8XHJcbiAgICAhalF1ZXJ5LmZuLnNlbGVjdDIgfHxcclxuICAgICFkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwic2VsZWN0LmNvbnRhY3RzXCIpLmxlbmd0aFxyXG4gICkge1xyXG4gICAgcmV0dXJuO1xyXG4gIH1cclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwic2VsZWN0LmNvbnRhY3RzXCIpLmZvckVhY2goKHNlbGVjdCkgPT4ge1xyXG4gICAgJChzZWxlY3QpLnNlbGVjdDIoe1xyXG4gICAgICBhamF4OiB7XHJcbiAgICAgICAgdXJsOiBcIi9hZG1pbi9jb250YWN0cy9zZWFyY2hcIixcclxuICAgICAgICB0eXBlOiBcIkdFVFwiLFxyXG4gICAgICAgIGRhdGFUeXBlOiBcImpzb25cIixcclxuICAgICAgICBkZWxheTogMjUwLFxyXG4gICAgICAgIGNhY2hlOiB0cnVlLFxyXG4gICAgICAgIGRhdGE6IChwYXJhbXMpID0+ICh7IGtleXdvcmRzOiBwYXJhbXMudGVybSB9KSxcclxuICAgICAgICBwcm9jZXNzUmVzdWx0czogKGRhdGEpID0+IHtcclxuICAgICAgICAgIHJldHVybiB7XHJcbiAgICAgICAgICAgIG1vcmU6IGZhbHNlLFxyXG4gICAgICAgICAgICByZXN1bHRzOiBkYXRhLmNvbnRhY3RzLm1hcCgoZW1haWwpID0+ICh7IGlkOiBlbWFpbCwgdGV4dDogZW1haWwgfSkpLFxyXG4gICAgICAgICAgfTtcclxuICAgICAgICB9LFxyXG4gICAgICB9LFxyXG4gICAgICB0YWdzOiB0cnVlLFxyXG4gICAgICBtdWx0aXBsZTogdHJ1ZSxcclxuICAgICAgbGFuZ3VhZ2U6IFwiZnJcIixcclxuICAgICAgdG9rZW5TZXBhcmF0b3JzOiBbXCIsXCJdLFxyXG4gICAgICBjbG9zZU9uU2VsZWN0OiB0cnVlLFxyXG4gICAgICBtaW5pbXVtSW5wdXRMZW5ndGg6IDEsXHJcbiAgICAgIGRyb3Bkb3duUGFyZW50OiAkKHNlbGVjdCkucGFyZW50KCksXHJcbiAgICAgIGNyZWF0ZVRhZzogZnVuY3Rpb24gKHRlcm0pIHtcclxuICAgICAgICB2YXIgdmFsdWUgPSB0ZXJtLnRlcm07XHJcbiAgICAgICAgaWYgKGlzVmFsaWRFbWFpbCh2YWx1ZSkpIHtcclxuICAgICAgICAgIHJldHVybiB7XHJcbiAgICAgICAgICAgIGlkOiB2YWx1ZSxcclxuICAgICAgICAgICAgdGV4dDogdmFsdWUsXHJcbiAgICAgICAgICB9O1xyXG4gICAgICAgIH1cclxuICAgICAgICByZXR1cm4gbnVsbDtcclxuICAgICAgfSxcclxuICAgIH0pO1xyXG4gIH0pO1xyXG59O1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4Lm1vZGFsLnJlYWR5XCIsIGluaXRDb250YWN0cyk7XHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5mb3JtLnJlYWR5XCIsIGluaXRDb250YWN0cyk7XHJcbiIsImltcG9ydCB7IGZldGNoUmVzZXJ2YXRpb25EYXlzIH0gZnJvbSBcIi4vcmVzZXJ2YXRpb24tZGF5c1wiO1xyXG5cclxuY29uc3QgaW5pdERhdGV0aW1lcGlja2VyID0gKCkgPT4ge1xyXG4gIGlmIChcclxuICAgICF3aW5kb3cualF1ZXJ5IHx8XHJcbiAgICAhZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcImlucHV0LmRhdGV0aW1lcGlja2VyXCIpLmxlbmd0aFxyXG4gICkge1xyXG4gICAgcmV0dXJuO1xyXG4gIH1cclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiaW5wdXQuZGF0ZXRpbWVwaWNrZXJcIikuZm9yRWFjaCgoaW5wdXQpID0+IHtcclxuICAgICQoaW5wdXQpXHJcbiAgICAgIC5kYXRldGltZXBpY2tlcih7XHJcbiAgICAgICAgbG9jYWxlOiBcImZyXCIsXHJcbiAgICAgICAgc3RlcHBpbmc6IDUsXHJcbiAgICAgICAgc2lkZUJ5U2lkZTogdHJ1ZSxcclxuICAgICAgICBtaW5EYXRlOiBcIjIwMjEtMDEtMDFcIixcclxuICAgICAgICBtYXhEYXRlOiBcIjIwMzAtMTItMzFcIixcclxuICAgICAgICBmb3JtYXQ6IFwiREQvTU0vWVlZWSBISDptbVwiLFxyXG4gICAgICB9KVxyXG4gICAgICAub24oXCJkcC5jaGFuZ2VcIiwgZmV0Y2hSZXNlcnZhdGlvbkRheXMpO1xyXG4gIH0pO1xyXG59O1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4Lm1vZGFsLnJlYWR5XCIsIGluaXREYXRldGltZXBpY2tlcik7XHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5mb3JtLnJlYWR5XCIsIGluaXREYXRldGltZXBpY2tlcik7XHJcbiIsIndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5mb3JtLnJlYWR5XCIsICgpID0+IHtcclxuICAvLyBhZGQgaXRlbVxyXG4gIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCJidXR0b24uZW50cnktYWRkXCIpLmZvckVhY2goKGJ1dHRvbikgPT4ge1xyXG4gICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgIGNvbnN0IHRpbWUgPSBuZXcgRGF0ZSgpLmdldFRpbWUoKTtcclxuICAgICAgY29uc3QgaXRlbXNDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcclxuICAgICAgICBidXR0b24uZ2V0QXR0cmlidXRlKFwiZGF0YS10YXJnZXRcIilcclxuICAgICAgKTtcclxuICAgICAgY29uc3QgZW50cnkgPSBpdGVtc0NvbnRhaW5lci5xdWVyeVNlbGVjdG9yKFwiLmVudHJ5LWl0ZW1cIikuY2xvbmVOb2RlKHRydWUpO1xyXG4gICAgICBlbnRyeVxyXG4gICAgICAgIC5xdWVyeVNlbGVjdG9yQWxsKFwiLmZvcm0tY29udHJvbCwgLmZvcm0tc2VsZWN0XCIpXHJcbiAgICAgICAgLmZvckVhY2goKGNvbnRyb2wpID0+IHtcclxuICAgICAgICAgIGlmIChjb250cm9sLmdldEF0dHJpYnV0ZShcImlkXCIpLmVuZHNXaXRoKFwiX2lkXCIpKSB7XHJcbiAgICAgICAgICAgIGNvbnRyb2wudmFsdWUgPSBcIjBcIjtcclxuICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgIGNvbnRyb2wudmFsdWUgPSBcIlwiO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgICAgY29udHJvbC5zZXRBdHRyaWJ1dGUoXHJcbiAgICAgICAgICAgIFwiaWRcIixcclxuICAgICAgICAgICAgY29udHJvbC5nZXRBdHRyaWJ1dGUoXCJpZFwiKS5yZXBsYWNlKC9fKFswLTldKylfLywgYF8ke3RpbWV9X2ApXHJcbiAgICAgICAgICApO1xyXG4gICAgICAgICAgY29udHJvbC5zZXRBdHRyaWJ1dGUoXHJcbiAgICAgICAgICAgIFwibmFtZVwiLFxyXG4gICAgICAgICAgICBjb250cm9sLmdldEF0dHJpYnV0ZShcIm5hbWVcIikucmVwbGFjZSgvXyhbMC05XSspXy8sIGBfJHt0aW1lfV9gKVxyXG4gICAgICAgICAgKTtcclxuICAgICAgICB9KTtcclxuICAgICAgZW50cnkucXVlcnlTZWxlY3RvckFsbChcIi5pbWFnZS1pdGVtXCIpLmZvckVhY2goKGltYWdlKSA9PiBpbWFnZS5yZW1vdmUoKSk7XHJcbiAgICAgIGVudHJ5LnF1ZXJ5U2VsZWN0b3JBbGwoXCJpbWFnZS11cGxvYWRcIikuZm9yRWFjaCgodXBsb2FkKSA9PiB7XHJcbiAgICAgICAgdXBsb2FkLnNldEF0dHJpYnV0ZShcclxuICAgICAgICAgIFwibmFtZVwiLFxyXG4gICAgICAgICAgdXBsb2FkLmdldEF0dHJpYnV0ZShcIm5hbWVcIikucmVwbGFjZSgvXyhbMC05XSspXy8sIGBfJHt0aW1lfV9gKVxyXG4gICAgICAgICk7XHJcbiAgICAgIH0pO1xyXG4gICAgICBpdGVtc0NvbnRhaW5lci5hcHBlbmQoZW50cnkpO1xyXG4gICAgICBlbnRyeVxyXG4gICAgICAgIC5xdWVyeVNlbGVjdG9yKFwiYnV0dG9uLmVudHJ5LWRlbGV0ZVwiKVxyXG4gICAgICAgIC5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgaWYgKGNvbmZpcm0oXCLDinRlcyB2b3VzIHPDu3IgP1wiKSkge1xyXG4gICAgICAgICAgICBlbnRyeS5yZW1vdmUoKTtcclxuICAgICAgICAgICAgY29uc3QgY2FsbGJhY2sgPSB0aGlzLmdldEF0dHJpYnV0ZShcImNhbGxiYWNrXCIpO1xyXG4gICAgICAgICAgICBpZiAoY2FsbGJhY2sgIT09IG51bGwpIHtcclxuICAgICAgICAgICAgICB3aW5kb3dbY2FsbGJhY2tdKCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH0pO1xyXG4gIH0pO1xyXG4gIC8vIGRlbGV0ZSBlbnRyeVxyXG4gIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCJidXR0b24uZW50cnktZGVsZXRlXCIpLmZvckVhY2goKGJ1dHRvbikgPT4ge1xyXG4gICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgIGlmIChcclxuICAgICAgICBidXR0b24uY2xvc2VzdChcIi5lbnRyaWVzXCIpLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuZW50cnktaXRlbVwiKS5sZW5ndGggPiAxXHJcbiAgICAgICkge1xyXG4gICAgICAgIGlmIChjb25maXJtKFwiw4p0ZXMgdm91cyBzw7tyID9cIikpIHtcclxuICAgICAgICAgIGJ1dHRvbi5jbG9zZXN0KFwiLmVudHJ5LWl0ZW1cIikucmVtb3ZlKCk7XHJcbiAgICAgICAgICBjb25zdCBjYWxsYmFjayA9IGJ1dHRvbi5nZXRBdHRyaWJ1dGUoXCJjYWxsYmFja1wiKTtcclxuICAgICAgICAgIGlmIChjYWxsYmFjayAhPT0gbnVsbCkge1xyXG4gICAgICAgICAgICB3aW5kb3dbY2FsbGJhY2tdKCk7XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIHRvYXN0KFxyXG4gICAgICAgICAgXCJ3YXJuaW5nXCIsXHJcbiAgICAgICAgICBcIlZldWlsbGV6IGFqb3V0ZXIgZCdhdXRyZXMgw6lsw6ltZW50cyBwb3VyIHBvdXZvaXIgc3VwcHJpbWVyIGNldCDDqWzDqW1lbnRcIlxyXG4gICAgICAgICk7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH0pO1xyXG59KTtcclxuIiwiaW1wb3J0IFBvcG92ZXIgZnJvbSBcImJvb3RzdHJhcC9qcy9zcmMvcG9wb3ZlclwiO1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4LnRhYmxlLnJlYWR5XCIsICgpID0+IHtcclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1icy10b2dnbGU9XCJwb3BvdmVyXCJdJykuZm9yRWFjaCgoZWxlbWVudCkgPT4ge1xyXG4gICAgbmV3IFBvcG92ZXIoZWxlbWVudCwgeyBjb250YWluZXI6IFwiYm9keVwiIH0pO1xyXG4gIH0pO1xyXG59KTtcclxuXHJcbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cInBvcG92ZXJcIl0nKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgbmV3IFBvcG92ZXIoZWxlbWVudCwgeyBjb250YWluZXI6IFwiYm9keVwiIH0pO1xyXG59KTtcclxuIiwiaW1wb3J0IHsgdXBkYXRlRW5kRGF0ZSB9IGZyb20gXCIuLi91dGlscy9yZXNlcnZhdGlvblwiO1xyXG5cclxuY29uc3QgaW5pdFJlc2VydmF0aW9uRGF5c0VsZW1lbnRzID0gKCkgPT4ge1xyXG4gIGNvbnN0IGVsZW1lbnRzID0gW1xyXG4gICAgJ1tpZCQ9XCJ0eXBlXCJdIFt0eXBlPVwicmFkaW9cIl0nLFxyXG4gICAgXCJpbnB1dC5zdGFydF9kYXRlXCIsXHJcbiAgICBcImlucHV0LmVuZF9kYXRlXCIsXHJcbiAgICAnW2lkJD1cImpvdXJzX3JlY3VycmVudGVcIl0gW3R5cGU9XCJjaGVja2JveFwiXScsXHJcbiAgICBcInNlbGVjdC5jYXBhY2l0ZVwiLFxyXG4gICAgXCJzZWxlY3Quc2FsbGVcIixcclxuICBdO1xyXG4gIGVsZW1lbnRzLmZvckVhY2goKHNlbGVjdG9yKSA9PiB7XHJcbiAgICBkb2N1bWVudFxyXG4gICAgICAucXVlcnlTZWxlY3RvckFsbChzZWxlY3RvcilcclxuICAgICAgPy5mb3JFYWNoKChlbGVtZW50KSA9PlxyXG4gICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcImNoYW5nZVwiLCBmZXRjaFJlc2VydmF0aW9uRGF5cylcclxuICAgICAgKTtcclxuICB9KTtcclxuICBmZXRjaFJlc2VydmF0aW9uRGF5cygpO1xyXG59O1xyXG5cclxuZXhwb3J0IGNvbnN0IGZldGNoUmVzZXJ2YXRpb25EYXlzID0gKCkgPT4ge1xyXG4gIGlmIChkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwicmVzZXJ2YXRpb24tZGF5c1wiKSA9PT0gbnVsbCkge1xyXG4gICAgcmV0dXJuO1xyXG4gIH1cclxuICBpZiAoXHJcbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbaWQkPVwidHlwZVwiXSBpbnB1dDpjaGVja2VkJykudmFsdWUgPT09IFwiYWxsX2RheVwiXHJcbiAgKSB7XHJcbiAgICB1cGRhdGVFbmREYXRlKCk7XHJcbiAgfVxyXG5cclxuICBjb25zdCBzdGFydERhdGUgPSAkKFwiaW5wdXQuc3RhcnRfZGF0ZVwiKVxyXG4gICAgLmRhdGEoXCJEYXRlVGltZVBpY2tlclwiKVxyXG4gICAgPy5kYXRlKClcclxuICAgIC50b0RhdGUoKTtcclxuICBjb25zdCBlbmREYXRlID0gJChcImlucHV0LmVuZF9kYXRlXCIpLmRhdGEoXCJEYXRlVGltZVBpY2tlclwiKT8uZGF0ZSgpLnRvRGF0ZSgpO1xyXG5cclxuICBjb25zdCBkYXlzID0gW107XHJcbiAgZG9jdW1lbnRcclxuICAgIC5xdWVyeVNlbGVjdG9yQWxsKCdbaWQkPVwiam91cnNfcmVjdXJyZW50ZVwiXSBbdHlwZT1cImNoZWNrYm94XCJdOmNoZWNrZWQnKVxyXG4gICAgLmZvckVhY2goKGlucHV0KSA9PiBkYXlzLnB1c2goaW5wdXQudmFsdWUpKTtcclxuXHJcbiAgdmFyIHBhcmFtcyA9IHtcclxuICAgIHJpZDogZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcImlucHV0LnJlc2VydmF0aW9uX2lkXCIpLnZhbHVlIHx8IDAsXHJcbiAgICBzaWQ6IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJzZWxlY3Quc2FsbGVcIikudmFsdWUgfHwgMCxcclxuICAgIGRheXM6IGRheXMuam9pbihcIixcIiksXHJcbiAgICBzdGFydDogbW9tZW50KHN0YXJ0RGF0ZSkuZm9ybWF0KFwiWVlZWS1NTS1ERCBISDptbTowMFwiKSxcclxuICAgIGVuZDogbW9tZW50KGVuZERhdGUpLmZvcm1hdChcIllZWVktTU0tREQgSEg6bW06MDBcIiksXHJcbiAgfTtcclxuXHJcbiAgZG9jdW1lbnRcclxuICAgIC5xdWVyeVNlbGVjdG9yKFwicmVzZXJ2YXRpb24tZGF5c1wiKVxyXG4gICAgLmRpc3BhdGNoRXZlbnQobmV3IEN1c3RvbUV2ZW50KFwicmVmcmVzaFwiLCB7IGRldGFpbDogcGFyYW1zIH0pKTtcclxufTtcclxuXHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5tb2RhbC5yZWFkeVwiLCBpbml0UmVzZXJ2YXRpb25EYXlzRWxlbWVudHMpO1xyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImFqYXguZm9ybS5yZWFkeVwiLCBpbml0UmVzZXJ2YXRpb25EYXlzRWxlbWVudHMpO1xyXG4iLCJpbXBvcnQgeyB1cGRhdGVFbmREYXRlIH0gZnJvbSBcIi4uL3V0aWxzL3Jlc2VydmF0aW9uXCI7XHJcblxyXG5jb25zdCBpbml0Sm91cnNSZWN1cnJlbnRlID0gKCkgPT4ge1xyXG4gIGRvY3VtZW50XHJcbiAgICAucXVlcnlTZWxlY3RvckFsbCgnW2lkJD1cInR5cGVcIl0gW3R5cGU9XCJyYWRpb1wiXScpXHJcbiAgICAuZm9yRWFjaCgoZWxlbWVudCkgPT4ge1xyXG4gICAgICBlbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJjaGFuZ2VcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIGNvbnN0IGRhdGVGaW4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZpZWxkX2VuZF9kYXRlXCIpO1xyXG4gICAgICAgIGNvbnN0IGpvdXJzUmVjdXJyZW50ZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXHJcbiAgICAgICAgICAnW2lkJD1cImpvdXJzX3JlY3VycmVudGVcIl0nXHJcbiAgICAgICAgKTtcclxuICAgICAgICBjb25zdCBqb3VycyA9IGpvdXJzUmVjdXJyZW50ZS5jbG9zZXN0KFwiI2ZpZWxkLWpvdXJzLXJlY3VycmVudGVcIik7XHJcbiAgICAgICAgY29uc3QgZGF5cyA9IGpvdXJzUmVjdXJyZW50ZS5xdWVyeVNlbGVjdG9yQWxsKCdbdHlwZT1cImNoZWNrYm94XCJdJyk7XHJcbiAgICAgICAgZGF5cy5mb3JFYWNoKChjYikgPT4gKGNiLmNoZWNrZWQgPSBmYWxzZSkpO1xyXG4gICAgICAgIHN3aXRjaCAodGhpcy52YWx1ZSkge1xyXG4gICAgICAgICAgY2FzZSBcIm5vcm1hbFwiOlxyXG4gICAgICAgICAgICBqb3Vycy5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgICAgIGRhdGVGaW4uc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgICAgICAgICAgYnJlYWs7XHJcbiAgICAgICAgICBjYXNlIFwiYWxsX2RheVwiOlxyXG4gICAgICAgICAgICBqb3Vycy5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgICAgIGRhdGVGaW4uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgICB1cGRhdGVFbmREYXRlKCk7XHJcbiAgICAgICAgICAgIGJyZWFrO1xyXG4gICAgICAgICAgY2FzZSBcInJlY3VycmVudGVcIjpcclxuICAgICAgICAgICAgZGF0ZUZpbi5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgICAgICBqb3Vycy5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICAgICAgICBicmVhaztcclxuICAgICAgICB9XHJcbiAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn07XHJcblxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImFqYXgubW9kYWwucmVhZHlcIiwgaW5pdEpvdXJzUmVjdXJyZW50ZSk7XHJcbndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5mb3JtLnJlYWR5XCIsIGluaXRKb3Vyc1JlY3VycmVudGUpO1xyXG4iLCJjb25zdCBzaG93U2FsbGVzQnlDYXBhY2l0ZSA9ICgpID0+IHtcclxuICBjb25zdCBzYWxsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJzZWxlY3Quc2FsbGVcIik7XHJcbiAgY29uc3QgY2FwYWNpdGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwic2VsZWN0LmNhcGFjaXRlXCIpO1xyXG4gIGNhcGFjaXRlPy5hZGRFdmVudExpc3RlbmVyKFwiY2hhbmdlXCIsICgpID0+IHtcclxuICAgIHNhbGxlLnF1ZXJ5U2VsZWN0b3JBbGwoXCJvcHRpb246bm90KDpmaXJzdC1jaGlsZClcIikuZm9yRWFjaCgob3B0aW9uKSA9PiB7XHJcbiAgICAgIGNvbnN0IGNhcGFjaXRlVmFsdWUgPSBwYXJzZUludChjYXBhY2l0ZS52YWx1ZSkgfHwgMDtcclxuICAgICAgY29uc3Qgc2FsbGVDYXBhY2l0ZSA9IHBhcnNlSW50KG9wdGlvbi5nZXRBdHRyaWJ1dGUoXCJkYXRhLWNhcGFjaXRlXCIpKTtcclxuICAgICAgaWYgKGNhcGFjaXRlVmFsdWUgPiAwICYmIHNhbGxlQ2FwYWNpdGUgPj0gY2FwYWNpdGVWYWx1ZSkge1xyXG4gICAgICAgIG9wdGlvbi5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIG9wdGlvbi5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgaWYgKHNhbGxlLnZhbHVlID09PSBvcHRpb24udmFsdWUpIHtcclxuICAgICAgICAgIHNhbGxlLnZhbHVlID0gXCJcIjtcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH0pO1xyXG59O1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4Lm1vZGFsLnJlYWR5XCIsIHNob3dTYWxsZXNCeUNhcGFjaXRlKTtcclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4LmZvcm0ucmVhZHlcIiwgc2hvd1NhbGxlc0J5Q2FwYWNpdGUpO1xyXG4iLCJjb25zdCBpbml0U2VsZWN0MiA9ICgpID0+IHtcclxuICBpZiAoXHJcbiAgICAhd2luZG93LmpRdWVyeSB8fFxyXG4gICAgIWpRdWVyeS5mbi5zZWxlY3QyIHx8XHJcbiAgICAhZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jaG0tc2VsZWN0MlwiKS5sZW5ndGhcclxuICApIHtcclxuICAgIHJldHVybjtcclxuICB9XHJcbiAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jaG0tc2VsZWN0MlwiKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgICAkKGVsZW1lbnQpLnNlbGVjdDIoe1xyXG4gICAgICBsYW5ndWFnZTogXCJmclwiLFxyXG4gICAgICB0YWdzOiB0cnVlLFxyXG4gICAgICBkcm9wZG93blBhcmVudDogJChlbGVtZW50KS5wYXJlbnQoKSxcclxuICAgIH0pO1xyXG4gIH0pO1xyXG59O1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4Lm1vZGFsLnJlYWR5XCIsIGluaXRTZWxlY3QyKTtcclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4LmZvcm0ucmVhZHlcIiwgaW5pdFNlbGVjdDIpO1xyXG4iLCJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcImFqYXgubW9kYWwucmVhZHlcIiwgKCkgPT4ge1xyXG4gIGNvbnN0IHR5cGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNldHRpbmdfZmllbGRfdHlwZVwiKTtcclxuICB0eXBlPy5hZGRFdmVudExpc3RlbmVyKFwiY2hhbmdlXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCJbZGF0YS1maWVsZC10eXBlXVwiKS5mb3JFYWNoKChmaWVsZCkgPT4ge1xyXG4gICAgICBpZiAoZmllbGQuZ2V0QXR0cmlidXRlKFwiZGF0YS1maWVsZC10eXBlXCIpID09PSB0aGlzLnZhbHVlKSB7XHJcbiAgICAgICAgZmllbGQuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgICAgfSBlbHNlIHtcclxuICAgICAgICBmaWVsZC5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH0pO1xyXG4gIC8vIGFkZCBpdGVtXHJcbiAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcImJ1dHRvbi5hZGRMaW5lXCIpLmZvckVhY2goKGJ1dHRvbikgPT4ge1xyXG4gICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgIGNvbnN0IGtleXMgPSBbXTtcclxuICAgICAgY29uc3QgaXRlbXNDb250YWluZXIgPSBidXR0b24ucHJldmlvdXNFbGVtZW50U2libGluZztcclxuICAgICAgaXRlbXNDb250YWluZXIucXVlcnlTZWxlY3RvckFsbChcIi5pbnB1dC1ncm91cCBpbnB1dFwiKS5mb3JFYWNoKChpbnB1dCkgPT4ge1xyXG4gICAgICAgIGtleXMucHVzaChpbnB1dC5nZXRBdHRyaWJ1dGUoXCJkYXRhLWtleVwiKSk7XHJcbiAgICAgIH0pO1xyXG4gICAgICBjb25zdCBrZXkgPSBrZXlzLmxlbmd0aCA+IDAgPyBNYXRoLm1heCguLi5rZXlzKSArIDEgOiAxO1xyXG4gICAgICBjb25zdCBpdGVtID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImRpdlwiKTtcclxuICAgICAgaXRlbS5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLCBcImlucHV0LWdyb3VwXCIpO1xyXG4gICAgICBjb25zdCBmaWVsZFR5cGUgPSBpdGVtc0NvbnRhaW5lclxyXG4gICAgICAgIC5jbG9zZXN0KFwiW2RhdGEtZmllbGQtdHlwZV1cIilcclxuICAgICAgICAuZ2V0QXR0cmlidXRlKFwiZGF0YS1maWVsZC10eXBlXCIpO1xyXG4gICAgICBpdGVtLmlubmVySFRNTCA9IGBcclxuICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIG5hbWU9XCJ2YWx1ZVske2ZpZWxkVHlwZX1dWyR7a2V5fV1cIiBjbGFzcz1cImZvcm0tY29udHJvbFwiIGRhdGEta2V5PVwiJHtrZXl9XCI+XHJcbiAgICAgICAgICA8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cImlucHV0LWdyb3VwLXRleHQgYmctZGFuZ2VyIHRleHQtd2hpdGUgZGVsZXRlTGluZVwiPlxyXG4gICAgICAgICAgICAgIDxpIGNsYXNzPVwiYmkgYmktZGFzaFwiPjwvaT5cclxuICAgICAgICAgIDwvYnV0dG9uPlxyXG4gICAgICAgIGA7XHJcbiAgICAgIGl0ZW1zQ29udGFpbmVyLmFwcGVuZChpdGVtKTtcclxuICAgICAgaXRlbVxyXG4gICAgICAgIC5xdWVyeVNlbGVjdG9yKFwiLmRlbGV0ZUxpbmVcIilcclxuICAgICAgICAuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IGl0ZW0ucmVtb3ZlKCkpO1xyXG4gICAgfSk7XHJcbiAgICAvLyBkZWxldGUgaXRlbVxyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcImJ1dHRvbi5kZWxldGVMaW5lXCIpLmZvckVhY2goKGJ1dHRvbikgPT4ge1xyXG4gICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBidXR0b24uY2xvc2VzdChcIi5pbnB1dC1ncm91cFwiKS5yZW1vdmUoKTtcclxuICAgICAgfSk7XHJcbiAgICB9KTtcclxuICB9KTtcclxufSk7XHJcbiIsIndpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiYWpheC5tb2RhbC5yZWFkeVwiLCAoKSA9PiB7XHJcbiAgLy8gYWRkIGl0ZW1cclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiYnV0dG9uLmFkZC1lbnRyeVwiKS5mb3JFYWNoKChidXR0b24pID0+IHtcclxuICAgIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICBjb25zdCB0aW1lID0gbmV3IERhdGUoKS5nZXRUaW1lKCk7XHJcbiAgICAgIGNvbnN0IGl0ZW1zQ29udGFpbmVyID0gYnV0dG9uLnByZXZpb3VzRWxlbWVudFNpYmxpbmc7XHJcbiAgICAgIGNvbnN0IGVudHJ5ID0gaXRlbXNDb250YWluZXIucXVlcnlTZWxlY3RvcihcIi5jYXJkLWVudHJ5XCIpLmNsb25lTm9kZSh0cnVlKTtcclxuICAgICAgZW50cnlcclxuICAgICAgICAucXVlcnlTZWxlY3RvckFsbChcIi5mb3JtLWNvbnRyb2wsIC5mb3JtLXNlbGVjdFwiKVxyXG4gICAgICAgIC5mb3JFYWNoKChjb250cm9sKSA9PiB7XHJcbiAgICAgICAgICBjb250cm9sLnZhbHVlID0gXCJcIjtcclxuICAgICAgICAgIGNvbnRyb2wuc2V0QXR0cmlidXRlKFxyXG4gICAgICAgICAgICBcImlkXCIsXHJcbiAgICAgICAgICAgIGNvbnRyb2wuZ2V0QXR0cmlidXRlKFwiaWRcIikucmVwbGFjZSgvXyhbMC05XSspXy8sIGBfJHt0aW1lfV9gKVxyXG4gICAgICAgICAgKTtcclxuICAgICAgICAgIGNvbnRyb2wuc2V0QXR0cmlidXRlKFxyXG4gICAgICAgICAgICBcIm5hbWVcIixcclxuICAgICAgICAgIGNvbnRyb2wuZ2V0QXR0cmlidXRlKFwibmFtZVwiKS5yZXBsYWNlKC9fKFswLTldKylfLywgYF8ke3RpbWV9X2ApXHJcbiAgICAgICAgICApO1xyXG4gICAgICAgICAgLypjb250cm9sLnNldEF0dHJpYnV0ZShcclxuICAgICAgICAgICAgXCJsaW5rXCIsXHJcbiAgICAgICAgICAgIGNvbnRyb2wuZ2V0QXR0cmlidXRlKFwibGlua1wiKS5yZXBsYWNlKC9fKFswLTldKylfLywgYF8ke3RpbWV9X2ApXHJcbiAgICAgICAgICApO1xyXG4gICAgICAgICAgY29udHJvbC5zZXRBdHRyaWJ1dGUoXHJcbiAgICAgICAgICAgIFwiZm9sb3dlcnNDb3VudFwiLFxyXG4gICAgICAgICAgICBjb250cm9sLmdldEF0dHJpYnV0ZShcImZvbG93ZXJzQ291bnRcIikucmVwbGFjZSgvXyhbMC05XSspXy8sIGBfJHt0aW1lfV9gKVxyXG4gICAgICAgICAgKTsqL1xyXG4gICAgICAgIH0pO1xyXG4gICAgICAgICAgXHJcbiAgICAgIGl0ZW1zQ29udGFpbmVyLmFwcGVuZChlbnRyeSk7XHJcbiAgICAgIGVudHJ5XHJcbiAgICAgICAgLnF1ZXJ5U2VsZWN0b3IoXCJidXR0b24uZGVsZXRlLWVudHJ5XCIpXHJcbiAgICAgICAgLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XHJcbiAgICAgICAgICBpZiAoY29uZmlybShcIsOKdGVzIHZvdXMgc8O7ciA/XCIpKSB7XHJcbiAgICAgICAgICAgIGVudHJ5LnJlbW92ZSgpO1xyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbiAgfSk7XHJcbiAgLy8gZGVsZXRlIGVudHJ5XHJcbiAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcImJ1dHRvbi5kZWxldGUtZW50cnlcIikuZm9yRWFjaCgoYnV0dG9uKSA9PiB7XHJcbiAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgaWYgKFxyXG4gICAgICAgIGJ1dHRvbi5jbG9zZXN0KFwiLmVudHJpZXNcIikucXVlcnlTZWxlY3RvckFsbChcIi5jYXJkLWVudHJ5XCIpLmxlbmd0aCA+IDFcclxuICAgICAgKSB7XHJcbiAgICAgICAgaWYgKGNvbmZpcm0oXCLDinRlcyB2b3VzIHPDu3IgP1wiKSkge1xyXG4gICAgICAgICAgYnV0dG9uLmNsb3Nlc3QoXCIuY2FyZC1lbnRyeVwiKS5yZW1vdmUoKTtcclxuICAgICAgICB9XHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgdG9hc3QoXHJcbiAgICAgICAgICBcIndhcm5pbmdcIixcclxuICAgICAgICAgIFwiVmV1aWxsZXogYWpvdXRlciBkJ2F1dHJlcyDDqWzDqW1lbnRzIHBvdXIgcG91dm9pciBzdXBwcmltZXIgY2V0IMOpbMOpbWVudFwiXHJcbiAgICAgICAgKTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfSk7XHJcbn0pO1xyXG4iLCJpbXBvcnQgVG9hc3QgZnJvbSBcImJvb3RzdHJhcC9qcy9zcmMvdG9hc3RcIjtcclxuXHJcbndpbmRvdy50b2FzdCA9ICh0eXBlID0gXCJpbmZvXCIsIG1lc3NhZ2UsIGRlbGF5ID0gMzAwMCkgPT4ge1xyXG4gIGNvbnN0IHRvYXN0ID1cclxuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiY2htLXRvYXN0XCIpIHx8IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJkaXZcIik7XHJcbiAgdG9hc3Quc2V0QXR0cmlidXRlKFwiY2xhc3NcIiwgYHRvYXN0ICR7dHlwZX1gKTtcclxuICB0b2FzdC5zZXRBdHRyaWJ1dGUoXCJpZFwiLCBcImNobS10b2FzdFwiKTtcclxuICBkb2N1bWVudC5ib2R5LmFwcGVuZENoaWxkKHRvYXN0KTtcclxuICB0b2FzdC5pbm5lckhUTUwgPSBgPGRpdiBjbGFzcz1cImQtZmxleFwiPlxyXG4gICAgICA8ZGl2IGNsYXNzPVwidG9hc3QtYm9keVwiPiR7bWVzc2FnZX08L2Rpdj5cclxuICAgICAgPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3M9XCJidG4tY2xvc2UgbWUtMiBtLWF1dG9cIiBkYXRhLWJzLWRpc21pc3M9XCJ0b2FzdFwiIGFyaWEtbGFiZWw9XCJDbG9zZVwiPjwvYnV0dG9uPlxyXG4gICAgPC9kaXY+YDtcclxuICBuZXcgVG9hc3QodG9hc3QsIHsgZGVsYXkgfSkuc2hvdygpO1xyXG4gIHRvYXN0LmFkZEV2ZW50TGlzdGVuZXIoXCJoaWRlLmJzLnRvYXN0XCIsICgpID0+IHtcclxuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiY2htLXRvYXN0XCIpPy5yZW1vdmUoKTtcclxuICB9KTtcclxufTtcclxuIiwiaW1wb3J0IFRvb2x0aXAgZnJvbSBcImJvb3RzdHJhcC9qcy9zcmMvdG9vbHRpcFwiO1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJhamF4LnRhYmxlLnJlYWR5XCIsICgpID0+IHtcclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1icy10b2dnbGU9XCJ0b29sdGlwXCJdJykuZm9yRWFjaCgoZWxlbWVudCkgPT4ge1xyXG4gICAgbmV3IFRvb2x0aXAoZWxlbWVudCwgeyBjb250YWluZXI6IFwiYm9keVwiIH0pO1xyXG4gIH0pO1xyXG59KTtcclxuXHJcbmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cInRvb2x0aXBcIl0nKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgbmV3IFRvb2x0aXAoZWxlbWVudCwgeyBjb250YWluZXI6IFwiYm9keVwiIH0pO1xyXG59KTtcclxuIiwiZXhwb3J0IGZ1bmN0aW9uIGlzVmFsaWRFbWFpbChlbWFpbCkge1xyXG4gIGNvbnN0IHBhdGVybiA9XHJcbiAgICAvXigoW148PigpW1xcXVxcXFwuLDs6XFxzQFwiXSsoXFwuW148PigpW1xcXVxcXFwuLDs6XFxzQFwiXSspKil8KFwiLitcIikpQCgoW1swLTldezEsM31cXC5bMC05XXsxLDN9XFwuWzAtOV17MSwzfVxcLlswLTldezEsM31dKXwoKFthLXpBLVpcXC0wLTldK1xcLikrW2EtekEtWl17MiwxMH0pKSQvO1xyXG5cclxuICByZXR1cm4gcGF0ZXJuLnRlc3QoZW1haWwpO1xyXG59XHJcbiIsImV4cG9ydCBmdW5jdGlvbiB1cGRhdGVFbmREYXRlKCkge1xyXG4gIGNvbnN0IHN0YXJ0RGF0ZSA9ICQoXCJpbnB1dC5zdGFydF9kYXRlXCIpXHJcbiAgICAuZGF0YShcIkRhdGVUaW1lUGlja2VyXCIpXHJcbiAgICA/LmRhdGUoKVxyXG4gICAgLnRvRGF0ZSgpO1xyXG5cclxuICAkKFwiaW5wdXQuZW5kX2RhdGVcIikudmFsKG1vbWVudChzdGFydERhdGUpLmZvcm1hdChcIkREL01NL1lZWVkgMTg6MzBcIikpO1xyXG59XHJcbiIsImV4cG9ydCBmdW5jdGlvbiB0cmFucyhtc2dpZCwgdmFyaWFibGVzID0ge30pIHtcclxuICBjb25zdCBsb2NhbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiaHRtbFwiKS5nZXRBdHRyaWJ1dGUoXCJsYW5nXCIpO1xyXG4gIGlmIChcclxuICAgIHdpbmRvdy5zdHJpbmdzICE9PSB1bmRlZmluZWQgJiZcclxuICAgIHdpbmRvdy5zdHJpbmdzW2xvY2FsZV0gIT09IHVuZGVmaW5lZCAmJlxyXG4gICAgd2luZG93LnN0cmluZ3NbbG9jYWxlXVttc2dpZF0gIT09IHVuZGVmaW5lZFxyXG4gICkge1xyXG4gICAgcmV0dXJuIHJlcGxhY2VWYXJzKHdpbmRvdy5zdHJpbmdzW2xvY2FsZV1bbXNnaWRdLCB2YXJpYWJsZXMpO1xyXG4gIH0gZWxzZSB7XHJcbiAgICByZXR1cm4gcmVwbGFjZVZhcnMobXNnaWQsIHZhcmlhYmxlcyk7XHJcbiAgfVxyXG59XHJcblxyXG5leHBvcnQgZnVuY3Rpb24gcmVwbGFjZVZhcnMobXNnaWQsIHZhcmlhYmxlcykge1xyXG4gIGZvciAoY29uc3QgW2tleSwgdmFsdWVdIG9mIE9iamVjdC5lbnRyaWVzKHZhcmlhYmxlcykpIHtcclxuICAgIG1zZ2lkID0gbXNnaWQucmVwbGFjZShgJSR7a2V5fSVgLCB2YWx1ZSk7XHJcbiAgfVxyXG4gIHJldHVybiBtc2dpZDtcclxufVxyXG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCJ2YXIgbWFwID0ge1xuXHRcIi4vYWZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FmLmpzXCIsXG5cdFwiLi9hZi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYWYuanNcIixcblx0XCIuL2FyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXItZHpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWR6LmpzXCIsXG5cdFwiLi9hci1kei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItZHouanNcIixcblx0XCIuL2FyLWt3XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1rdy5qc1wiLFxuXHRcIi4vYXIta3cuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLWt3LmpzXCIsXG5cdFwiLi9hci1seVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbHkuanNcIixcblx0XCIuL2FyLWx5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1seS5qc1wiLFxuXHRcIi4vYXItbWFcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLW1hLmpzXCIsXG5cdFwiLi9hci1tYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItbWEuanNcIixcblx0XCIuL2FyLXBzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1wcy5qc1wiLFxuXHRcIi4vYXItcHMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXBzLmpzXCIsXG5cdFwiLi9hci1zYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItc2EuanNcIixcblx0XCIuL2FyLXNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci1zYS5qc1wiLFxuXHRcIi4vYXItdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2FyLXRuLmpzXCIsXG5cdFwiLi9hci10bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXItdG4uanNcIixcblx0XCIuL2FyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9hci5qc1wiLFxuXHRcIi4vYXpcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2F6LmpzXCIsXG5cdFwiLi9hei5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYXouanNcIixcblx0XCIuL2JlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZS5qc1wiLFxuXHRcIi4vYmUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JlLmpzXCIsXG5cdFwiLi9iZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYmcuanNcIixcblx0XCIuL2JnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9iZy5qc1wiLFxuXHRcIi4vYm1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JtLmpzXCIsXG5cdFwiLi9ibS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm0uanNcIixcblx0XCIuL2JuXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm4tYmRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JuLWJkLmpzXCIsXG5cdFwiLi9ibi1iZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm4tYmQuanNcIixcblx0XCIuL2JuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ibi5qc1wiLFxuXHRcIi4vYm9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JvLmpzXCIsXG5cdFwiLi9iby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYm8uanNcIixcblx0XCIuL2JyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ici5qc1wiLFxuXHRcIi4vYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2JyLmpzXCIsXG5cdFwiLi9ic1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvYnMuanNcIixcblx0XCIuL2JzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9icy5qc1wiLFxuXHRcIi4vY2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NhLmpzXCIsXG5cdFwiLi9jYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY2EuanNcIixcblx0XCIuL2NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jcy5qc1wiLFxuXHRcIi4vY3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2NzLmpzXCIsXG5cdFwiLi9jdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3YuanNcIixcblx0XCIuL2N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9jdi5qc1wiLFxuXHRcIi4vY3lcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2N5LmpzXCIsXG5cdFwiLi9jeS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvY3kuanNcIixcblx0XCIuL2RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kYS5qc1wiLFxuXHRcIi4vZGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RhLmpzXCIsXG5cdFwiLi9kZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUuanNcIixcblx0XCIuL2RlLWF0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1hdC5qc1wiLFxuXHRcIi4vZGUtYXQuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLWF0LmpzXCIsXG5cdFwiLi9kZS1jaFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZGUtY2guanNcIixcblx0XCIuL2RlLWNoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kZS1jaC5qc1wiLFxuXHRcIi4vZGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2RlLmpzXCIsXG5cdFwiLi9kdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZHYuanNcIixcblx0XCIuL2R2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9kdi5qc1wiLFxuXHRcIi4vZWxcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VsLmpzXCIsXG5cdFwiLi9lbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZWwuanNcIixcblx0XCIuL2VuLWF1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1hdS5qc1wiLFxuXHRcIi4vZW4tYXUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWF1LmpzXCIsXG5cdFwiLi9lbi1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tY2EuanNcIixcblx0XCIuL2VuLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1jYS5qc1wiLFxuXHRcIi4vZW4tZ2JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWdiLmpzXCIsXG5cdFwiLi9lbi1nYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tZ2IuanNcIixcblx0XCIuL2VuLWllXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pZS5qc1wiLFxuXHRcIi4vZW4taWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWllLmpzXCIsXG5cdFwiLi9lbi1pbFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taWwuanNcIixcblx0XCIuL2VuLWlsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1pbC5qc1wiLFxuXHRcIi4vZW4taW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLWluLmpzXCIsXG5cdFwiLi9lbi1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4taW4uanNcIixcblx0XCIuL2VuLW56XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1uei5qc1wiLFxuXHRcIi4vZW4tbnouanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VuLW56LmpzXCIsXG5cdFwiLi9lbi1zZ1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW4tc2cuanNcIixcblx0XCIuL2VuLXNnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lbi1zZy5qc1wiLFxuXHRcIi4vZW9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VvLmpzXCIsXG5cdFwiLi9lby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZW8uanNcIixcblx0XCIuL2VzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy5qc1wiLFxuXHRcIi4vZXMtZG9cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLWRvLmpzXCIsXG5cdFwiLi9lcy1kby5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtZG8uanNcIixcblx0XCIuL2VzLW14XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy1teC5qc1wiLFxuXHRcIi4vZXMtbXguanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLW14LmpzXCIsXG5cdFwiLi9lcy11c1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXMtdXMuanNcIixcblx0XCIuL2VzLXVzLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9lcy11cy5qc1wiLFxuXHRcIi4vZXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2VzLmpzXCIsXG5cdFwiLi9ldFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXQuanNcIixcblx0XCIuL2V0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ldC5qc1wiLFxuXHRcIi4vZXVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2V1LmpzXCIsXG5cdFwiLi9ldS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZXUuanNcIixcblx0XCIuL2ZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mYS5qc1wiLFxuXHRcIi4vZmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZhLmpzXCIsXG5cdFwiLi9maVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmkuanNcIixcblx0XCIuL2ZpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maS5qc1wiLFxuXHRcIi4vZmlsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9maWwuanNcIixcblx0XCIuL2ZpbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZmlsLmpzXCIsXG5cdFwiLi9mb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZm8uanNcIixcblx0XCIuL2ZvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mby5qc1wiLFxuXHRcIi4vZnJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLmpzXCIsXG5cdFwiLi9mci1jYVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2EuanNcIixcblx0XCIuL2ZyLWNhLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci1jYS5qc1wiLFxuXHRcIi4vZnItY2hcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2ZyLWNoLmpzXCIsXG5cdFwiLi9mci1jaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnItY2guanNcIixcblx0XCIuL2ZyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9mci5qc1wiLFxuXHRcIi4vZnlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2Z5LmpzXCIsXG5cdFwiLi9meS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZnkuanNcIixcblx0XCIuL2dhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nYS5qc1wiLFxuXHRcIi4vZ2EuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dhLmpzXCIsXG5cdFwiLi9nZFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2QuanNcIixcblx0XCIuL2dkLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nZC5qc1wiLFxuXHRcIi4vZ2xcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dsLmpzXCIsXG5cdFwiLi9nbC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ2wuanNcIixcblx0XCIuL2dvbS1kZXZhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tZGV2YS5qc1wiLFxuXHRcIi4vZ29tLWRldmEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2dvbS1kZXZhLmpzXCIsXG5cdFwiLi9nb20tbGF0blwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ29tLWxhdG4uanNcIixcblx0XCIuL2dvbS1sYXRuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9nb20tbGF0bi5qc1wiLFxuXHRcIi4vZ3VcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2d1LmpzXCIsXG5cdFwiLi9ndS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvZ3UuanNcIixcblx0XCIuL2hlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oZS5qc1wiLFxuXHRcIi4vaGUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hlLmpzXCIsXG5cdFwiLi9oaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaGkuanNcIixcblx0XCIuL2hpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oaS5qc1wiLFxuXHRcIi4vaHJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2hyLmpzXCIsXG5cdFwiLi9oci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHIuanNcIixcblx0XCIuL2h1XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9odS5qc1wiLFxuXHRcIi4vaHUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2h1LmpzXCIsXG5cdFwiLi9oeS1hbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaHktYW0uanNcIixcblx0XCIuL2h5LWFtLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9oeS1hbS5qc1wiLFxuXHRcIi4vaWRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lkLmpzXCIsXG5cdFwiLi9pZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaWQuanNcIixcblx0XCIuL2lzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pcy5qc1wiLFxuXHRcIi4vaXMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2lzLmpzXCIsXG5cdFwiLi9pdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2l0LWNoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9pdC1jaC5qc1wiLFxuXHRcIi4vaXQtY2guanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2l0LWNoLmpzXCIsXG5cdFwiLi9pdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvaXQuanNcIixcblx0XCIuL2phXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qYS5qc1wiLFxuXHRcIi4vamEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2phLmpzXCIsXG5cdFwiLi9qdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvanYuanNcIixcblx0XCIuL2p2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9qdi5qc1wiLFxuXHRcIi4va2FcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2thLmpzXCIsXG5cdFwiLi9rYS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva2EuanNcIixcblx0XCIuL2trXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ray5qc1wiLFxuXHRcIi4va2suanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2trLmpzXCIsXG5cdFwiLi9rbVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva20uanNcIixcblx0XCIuL2ttLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rbS5qc1wiLFxuXHRcIi4va25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tuLmpzXCIsXG5cdFwiLi9rbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva24uanNcIixcblx0XCIuL2tvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9rby5qc1wiLFxuXHRcIi4va28uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2tvLmpzXCIsXG5cdFwiLi9rdVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3UuanNcIixcblx0XCIuL2t1LWttclwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3Uta21yLmpzXCIsXG5cdFwiLi9rdS1rbXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LWttci5qc1wiLFxuXHRcIi4va3UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2t1LmpzXCIsXG5cdFwiLi9reVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUva3kuanNcIixcblx0XCIuL2t5LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9reS5qc1wiLFxuXHRcIi4vbGJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xiLmpzXCIsXG5cdFwiLi9sYi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbGIuanNcIixcblx0XCIuL2xvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sby5qc1wiLFxuXHRcIi4vbG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2xvLmpzXCIsXG5cdFwiLi9sdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHQuanNcIixcblx0XCIuL2x0LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9sdC5qc1wiLFxuXHRcIi4vbHZcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL2x2LmpzXCIsXG5cdFwiLi9sdi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbHYuanNcIixcblx0XCIuL21lXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tZS5qc1wiLFxuXHRcIi4vbWUuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21lLmpzXCIsXG5cdFwiLi9taVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWkuanNcIixcblx0XCIuL21pLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9taS5qc1wiLFxuXHRcIi4vbWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21rLmpzXCIsXG5cdFwiLi9tay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbWsuanNcIixcblx0XCIuL21sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbC5qc1wiLFxuXHRcIi4vbWwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21sLmpzXCIsXG5cdFwiLi9tblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbW4uanNcIixcblx0XCIuL21uLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tbi5qc1wiLFxuXHRcIi4vbXJcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21yLmpzXCIsXG5cdFwiLi9tci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXIuanNcIixcblx0XCIuL21zXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXMtbXlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL21zLW15LmpzXCIsXG5cdFwiLi9tcy1teS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXMtbXkuanNcIixcblx0XCIuL21zLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9tcy5qc1wiLFxuXHRcIi4vbXRcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL210LmpzXCIsXG5cdFwiLi9tdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbXQuanNcIixcblx0XCIuL215XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9teS5qc1wiLFxuXHRcIi4vbXkuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL215LmpzXCIsXG5cdFwiLi9uYlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmIuanNcIixcblx0XCIuL25iLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9uYi5qc1wiLFxuXHRcIi4vbmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25lLmpzXCIsXG5cdFwiLi9uZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmUuanNcIixcblx0XCIuL25sXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbmwtYmVcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25sLWJlLmpzXCIsXG5cdFwiLi9ubC1iZS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbmwtYmUuanNcIixcblx0XCIuL25sLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ubC5qc1wiLFxuXHRcIi4vbm5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL25uLmpzXCIsXG5cdFwiLi9ubi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvbm4uanNcIixcblx0XCIuL29jLWxuY1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvb2MtbG5jLmpzXCIsXG5cdFwiLi9vYy1sbmMuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL29jLWxuYy5qc1wiLFxuXHRcIi4vcGEtaW5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BhLWluLmpzXCIsXG5cdFwiLi9wYS1pbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcGEtaW4uanNcIixcblx0XCIuL3BsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wbC5qc1wiLFxuXHRcIi4vcGwuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3BsLmpzXCIsXG5cdFwiLi9wdFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3B0LWJyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9wdC1ici5qc1wiLFxuXHRcIi4vcHQtYnIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3B0LWJyLmpzXCIsXG5cdFwiLi9wdC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcHQuanNcIixcblx0XCIuL3JvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9yby5qc1wiLFxuXHRcIi4vcm8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3JvLmpzXCIsXG5cdFwiLi9ydVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvcnUuanNcIixcblx0XCIuL3J1LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9ydS5qc1wiLFxuXHRcIi4vc2RcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NkLmpzXCIsXG5cdFwiLi9zZC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2QuanNcIixcblx0XCIuL3NlXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zZS5qc1wiLFxuXHRcIi4vc2UuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NlLmpzXCIsXG5cdFwiLi9zaVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2kuanNcIixcblx0XCIuL3NpLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zaS5qc1wiLFxuXHRcIi4vc2tcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NrLmpzXCIsXG5cdFwiLi9zay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc2suanNcIixcblx0XCIuL3NsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zbC5qc1wiLFxuXHRcIi4vc2wuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NsLmpzXCIsXG5cdFwiLi9zcVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3EuanNcIixcblx0XCIuL3NxLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcS5qc1wiLFxuXHRcIi4vc3JcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NyLmpzXCIsXG5cdFwiLi9zci1jeXJsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci1jeXJsLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zci1jeXJsLmpzXCIsXG5cdFwiLi9zci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3IuanNcIixcblx0XCIuL3NzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zcy5qc1wiLFxuXHRcIi4vc3MuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3NzLmpzXCIsXG5cdFwiLi9zdlwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3YuanNcIixcblx0XCIuL3N2LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS9zdi5qc1wiLFxuXHRcIi4vc3dcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3N3LmpzXCIsXG5cdFwiLi9zdy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvc3cuanNcIixcblx0XCIuL3RhXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90YS5qc1wiLFxuXHRcIi4vdGEuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RhLmpzXCIsXG5cdFwiLi90ZVwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGUuanNcIixcblx0XCIuL3RlLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZS5qc1wiLFxuXHRcIi4vdGV0XCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ZXQuanNcIixcblx0XCIuL3RldC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGV0LmpzXCIsXG5cdFwiLi90Z1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGcuanNcIixcblx0XCIuL3RnLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90Zy5qc1wiLFxuXHRcIi4vdGhcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RoLmpzXCIsXG5cdFwiLi90aC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGguanNcIixcblx0XCIuL3RrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ay5qc1wiLFxuXHRcIi4vdGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3RrLmpzXCIsXG5cdFwiLi90bC1waFwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGwtcGguanNcIixcblx0XCIuL3RsLXBoLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bC1waC5qc1wiLFxuXHRcIi4vdGxoXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90bGguanNcIixcblx0XCIuL3RsaC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdGxoLmpzXCIsXG5cdFwiLi90clwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHIuanNcIixcblx0XCIuL3RyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90ci5qc1wiLFxuXHRcIi4vdHpsXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS90emwuanNcIixcblx0XCIuL3R6bC5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHpsLmpzXCIsXG5cdFwiLi90em1cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS5qc1wiLFxuXHRcIi4vdHptLWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3R6bS1sYXRuLmpzXCIsXG5cdFwiLi90em0tbGF0bi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLWxhdG4uanNcIixcblx0XCIuL3R6bS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdHptLmpzXCIsXG5cdFwiLi91Zy1jblwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWctY24uanNcIixcblx0XCIuL3VnLWNuLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91Zy1jbi5qc1wiLFxuXHRcIi4vdWtcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VrLmpzXCIsXG5cdFwiLi91ay5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdWsuanNcIixcblx0XCIuL3VyXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ci5qc1wiLFxuXHRcIi4vdXIuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3VyLmpzXCIsXG5cdFwiLi91elwiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdXouanNcIixcblx0XCIuL3V6LWxhdG5cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LWxhdG4uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3V6LWxhdG4uanNcIixcblx0XCIuL3V6LmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS91ei5qc1wiLFxuXHRcIi4vdmlcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3ZpLmpzXCIsXG5cdFwiLi92aS5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvdmkuanNcIixcblx0XCIuL3gtcHNldWRvXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS94LXBzZXVkby5qc1wiLFxuXHRcIi4veC1wc2V1ZG8uanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3gtcHNldWRvLmpzXCIsXG5cdFwiLi95b1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUveW8uanNcIixcblx0XCIuL3lvLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS95by5qc1wiLFxuXHRcIi4vemgtY25cIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWNuLmpzXCIsXG5cdFwiLi96aC1jbi5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtY24uanNcIixcblx0XCIuL3poLWhrXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1oay5qc1wiLFxuXHRcIi4vemgtaGsuanNcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLWhrLmpzXCIsXG5cdFwiLi96aC1tb1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtbW8uanNcIixcblx0XCIuL3poLW1vLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZS96aC1tby5qc1wiLFxuXHRcIi4vemgtdHdcIjogXCIuL25vZGVfbW9kdWxlcy9tb21lbnQvbG9jYWxlL3poLXR3LmpzXCIsXG5cdFwiLi96aC10dy5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL21vbWVudC9sb2NhbGUvemgtdHcuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9ub2RlX21vZHVsZXMvbW9tZW50L2xvY2FsZSBzeW5jIHJlY3Vyc2l2ZSBeXFxcXC5cXFxcLy4qJFwiOyJdLCJuYW1lcyI6WyJheGlvcyIsInRyYW5zIiwiQWpheENoYXJ0IiwiX0hUTUxFbGVtZW50IiwiX3RoaXMiLCJfY2xhc3NDYWxsQ2hlY2siLCJfY2FsbFN1cGVyIiwibG9hZGluZyIsInR5cGUiLCJnZXRBdHRyaWJ1dGUiLCJ1cmwiLCJwYXJhbXMiLCJKU09OIiwicGFyc2UiLCJvcHRpb25zIiwicmVuZGVyIiwiX2luaGVyaXRzIiwiX2NyZWF0ZUNsYXNzIiwia2V5IiwidmFsdWUiLCJfdGhpczIiLCJ0b2dnbGVMb2FkaW5nIiwiZ2V0IiwidGhlbiIsInJlcyIsImRhdGEiLCJzdGF0dXMiLCJkYXRhc2V0cyIsImxlbmd0aCIsImNvbmZpZyIsImNhbnZhcyIsImRvY3VtZW50IiwiY3JlYXRlRWxlbWVudCIsImFwcGVuZENoaWxkIiwid2luZG93IiwiQ2hhcnQiLCJnZXRDb250ZXh0IiwiZHJhdyIsImNvbmNhdCIsImVyciIsIm1lc3NhZ2UiLCJjb250ZW50IiwiaW5uZXJIVE1MIiwiX3RoaXMkcXVlcnlTZWxlY3RvciIsInF1ZXJ5U2VsZWN0b3IiLCJyZW1vdmUiLCJfd3JhcE5hdGl2ZVN1cGVyIiwiSFRNTEVsZW1lbnQiLCJBamF4Rm9ybSIsImFyZ3VtZW50cyIsImNvbm5lY3RlZENhbGxiYWNrIiwiZGlzcGF0Y2hFdmVudCIsIkN1c3RvbUV2ZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInN1Ym1pdCIsImJpbmQiLCJlIiwicHJldmVudERlZmF1bHQiLCJmb3JtIiwiZm9ybURhdGEiLCJGb3JtRGF0YSIsImJ0biIsImJ0bkh0bWwiLCJzZXRBdHRyaWJ1dGUiLCJwb3N0IiwidW5kZWZpbmVkIiwidG9hc3QiLCJkZXRhaWwiLCJyZW1vdmVBdHRyaWJ1dGUiLCJNb2RhbCIsIkFqYXhNb2RhbCIsIndpZHRoIiwiZGVmYXVsdExvYWRpbmdNZXNzYWdlIiwiY29uZmlybSIsInRpdGxlIiwiYm9keSIsImZvb3RlciIsImNvbnRhaW5lcklkIiwiZWxlbWVudCIsImdldEVsZW1lbnRCeUlkIiwiZmV0Y2giLCJvcGVuIiwiY2xvc2UiLCJfdGhpczIkZWxlbWVudCRxdWVyeVMiLCJldmVudCIsIl90aGlzMyIsImZldGNoaW5nIiwiYmFja2Ryb3AiLCJrZXlib2FyZCIsInNob3ciLCJfZG9jdW1lbnQkZ2V0RWxlbWVudEIiLCJfbW9kYWwkbmV4dEVsZW1lbnRTaWIiLCJtb2RhbCIsImdldEluc3RhbmNlIiwiaGlkZSIsIm5leHRFbGVtZW50U2libGluZyIsInRhYmxlSWQiLCJ0YWJsZSIsIkV2ZW50IiwiaHRtbCIsImlzTmFOIiwic3RhcnRzV2l0aCIsIkFqYXhUYWJsZSIsImlkIiwiZW50aXR5X25hbWUiLCJwYWdlIiwicGVycGFnZSIsInJlZ2lzdGVyRXZlbnRzIiwic3Bpbm5lciIsIl90eXBlb2YiLCJfb2JqZWN0U3ByZWFkIiwiaW5jbHVkZXMiLCJvbiIsImV2ZW50X25hbWUiLCJ0YXJnZXQiLCJjYWxsYmFjayIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiYnVsa0FjdGlvbnNDaGFuZ2UiLCJhcHBseUJ1bGtBY3Rpb24iLCJzZXRQZXJwYWdlIiwic2V0UGFnZSIsIm5leHRQYWdlIiwicHJldlBhZ2UiLCJjaGVja0FsbCIsInRvZ2dsZUNoZWNrQWxsIiwialF1ZXJ5Iiwic29ydGFibGVJdGVtcyIsInNldEJhZGdlQ291bnQiLCJjbGFzc0xpc3QiLCJhZGQiLCJzdHlsZSIsIm9wYWNpdHkiLCJidG5Mb2FkaW5nIiwiZGlzcGxheSIsImFjdGlvbiIsIml0ZW0iLCJkcm9wZG93biIsImNsb3Nlc3QiLCJleGlzdHMiLCJkaXNhYmxlZCIsImNoZWNrZWQiLCJfdGhpczQiLCJpdGVtcyIsInB1c2giLCJwYXJzZUludCIsImlucHV0IiwiY2IiLCJ1bmNoZWNrZWQiLCJpbmRldGVybWluYXRlIiwiX3RoaXM1IiwiJHRhYmxlIiwiJCIsImZpbmQiLCJzb3J0YWJsZSIsInVwZGF0ZSIsIml0ZW1zX29yZGVycyIsImVhY2giLCJpbmRleCIsInRleHQiLCJjc3MiLCJjb3VudCIsImlubmVyVGV4dCIsIkFqYXhVcGxvYWQiLCJwYXRoIiwibmFtZSIsIm1pbiIsIm1heCIsImhhbmRsZUNoYW5nZSIsImVsIiwiX2VsJGNsb3Nlc3QiLCJpY29uIiwiYXBwZW5kIiwiZmlsZXMiLCJmaWxlX25hbWUiLCJmaWxlX3BhdGgiLCJleHRlbnNpb24iLCJnZXRJY29uIiwiYWRkRmlsZSIsInBhcmVudE5vZGUiLCJpbnNlcnRCZWZvcmUiLCJkZWxldGVGaWxlIiwiY291bnRJdGVtcyIsIlJlYWN0IiwidXNlU3RhdGUiLCJ1c2VFZmZlY3QiLCJSZWFjdERPTSIsIm1vbWVudCIsImxvY2FsZSIsIkNsb2NrQ29udGFpbmVyIiwiX3VzZVN0YXRlIiwiZm9ybWF0IiwiX3VzZVN0YXRlMiIsIl9zbGljZWRUb0FycmF5IiwiY3VycmVudFRpbWUiLCJzZXRDdXJyZW50VGltZSIsImludGVydmFsIiwic2V0SW50ZXJ2YWwiLCJjbGVhckludGVydmFsIiwiY2xhc3NOYW1lIiwiUmVhY3RDbG9jayIsIlJlc2VydmF0aW9uRGF5cyIsInJpZCIsInNpZCIsInN0YXJ0IiwiZW5kIiwiZGF5cyIsIlNlYXJjaEZvcm0iLCJyZXNldCIsImxvY2F0aW9uIiwib3JpZ2luIiwicGF0aG5hbWUiLCJoaXN0b3J5IiwicHVzaFN0YXRlIiwiaSIsInVybFBhcmFtcyIsIlVSTFNlYXJjaFBhcmFtcyIsImVuZHNXaXRoIiwicmVwbGFjZSIsInRvU3RyaW5nIiwicmVsb2FkIiwiY3VzdG9tRWxlbWVudHMiLCJkZWZpbmUiLCJhdXRvY29tcGxldGUiLCJzb2NpZXRlIiwiZGlyZWN0aW9uIiwib3B0aW9uIiwic29jaWV0ZVZhbHVlIiwic29jaWV0ZUlkIiwidXBkYXRlQ29uc29tYXRpb25Ub3RhbCIsInRvdGFsIiwicGFyc2VGbG9hdCIsInRvRml4ZWQiLCJpc1ZhbGlkRW1haWwiLCJpbml0Q29udGFjdHMiLCJmbiIsInNlbGVjdDIiLCJzZWxlY3QiLCJhamF4IiwiZGF0YVR5cGUiLCJkZWxheSIsImNhY2hlIiwia2V5d29yZHMiLCJ0ZXJtIiwicHJvY2Vzc1Jlc3VsdHMiLCJtb3JlIiwicmVzdWx0cyIsImNvbnRhY3RzIiwibWFwIiwiZW1haWwiLCJ0YWdzIiwibXVsdGlwbGUiLCJsYW5ndWFnZSIsInRva2VuU2VwYXJhdG9ycyIsImNsb3NlT25TZWxlY3QiLCJtaW5pbXVtSW5wdXRMZW5ndGgiLCJkcm9wZG93blBhcmVudCIsInBhcmVudCIsImNyZWF0ZVRhZyIsImZldGNoUmVzZXJ2YXRpb25EYXlzIiwiaW5pdERhdGV0aW1lcGlja2VyIiwiZGF0ZXRpbWVwaWNrZXIiLCJzdGVwcGluZyIsInNpZGVCeVNpZGUiLCJtaW5EYXRlIiwibWF4RGF0ZSIsImJ1dHRvbiIsInRpbWUiLCJEYXRlIiwiZ2V0VGltZSIsIml0ZW1zQ29udGFpbmVyIiwiZW50cnkiLCJjbG9uZU5vZGUiLCJjb250cm9sIiwiaW1hZ2UiLCJ1cGxvYWQiLCJQb3BvdmVyIiwiY29udGFpbmVyIiwidXBkYXRlRW5kRGF0ZSIsImluaXRSZXNlcnZhdGlvbkRheXNFbGVtZW50cyIsImVsZW1lbnRzIiwic2VsZWN0b3IiLCJfZG9jdW1lbnQkcXVlcnlTZWxlY3QiLCJfJCRkYXRhIiwiXyQkZGF0YTIiLCJzdGFydERhdGUiLCJkYXRlIiwidG9EYXRlIiwiZW5kRGF0ZSIsImpvaW4iLCJpbml0Sm91cnNSZWN1cnJlbnRlIiwiZGF0ZUZpbiIsImpvdXJzUmVjdXJyZW50ZSIsImpvdXJzIiwic2hvd1NhbGxlc0J5Q2FwYWNpdGUiLCJzYWxsZSIsImNhcGFjaXRlIiwiY2FwYWNpdGVWYWx1ZSIsInNhbGxlQ2FwYWNpdGUiLCJpbml0U2VsZWN0MiIsImZpZWxkIiwia2V5cyIsInByZXZpb3VzRWxlbWVudFNpYmxpbmciLCJNYXRoIiwiYXBwbHkiLCJmaWVsZFR5cGUiLCJUb2FzdCIsIlRvb2x0aXAiLCJwYXRlcm4iLCJ0ZXN0IiwidmFsIiwibXNnaWQiLCJ2YXJpYWJsZXMiLCJzdHJpbmdzIiwicmVwbGFjZVZhcnMiLCJfaSIsIl9PYmplY3QkZW50cmllcyIsIk9iamVjdCIsImVudHJpZXMiLCJfT2JqZWN0JGVudHJpZXMkX2kiXSwic291cmNlUm9vdCI6IiJ9