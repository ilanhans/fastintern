const $ = s => document.querySelector(s);
const norm = s => s.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
const toast = msg => { const t = $('#toast'); if (!t) return; t.textContent = msg; t.classList.add('show'); setTimeout(() => t.classList.remove('show'), 2000); };

// Menu burger (mobile)
const burger = $('#burger');
if (burger) burger.onclick = () => burger.setAttribute('aria-expanded', $('#nav').classList.toggle('open'));

// ACCUEIL : filtre des offres
if ($('#offers')) {
  const cards = [...document.querySelectorAll('.offer')];
  function filter() {
    const q = norm($('#q').value.trim()), c = norm($('#city').value.trim()), t = $('#type').value;
    let n = 0;
    cards.forEach(o => {
      const ok = (!q || norm(o.textContent).includes(q)) && (!c || norm(o.textContent).includes(c)) && (!t || o.dataset.type === t);
      o.classList.toggle('hide', !ok); if (ok) n++;
    });
    $('#empty').style.display = n ? 'none' : 'block';
    $('#filterInfo').textContent = (q || c || t) ? `(${n} résultat${n > 1 ? 's' : ''})` : '';
  }
  $('#searchForm').addEventListener('submit', e => { e.preventDefault(); filter(); $('#offres').scrollIntoView({ behavior: 'smooth' }); });
  document.querySelectorAll('.path').forEach(p => p.addEventListener('click', () => {
    $('#type').value = p.dataset.type; $('#q').value = ''; $('#city').value = ''; filter();
  }));
}

// DASHBOARD : postuler / sauvegarder
if ($('#jobs')) {
  const num = (id, d) => { const el = $(id); el.textContent = +el.textContent + d; };
  $('#jobs').addEventListener('click', e => {
    const s = e.target.closest('[data-save]'), a = e.target.closest('[data-apply]');
    if (s) {
      const on = s.getAttribute('aria-pressed') !== 'true';
      s.setAttribute('aria-pressed', on); s.textContent = on ? '★' : '☆';
      num('#kSaved', on ? 1 : -1); toast(on ? 'Offre sauvegardée' : 'Offre retirée');
    }
    if (a && !a.disabled) { a.disabled = true; a.textContent = 'Envoyée'; num('#kApplied', 1); toast('Candidature envoyée'); }
  });
}