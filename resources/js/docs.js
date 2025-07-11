
const docComponentInit = () => {
  const componentCards = document.querySelectorAll('[data-component-card]');
  const iconCopiedToast = document.getElementById('icon-copied-toast');
  const iconCopiedToastInstance = new window.bootstrap.Toast(iconCopiedToast);

  componentCards.forEach(card => {
    const copyCodeBtn = card.querySelector('.copy-code-btn');
    const copyCodeEl = card.querySelector('.code-to-copy');
    const previewBtn = card.querySelector('.preview-btn');
    const collapseElement = card.querySelector('.code-collapse');
    const collapseInstance = window.bootstrap.Collapse.getOrCreateInstance(collapseElement, {
      toggle: false
    });

    previewBtn?.addEventListener('click', () => {
      collapseInstance.toggle();
    });

    copyCodeBtn?.addEventListener('click', () => {
      const el = document.createElement('textarea');
      el.value = copyCodeEl.innerHTML;
      document.body.appendChild(el);

      el.select();
      document.execCommand('copy');
      document.body.removeChild(el);

      iconCopiedToast.querySelector(
        '.toast-body'
      ).innerHTML = `<code class='text-body-quaternary'>Code has been copied to clipboard.</code>`;
      iconCopiedToastInstance.show();
    });
  });
};

export default docComponentInit;
