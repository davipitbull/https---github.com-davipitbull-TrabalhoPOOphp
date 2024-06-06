<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de Classes</title>
    <style>
        .class-info {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Exibição de Classes</h1>
    <form method="post">
        <button type="submit" name="class" value="Caneta">Caneta</button>
        <button type="submit" name="class" value="ArCondicionado">Ar-Condicionado</button>
        <button type="submit" name="class" value="Livro">Livro</button>
        <button type="submit" name="class" value="Celular">Celular</button>
        <button type="submit" name="class" value="Computador">Computador</button>
        <button type="submit" name="class" value="Carro">Carro</button>
        <button type="submit" name="class" value="Pessoa">Pessoa</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['class'])) {
        $className = $_POST['class'];
        echo "<h2>Características da Classe $className</h2>";
        echo '<div class="class-info">';

        switch ($className) {
            case 'Caneta':
                class Caneta {
                    private $cor;
                    private $tamanho;
                    private $tipo;
                    private $grossura;
                
                    public function escreve() {
                        echo "Caneta está escrevendo\n";
                    }
                
                    public function desenha() {
                        echo "Caneta está desenhando\n";
                    }
                }
                $class = new Caneta();
                echo "<p><strong>Atributos:</strong> cor, tamanho, tipo, grossura</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->escreve();
                echo "<br>";
                $class->desenha();
                break;
            case 'ArCondicionado':
                class ArCondicionado {
                    private $voltagem;
                    private $tamanho;
                    private $btu;
                    private $preco;
                
                    public function esfria() {
                        echo "Ar-condicionado está esfriando\n";
                    }
                
                    public function ventila() {
                        echo "Ar-condicionado está ventilando\n";
                    }
                }
                $class = new ArCondicionado();
                echo "<p><strong>Atributos:</strong> voltagem, tamanho, btu, preco</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->esfria();
                echo "<br>";
                $class->ventila();
                break;
            case 'Livro':
                class Livro {
                    private $capa;
                    private $autor;
                    private $genero;
                    private $paginas;
                
                    public function abre() {
                        echo "Livro está aberto\n";
                    }
                
                    public function fecha() {
                        echo "Livro está fechado\n";
                    }
                }
                $class = new Livro();
                echo "<p><strong>Atributos:</strong> capa, autor, genero, paginas</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->abre();
                echo "<br>";
                $class->fecha();
                break;
            case 'Celular':
                class Celular {
                    private $modelo;
                    private $armazenamento;
                    private $tamanho;
                    private $autoFalante;
                    private $camera;
                
                    public function liga() {
                        echo "Celular está ligado\n";
                    }
                
                    public function desliga() {
                        echo "Celular está desligado\n";
                    }
                
                    public function tiraFoto() {
                        echo "Celular está tirando foto\n";
                    }
                }
                $class = new Celular();
                echo "<p><strong>Atributos:</strong> modelo, armazenamento, tamanho, autoFalante, camera</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->liga();
                echo "<br>";
                $class->desliga();
                echo "<br>";
                $class->tiraFoto();
                break;
            case 'Computador':
                class Computador {
                    private $cpu;
                    private $processador;
                    private $placaDeVideo;
                    private $placaMae;
                    private $penteDeRam;
                    private $fans;
                    private $armazenamento;
                
                    public function liga() {
                        echo "Computador está ligado\n";
                    }
                
                    public function desliga() {
                        echo "Computador está desligado\n";
                    }
                
                    public function operacoesMatematicas() {
                        echo "Computador está realizando operações matemáticas\n";
                    }
                
                    public function executaComandos() {
                        echo "Computador está executando comandos\n";
                    }
                }
                $class = new Computador();
                echo "<p><strong>Atributos:</strong> cpu, processador, placaDeVideo, placaMae, penteDeRam, fans, armazenamento</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->liga();
                echo "<br>";
                $class->desliga();
                echo "<br>";
                $class->operacoesMatematicas();
                echo "<br>";
                $class->executaComandos();
                break;
            case 'Carro':
                class Carro {
                    private $rodas;
                    private $motor;
                    private $lataria;
                    private $parafusos;
                    private $bancos;
                    private $volante;
                    private $marcha;
                
                    public function andaPraFrente() {
                        echo "Carro está andando pra frente\n";
                    }
                
                    public function andaPraTras() {
                        echo "Carro está andando pra trás\n";
                    }
                
                    public function freia() {
                        echo "Carro está freando\n";
                    }
                
                    public function arCondicionado() {
                        echo "Carro está ligando o ar condicionado\n";
                    }
                }
                $class = new Carro();
                echo "<p><strong>Atributos:</strong> rodas, motor, lataria, parafusos, bancos, volante, marcha</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->andaPraFrente();
                echo "<br>";
                $class->andaPraTras();
                echo "<br>";
                $class->freia();
                echo "<br>";
                $class->arCondicionado();
                break;
            case 'Pessoa':
                class Pessoa {
                    private $orgaos;
                    private $braco;
                    private $perna;
                    private $torco;
                    private $cabeca;
                    private $cerebro;
                
                    public function pensa() {
                        echo "Pessoa está pensando\n";
                    }
                
                    public function anda() {
                        echo "Pessoa está andando\n";
                    }
                
                    public function respira() {
                        echo "Pessoa está respirando\n";
                    }
                }
                $class = new Pessoa();
                echo "<p><strong>Atributos:</strong> orgaos, braco, perna, torco, cabeca, cerebro</p>";
                echo "<p><strong>Métodos:</strong></p>";
                $class->pensa();
                echo "<br>";
                $class->anda();
                echo "<br>";
                $class->respira();
                break;
        }

        echo '</div>';
    }
    ?>
</body>
</html>
