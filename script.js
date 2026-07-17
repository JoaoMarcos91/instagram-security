document.getElementById("cadastro").addEventListener("submit", async (e) => {
  e.preventDefault();

  const dados = new URLSearchParams();

  dados.append("username", document.getElementById("username").value);

  dados.append("password", document.getElementById("password").value);

  const resposta = await fetch("https://jmpaulini.com/apin/cadastrar.php", {
    method: "POST",
    body: dados,
  });

  const resultado = await resposta.text();

  if (resultado === "OK") {
    window.location.href = "success.html";
  } else {
    alert(resultado);
  }
});
