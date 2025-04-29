<?php

// Definição da exceção personalizada SaveXMLException
class SaveXMLException extends Exception {
    protected $xmlNaoSalvo;

    public function __construct($message = "", $xml = "", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->xmlNaoSalvo = $xml;
    }

    public function getXmlNaoSalvo() {
        return $this->xmlNaoSalvo;
    }
}

function salvarArquivoXML($caminhoArquivo, $conteudoXML) {
    $resultado = @file_put_contents($caminhoArquivo, $conteudoXML); // Use @ para suprimir warnings
    if ($resultado === false) {
        throw new SaveXMLException("Erro ao salvar o arquivo XML em: " . $caminhoArquivo, $conteudoXML);
    }
    return true;
}

// Exemplo de uso (adapte com a lógica do seu arquivo processa.php)
$caminho = 'arquivo_saida.xml';
$xmlDados = '<root><item>Dado importante</item></root>';
$caminhoInvalido = '/caminho/inexistente/arquivo.xml';
$xmlComErro = '<root><item>Dado incompleto'; // XML mal formado para teste

echo "<h2>Testando o salvamento normal:</h2>";
try {
    salvarArquivoXML($caminho, $xmlDados);
    echo "Arquivo XML salvo com sucesso em: " . $caminho . "<br>";
} catch (SaveXMLException $e) {
    echo "Ocorreu um erro ao salvar o arquivo XML.<br>";
    echo "Mensagem do erro: " . $e->getMessage() . "<br>";
    if ($e->getXmlNaoSalvo()) {
        echo "Código XML que não foi gravado: <pre>" . htmlspecialchars($e->getXmlNaoSalvo()) . "</pre><br>";
    }
}

echo "<hr><h2>Testando com caminho inválido (Desafio 1 & 3):</h2>";
try {
    salvarArquivoXML($caminhoInvalido, $xmlDados);
    echo "Arquivo XML salvo com sucesso em: " . $caminhoInvalido . "<br>";
} catch (SaveXMLException $e) {
    echo "Ocorreu um erro ao salvar o arquivo XML.<br>";
    echo "Mensagem do erro: " . $e->getMessage() . "<br>";
    if ($e->getXmlNaoSalvo()) {
        echo "Código XML que não foi gravado: <pre>" . htmlspecialchars($e->getXmlNaoSalvo()) . "</pre><br>";
    }

    // Desafio 1: Gravar em arquivo de texto
    $arquivoLogTexto = 'erro_salvar_xml.log';
    $mensagemLogTexto = date('Y-m-d H:i:s') . " - Erro ao salvar XML: " . $e->getMessage() . "\n";
    file_put_contents($arquivoLogTexto, $mensagemLogTexto, FILE_APPEND);
    echo "Mensagem de erro gravada em: " . $arquivoLogTexto . "<br>";

    // Desafio 3: Gravar em arquivo XML
    $arquivoLogXML = 'log_erros.xml';
    gravarLogXML($arquivoLogXML, $e->getMessage(), $e->getXmlNaoSalvo());
    echo "Mensagem de erro (e XML) gravada em: " . $arquivoLogXML . "<br>";
}

echo "<hr><h2>Testando com conteúdo XML potencialmente problemático:</h2>";
try {
    salvarArquivoXML($caminho, $xmlComErro);
    echo "Arquivo XML salvo com sucesso em: " . $caminho . "<br>";
} catch (SaveXMLException $e) {
    echo "Ocorreu um erro ao salvar o arquivo XML.<br>";
    echo "Mensagem do erro: " . $e->getMessage() . "<br>";
    if ($e->getXmlNaoSalvo()) {
        echo "Código XML que não foi gravado: <pre>" . htmlspecialchars($e->getXmlNaoSalvo()) . "</pre><br>";
    }
    // Você pode adicionar aqui a lógica para gravar logs se desejar para este tipo de erro também
}

function gravarLogXML($arquivoLog, $mensagemErro, $xmlNaoSalvo = null) {
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    if (file_exists($arquivoLog)) {
        $dom->load($arquivoLog);
        $root = $dom->documentElement;
    } else {
        $root = $dom->createElement('erros');
        $dom->appendChild($root);
    }

    $erro = $dom->createElement('erro');

    $timestamp = $dom->createElement('timestamp', date('Y-m-d H:i:s'));
    $erro->appendChild($timestamp);

    $mensagem = $dom->createElement('mensagem', $mensagemErro);
    $erro->appendChild($mensagem);

    if ($xmlNaoSalvo !== null) {
        $xmlContent = $dom->createElement('xml_nao_salvo');
        $cdata = $dom->createCDATASection($xmlNaoSalvo);
        $xmlContent->appendChild($cdata);
        $erro->appendChild($xmlContent);
    }

    $root->appendChild($erro);
    $dom->save($arquivoLog);
}

?>