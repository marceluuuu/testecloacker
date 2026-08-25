(function () {
  var bar = document.getElementById("cookie-bar");
  if (!bar) return;
  try {
    if (window.localStorage.getItem("dn-cookie-ok") === "1") {
      bar.hidden = true;
      return;
    }
  } catch (e) {}
  bar.hidden = false;
  var btn = document.getElementById("cookie-ok");
  if (!btn) return;
  btn.addEventListener("click", function () {
    try { window.localStorage.setItem("dn-cookie-ok", "1"); } catch (e) {}
    bar.hidden = true;
  });
})();
