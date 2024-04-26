document.getElementById('chatForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const resp = document.getElementById("resposta");
    const mensagemInput = document.getElementById("txtPergunta");

    const mensagem = mensagemInput.value.toLowerCase();

    resp.innerHTML += `<li id="pergunta">${mensagem} :Você</li>`;

    const saudacoesUsuario = ["oi", "olá","ola", "eae", "opa"];
    const saudacoesBot = ["Olá!", "Oi, como posso ajudar?", "Oi, tudo bem?", "Olá, o que você gostaria de saber?"];

    const perguntasRespostas = {
        "o que é um chatbot?": "Um chatbot é um programa de computador projetado para simular uma conversa humana, fornecendo respostas automáticas com base em regras predefinidas ou aprendizado de máquina.",
        "o que e um chatbot?": "Um chatbot é um programa de computador projetado para simular uma conversa humana, fornecendo respostas automáticas com base em regras predefinidas ou aprendizado de máquina.",
        "como funciona um chatbot?": "Os chatbots podem funcionar de várias maneiras, incluindo regras predefinidas, processamento de linguagem natural (NLP) e aprendizado de máquina. Eles recebem uma mensagem do usuário, processam-na e geram uma resposta com base em suas instruções ou experiências anteriores.",
        "quais são os usos comuns de um chatbot?": "Os chatbots são comumente usados ​​para atendimento ao cliente, suporte técnico, agendamento de compromissos, pedidos de produtos ou serviços, fornecimento de informações, entre outros.",
        "quais sao os usos comuns de um chatbot?": "Os chatbots são comumente usados ​​para atendimento ao cliente, suporte técnico, agendamento de compromissos, pedidos de produtos ou serviços, fornecimento de informações, entre outros.",
        "quais são os tipos de chatbots?": "Existem principalmente dois tipos de chatbots: chatbots baseados em regras e chatbots baseados em inteligência artificial. Os chatbots baseados em regras seguem um conjunto de regras predefinidas para responder às consultas dos usuários, enquanto os chatbots baseados em inteligência artificial usam algoritmos de aprendizado de máquina para melhorar suas respostas com base em interações anteriores.",
        "quais sao os tipos de chatbots?": "Existem principalmente dois tipos de chatbots: chatbots baseados em regras e chatbots baseados em inteligência artificial. Os chatbots baseados em regras seguem um conjunto de regras predefinidas para responder às consultas dos usuários, enquanto os chatbots baseados em inteligência artificial usam algoritmos de aprendizado de máquina para melhorar suas respostas com base em interações anteriores.",
        "como posso criar um chatbot?": "Você pode criar um chatbot usando várias plataformas e ferramentas, incluindo frameworks de desenvolvimento de chatbots, APIs de processamento de linguagem natural (NLP) e serviços de bots. Além disso, muitas plataformas oferecem interfaces de arrastar e soltar para criar chatbots sem a necessidade de codificação.",
        "quais são os desafios ao criar um chatbot?": "Alguns dos desafios ao criar um chatbot incluem garantir uma compreensão precisa da linguagem natural, fornecer respostas relevantes e úteis, lidar com interações complexas dos usuários, manter a segurança e privacidade dos dados e garantir uma experiência de usuário satisfatória.",
        "quais sao os desafios ao criar um chatbot?": "Alguns dos desafios ao criar um chatbot incluem garantir uma compreensão precisa da linguagem natural, fornecer respostas relevantes e úteis, lidar com interações complexas dos usuários, manter a segurança e privacidade dos dados e garantir uma experiência de usuário satisfatória.",
        "você é um chatbot?": "Sim, eu sou um chatbot criado para responder a perguntas sobre chatbots! 😊",
        "voce e um chatbot?": "Sim, eu sou um chatbot criado para responder a perguntas sobre chatbots! 😊",
        "lista de perguntas": "Aqui estão algumas das perguntas que podem ser feitas para min: o que é um chatbot?, como funciona um chatbot?, quais são os usos comuns de um chatbot?",
    };

    let respostaBot = "";
    if (saudacoesUsuario.includes(mensagem)) {
        respostaBot = saudacoesBot[Math.floor(Math.random() * saudacoesBot.length)];
    } else {
        respostaBot = perguntasRespostas[mensagem] || "Desculpe, eu não entendi. Poderia repetir, por favor?";
    }

    console.log(respostaBot);
    resp.innerHTML += `<li id="liResposta">Chat: ${respostaBot}</li>`;

    mensagemInput.value = "";
});
