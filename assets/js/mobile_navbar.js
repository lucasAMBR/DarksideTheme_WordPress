document.addEventListener("DOMContentLoaded", () => {
  const toggleBtn = document.getElementById("menu-toggle");
  const sidebar = document.getElementById("sidebar");
  const closeBtn = document.getElementById("close-menu");

  // Abrir o menu
  toggleBtn?.addEventListener("click", () => {
    sidebar.classList.remove("-translate-x-full");
  });

  // Fechar o menu com botão
  closeBtn?.addEventListener("click", () => {
    sidebar.classList.add("-translate-x-full");
  });

  // Fechar ao clicar fora
  document.addEventListener("click", (e) => {
    const isClickInside = sidebar.contains(e.target) || toggleBtn.contains(e.target);
    if (!isClickInside) {
      sidebar.classList.add("-translate-x-full");
    }
  });
});
