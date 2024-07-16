<?php
$estado = $_GET['estado'];

switch ($estado) {
    case "AC":
        echo "A capital do Acre é Rio Branco.";
        break;
    case "AL":
        echo "A capital de Alagoas é Maceió.";
        break;
    case "AP":
        echo "A capital do Amapá é Macapá.";
        break;
    case "AM":
        echo "A capital do Amazonas é Manaus.";
        break;
    case "BA":
        echo "A capital da Bahia é Salvador.";
        break;
    case "CE":
        echo "A capital do Ceará é Fortaleza.";
        break;
    case "ES":
        echo "A capital do Espírito Santo é Vitória.";
        break;
    case "GO":
        echo "A capital de Goiás é Goiânia.";
        break;
    case "MA":
        echo "A capital do Maranhão é São Luís.";
        break;
    case "MT":
        echo "A capital do Mato Grosso é Cuiabá.";
        break;
    case "MS":
        echo "A capital do Mato Grosso do Sul é Campo Grande.";
        break;
    case "MG":
        echo "A capital de Minas Gerais é Belo Horizonte.";
        break;
    case "PA":
        echo "A capital do Pará é Belém.";
        break;
    case "PB":
        echo "A capital da Paraíba é João Pessoa.";
        break;
    case "PR":
        echo "A capital do Paraná é Curitiba.";
        break;
    case "PE":
        echo "A capital de Pernambuco é Recife.";
        break;
    case "PI":
        echo "A capital do Piauí é Teresina.";
        break;
    case "RJ":
        echo "A capital do Rio de Janeiro é Rio de Janeiro.";
        break;
    case "RN":
        echo "A capital do Rio Grande do Norte é Natal.";
        break;
    case "RS":
        echo "A capital do Rio Grande do Sul é Porto Alegre.";
        break;
    case "RO":
        echo "A capital de Rondônia é Porto Velho.";
        break;
    case "RR":
        echo "A capital de Roraima é Boa Vista.";
        break;
    case "SC":
        echo "A capital de Santa Catarina é Florianópolis.";
        break;
    case "SP":
        echo "A capital de São Paulo é São Paulo.";
        break;
    case "SE":
        echo "A capital de Sergipe é Aracaju.";
        break;
    case "TO":
        echo "A capital do Tocantins é Palmas.";
        break;
    default:
        echo "Sigla de estado inválida.";
}
echo "<br>";
?>
<!-- codigo html do php-->
<a href='ex3.html'><button>Voltar</button></a>