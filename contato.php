<form id="contact" action="./contato.php" method="POST">
          <h1>Contato</h1>
          <fieldset>
            <input name="nome" placeholder="Seu nome" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="emeil" placeholder="Seu e-mail" type="text" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input name="telefone" placeholder="Seu telefone(opcional)" type="text" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input name="site" placeholder="Seu site(opcional)" type="text" tabindex="3" required>
          </fieldset>
          <fieldset>
            <textarea name="mensagem" placeholder="Digite sua mensagem aqui..." type="text" tabindex="3" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Cadastrar</button>
          </fieldset>
        </form>