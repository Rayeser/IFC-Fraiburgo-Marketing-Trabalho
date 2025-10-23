<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFC Campus Fraiburgo - Lead de Marketing</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background-color: #28a745; color: white; padding: 20px; display: flex; justify-content: space-between; align-items: center; } /* Muda para verde, mesma cor do botão FORMULÁRIO */
        header h1 { margin: 0; text-align: center; flex: 1; } /* Centraliza o título no header */
        .logo { width: 100px; height: auto; } /* Ajuste o tamanho do logo conforme necessário */
        .container { max-width: 800px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .hero { background-image: url('https://via.placeholder.com/800x400?text=Imagem+de+Fundo+do+Campus'); /* Substitua pela URL da sua imagem de fundo */ background-size: cover; background-position: center; padding: 40px; color: black; text-align: center; border-radius: 8px 8px 0 0; } /* Muda cor do texto para preto */
        .hero h2 { margin: 0; color: black; } /* Garante que o h2 seja preto */
        .benefits { padding: 20px; }
        .form-image { text-align: center; margin: 20px 0; }
        .form-image img { max-width: 100%; height: auto; border-radius: 8px; }
        .cta-button { display: block; width: 200px; margin: 20px auto; padding: 15px 20px; background-color: #28a745; color: white; text-align: center; text-decoration: none; border-radius: 8px; font-weight: bold; transition: background-color 0.3s ease; } /* Estiliza o botão com mais beleza: padding maior, bordas arredondadas, transição suave */
        .cta-button:hover { background-color: #218838; transform: scale(1.05); } /* Adiciona efeito de hover com escala */
        .strategy-buttons { display: flex; justify-content: center; gap: 20px; margin: 20px 0; } /* Container para os dois botões lado a lado */
        .strategy-button { padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; transition: background-color 0.3s ease; cursor: pointer; } /* Muda para verde, mesma cor do botão FORMULÁRIO */
        .strategy-button:hover { background-color: #218838; } /* Hover também ajustado para verde escuro */
        .strategy-text { display: none; padding: 20px; background: #f9f9f9; border-radius: 8px; margin-top: 10px; border-left: 5px solid #28a745; } /* Borda esquerda também em verde para consistência */
        #formulario { display: none; padding: 20px; background: #f9f9f9; border-radius: 8px; margin-top: 20px; }
        footer { text-align: center; padding: 10px; background-color: #333; color: white; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>IFC Campus Fraiburgo</h1>
    </header>
    
    <div class="container">
        <div class="hero">
            <h2>Por que escolher o IFC Campus Fraiburgo?</h2>
            <p>O IFC Campus Fraiburgo oferece cursos técnicos de alta qualidade em áreas como Agroindústria, Informática e Meio Ambiente. 
                Localizado em Fraiburgo, SC, o campus combina infraestrutura moderna com um ambiente acolhedor, preparando estudantes para o mercado de trabalho com foco em sustentabilidade e inovação.</p>
        </div>
        
        <div class="benefits">
            <ul>
                <li>Cursos gratuitos e reconhecidos pelo MEC.</li>
                <li>Oportunidades de estágio e empregabilidade superior a 90%.</li>
                <li>Comunidade ativa e eventos culturais.</li>
            </ul>
            
            <!-- Botões de estratégia posicionados aqui para melhor visualização, após os benefícios -->
            <div class="strategy-buttons">
                <button class="strategy-button" onclick="toggleStrategy('strategy1')">Estratégia de Marketing 1</button>
                <button class="strategy-button" onclick="toggleStrategy('strategy2')">Estratégia de Marketing 2</button>
            </div>
            
            <!-- Textos de estratégia, ocultos por padrão -->
            <div id="strategy1" class="strategy-text">
                <h3>Estratégia de Marketing 1: Foco em Redes Sociais</h3>
                <p>Utilize plataformas como Instagram e Facebook para compartilhar histórias de alunos, eventos do campus e conquistas. Crie conteúdo envolvente, como vídeos de aulas práticas e depoimentos, para atrair jovens interessados em cursos técnicos. Invista em anúncios direcionados para regiões próximas a Fraiburgo, destacando a empregabilidade alta e a gratuidade dos cursos.</p>
            </div>
            <div id="strategy2" class="strategy-text">
                <h3>Estratégia de Marketing 2: Parcerias Locais e Eventos</h3>
                <p>Estabeleça parcerias com empresas locais e escolas para promover o IFC Campus Fraiburgo. Organize feiras de carreiras, palestras e visitas guiadas ao campus. Incentive a participação em eventos comunitários, como feiras agroindustriais, para demonstrar o impacto dos cursos em áreas como Agroindústria e Meio Ambiente, aumentando a visibilidade e a captação de leads.</p>
            </div>
            
            <div class="form-image">
                <img src="teste.png" alt="Imagem de Formulário Aleatório"> <!-- Substitua por uma imagem real de formulário, ex.: captura de tela de um form -->
            </div>
            
            <a href="https://forms.gle/Bq1sQadKTA8kGwen8" class="cta-button">FORMULÁRIO</a> <!-- Adiciona classe para estilizar como botão -->
        </div>
        
           
                
    
            </form>
    </div>
    
   
    
    <script>
        // JavaScript para mostrar o formulário ao clicar no botão
        document.querySelector('.cta-button').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('formulario').style.display = 'block';
            document.getElementById('formulario').scrollIntoView({ behavior: 'smooth' });
        });

        // Função para alternar a visibilidade dos textos de estratégia
        function toggleStrategy(id) {
            const element = document.getElementById(id);
            if (element.style.display === 'block') {
                element.style.display = 'none';
            } else {
                element.style.display = 'block';
            }
        }
    </script>
</body>
</html>
