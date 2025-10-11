function setFooterPadding() {
  const footer = document.querySelector('footer');
  if (!footer) return;
  const h = footer.offsetHeight || 0;
  // Set the CSS variable so body padding-bottom adapts to the real footer height
  document.documentElement.style.setProperty('--footer-h', `${h}px`);
}

function includeHTML() {
  const includeElems = Array.from(document.querySelectorAll('[data-include]'));
  if (includeElems.length === 0) {
    // No includes; still set footer padding if footer exists
    setFooterPadding();
    return;
  }

  const tasks = includeElems.map(el =>
    fetch(el.getAttribute('data-include'))
      .then(response => response.text())
      .then(html => { el.innerHTML = html; })
      .catch(err => console.error('Include error:', err))
  );

  Promise.all(tasks).then(() => {
    // After header/footer are injected, compute footer height
    setFooterPadding();
  });
}

document.addEventListener('DOMContentLoaded', () => {
  includeHTML();
  // In case no includes or late load
  setFooterPadding();
});

window.addEventListener('resize', setFooterPadding);
