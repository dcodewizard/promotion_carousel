(function () {
	"use strict";
	var e, r = {
	  720: function () {
		const e = window.wp.blocks,
		  r = window.React,
		  o = window.wp.i18n,
		  t = window.wp.blockEditor,
		  i = JSON.parse('{"UU":"literati-example/carousel"}');
		(0, e.registerBlockType)(i.UU, { edit: Edit }); // Update to reference Edit component
	  }
	},
	o = {};
	function t(e) {
	  var i = o[e];
	  if (void 0 !== i) return i.exports;
	  var l = (o[e] = { exports: {} });
	  return r[e](l, l.exports, t), l.exports;
	}
	t.m = r, e = [], t.O = (r, o, i, l) => {
	  if (!o) {
		var a = 1 / 0;
		for (c = 0; c < e.length; c++) {
		  for (var [o, i, l] = e[c], n = !0, p = 0; p < o.length; p++)
			(!1 & l || a >= l) && Object.keys(t.O).every((e) => t.O[e](o[p]))
			  ? o.splice(p--, 1)
			  : (n = !1, l < a && (a = l));
		  if (n) {
			e.splice(c--, 1);
			var s = i();
			void 0 !== s && (r = s);
		  }
		}
		return r;
	  }
	  l = l || 0;
	  for (var c = e.length; c > 0 && e[c - 1][2] > l; c--) e[c] = e[c - 1];
	  e[c] = [o, i, l];
	}, t.o = (e, r) => Object.prototype.hasOwnProperty.call(e, r), (() => {
	  var e = { 57: 0, 350: 0 };
	  t.O.j = (r) => 0 === e[r];
	  var r = (r, o) => {
		var i, l, [a, n, p] = o, s = 0;
		if (a.some((r) => 0 !== e[r])) {
		  for (i in n) t.o(n, i) && (t.m[i] = n[i]);
		  if (p) var c = p(t);
		}
		for (r && r(o); s < a.length; s++) l = a[s], t.o(e, l) && e[l] && e[l][0](), e[l] = 0;
		return t.O(c);
	  },
	  o = globalThis.webpackChunkliterati_example = globalThis.webpackChunkliterati_example || [];
	  o.forEach(r.bind(null, 0)), o.push = r.bind(null, o.push);
	})();
	var i = t.O(void 0, [350], (() => t(720)));
	i = t.O(i);
  })();
  