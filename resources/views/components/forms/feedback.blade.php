
<div class="ufive-feedback-hide" id="ufive-feedback">
    <section id="feedback">
        <a href="#navbar" id="feedback-close" class="feedback-close" onclick="feedBackClose();">ЗАКРЫТЬ</a>
        <h1>Форма заказа</h1>
        <form method=" POST">

            <div class="field name-box">
                <input type="text" name="name" id="name" placeholder="Татьяна" maxlength="35" />
                <label for="name">Имя</label>
            </div>

            <div class="field phone-box">
                <input type="text" name="phone" id="phone" placeholder="+79887778899" required />
                <label for="phone">Телефон</label>
            </div>

            <div class="field msg-box">
                <textarea type="text" name="message" id="message" rows="4" maxlength="350" placeholder="Скопируйте ссылку на товар, напишите ваши дополнительные пожелания" required /></textarea>
                <label for="msg">Текст</label>
            </div>

            <input class="button" type="submit" value="Отправить" />

        </form>
    </section>
</div>
