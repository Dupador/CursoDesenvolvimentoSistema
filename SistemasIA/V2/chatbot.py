from flask import Flask, request, render_template
import random

app = Flask(__name__)

# Definindo as saudações
saudacoes_usuario = ["oi", "olá", "eae", "opa", "ola"]
saudacoes_bot = ["Olá!", "Oi, como posso ajudar?", "Oi, tudo bem?", "Olá, o que você gostaria de saber?"]

# Simulando um estoque
estoque = {
    "borracha": 10,
    "caneta": 20,
    "caderno": 15
}

# Perguntas e respostas adicionais
perguntas_respostas = {
    "clima": "Para informações sobre o clima, recomendo verificar um serviço de previsão do tempo.",
    "horario": "Nosso horário de funcionamento é de segunda a sexta, das 9h às 18h.",
    "preco": "Os preços dos produtos podem variar. Você gostaria de saber o preço de algum produto específico?",
    "preço": "Os preços dos produtos podem variar. Você gostaria de saber o preço de algum produto específico?",
    "tudo bem":"Que bom, gostaria de ajuda?",
    "sim":"Em que posso ajudar?",
    "ajuda": "Posso ajudar com informações sobre o estoque, horário de funcionamento ou qualquer outra dúvida que você tenha.",
    "produto1": "O produto 1 está disponível em nosso estoque.",
    "produto2": "O produto 2 está temporariamente esgotado.",
    "produto3": "O produto 3 está em promoção.",
    "estoque": "Para informações sobre o estoque, recomendo entrar em contato com nosso setor de vendas.",
    "promocao": "Temos várias promoções em andamento. Você gostaria de saber mais detalhes?",
    "comprar": "Para realizar uma compra, visite nossa loja online ou vá até uma de nossas filiais.",
    "filial1": "Nossa filial 1 está localizada na Rua A, número 123.",
    "filial2": "Nossa filial 2 está localizada na Avenida B, número 456.",
    "atendimento": "Nosso atendimento ao cliente está disponível de segunda a sexta, das 8h às 20h.",
    "contato": "Para entrar em contato conosco, ligue para o número (XX) XXXX-XXXX ou envie um e-mail para contato@empresa.com.",
    "duvida1": "Qual é a sua dúvida?",
    "duvida2": "Posso esclarecer alguma dúvida para você?",
    "feedback": "Agradecemos pelo seu feedback! Estamos sempre buscando melhorar nossos serviços.",
    "informacoes": "Que tipo de informações você está procurando?",
    "pedido": "Para consultar o status de um pedido, por favor, forneça o número do pedido.",
    "pagamento": "Aceitamos diversas formas de pagamento, incluindo cartão de crédito, débito e boleto bancário.",
    "entrega": "O prazo de entrega varia de acordo com a sua região. Para mais informações, consulte nossa página de entrega.",
    "politica": "Nossa política de devolução garante a satisfação do cliente. Para mais detalhes, consulte nossa página de políticas.",
    "troca": "Aceitamos trocas dentro do prazo de 30 dias após a compra, desde que o produto esteja em perfeitas condições.",
    "devolucao": "Para solicitar uma devolução, entre em contato com nosso serviço de atendimento ao cliente.",
    "cancelamento": "Você pode cancelar um pedido antes do envio. Após o envio, entre em contato conosco para solicitar o cancelamento.",
    "funcionamento": "Nosso horário de funcionamento é de segunda a sexta, das 9h às 18h, e aos sábados das 9h às 13h.",
    "feriados": "Fechamos nos feriados nacionais e regionais.",
    "suporte": "Nosso suporte técnico está disponível para ajudar com qualquer problema que você possa encontrar.",
    "login": "Para acessar sua conta, visite nossa página de login e insira suas credenciais.",
    "registro": "Para se registrar em nosso site, preencha o formulário de registro com suas informações pessoais.",
    "senha": "Se esqueceu sua senha, você pode redefini-la na página de recuperação de senha.",
    "seguranca": "Tomamos medidas rigorosas para garantir a segurança de suas informações pessoais.",
    "parcerias": "Estamos abertos a parcerias com outras empresas. Entre em contato para discutir possibilidades de colaboração.",
    "ofertas": "Não perca nossas ofertas exclusivas! Cadastre-se em nossa newsletter para receber as últimas promoções.",
    "newsletter": "Assine nossa newsletter para receber as últimas novidades e promoções diretamente em sua caixa de entrada.",
    "prazo": "O prazo de validade de nossos produtos varia de acordo com o tipo de produto.",
    "qualidade": "Garantimos a qualidade de nossos produtos. Se não estiver satisfeito, entre em contato conosco para resolvermos.",
    "atraso": "Pedimos desculpas por qualquer atraso. Estamos trabalhando para resolver o problema o mais rápido possível.",
    "informacao1": "Para mais informações, consulte nossa página de perguntas frequentes.",
    "informacao2": "Estamos sempre atualizando nosso site com informações relevantes. Fique de olho nas últimas notícias!",
    "comentario": "Valorizamos seus comentários. Eles nos ajudam a melhorar nossos produtos e serviços.",
    "opiniao": "Gostaríamos de ouvir sua opinião. Envie-nos um e-mail com seus comentários e sugestões.",
    "sugestao": "Temos uma caixa de sugestões disponível em nossa loja. Sinta-se à vontade para deixar suas sugestões lá.",
    "reclamacao": "Lamentamos qualquer inconveniente que você possa ter enfrentado. Por favor, relate sua reclamação para que possamos resolver o problema.",
    "elogio": "Agradecemos pelo seu elogio! Ficamos felizes em saber que estamos atendendo às suas expectativas.",
    "novidade": "Temos várias novidades chegando em breve. Fique ligado em nossas redes sociais para não perder nada!",
    "evento": "Estamos organizando um evento especial em breve. Mais detalhes serão divulgados em breve.",
    "aniversario": "Parabéns pelo seu aniversário! Temos uma surpresa especial esperando por você em nossa loja.",
    "vale-presente": "Precisa de um presente de última hora? Considere comprar um vale-presente em nossa loja.",
    "diagnostico": "Nosso serviço de diagnóstico gratuito pode ajudar a identificar problemas com seus produtos.",
    "tutorial": "Temos uma série de tutoriais em vídeo disponíveis em nosso site para ajudá-lo a aproveitar ao máximo nossos produtos.",
    "compatibilidade": "Nossos produtos"
}

@app.route('/chatbot', methods=['POST'])
def chatbot():
    mensagem = request.form['mensagem'].lower()

    if mensagem in saudacoes_usuario:
        resposta_bot = random.choice(saudacoes_bot)
    elif "estoque" in mensagem:
        item = mensagem.split()[-1]
        if item in estoque:
            resposta_bot = f"No momento, temos {estoque[item]} unidades de {item} em estoque."
        else:
            resposta_bot = f"Desculpe, não temos informações de estoque para {item}."
    else:
        resposta_bot = perguntas_respostas.get(mensagem, "Desculpe, eu não entendi. Poderia repetir, por favor?")

    return resposta_bot

@app.route('/')
def home():
    return render_template('index.html')

if __name__ == "__main__":
    app.run(debug=True)
