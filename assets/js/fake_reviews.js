function formatRawDateToBR(rawDate) {
  if (!rawDate) return "";

  try {
    const cleanDate = rawDate.replace(" ", "T").split(".")[0];
    const dateObj = new Date(cleanDate);

    if (isNaN(dateObj.getTime())) return "";

    return dateObj.toLocaleString("pt-BR", {
      day: "2-digit",
      month: "2-digit",
      year: "numeric",
      hour: "2-digit",
      minute: "2-digit",
    });
  } catch (error) {
    console.error("Erro ao formatar data:", error);
    return "";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  fetch("https://fakerapi.it/api/v2/custom?_quantity=12&customfield1=name&customfield2=dateTime&customfield3=text")
    .then(response => response.json())
    .then(data => {
      const container = document.getElementById("avaliacoes-container");

      if (!container) return;

      data.data.forEach(avaliacao => {
        const div = document.createElement("div");
        div.className = "bg-gray-800 shadow-md rounded p-4 max-w-[350px] m-1";

        div.innerHTML = `
          <h3 class="text-lg font-bold text-blue-600 mb-1">${avaliacao.customfield1}</h3>
          <p class="text-gray-400 text-sm mb-2">${formatRawDateToBR(avaliacao.customfield2.date)}</p>
          <p class="text-white">${avaliacao.customfield3}</p>
        `;

        container.appendChild(div);
      });
    })
    .catch(error => {
      console.error("Erro ao buscar avaliações:", error);
    });
});
