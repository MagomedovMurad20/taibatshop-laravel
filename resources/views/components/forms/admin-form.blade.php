
<div class="ufive-admin">
           <form method="post" enctype="multipart/form-data" id="adminform">
            @csrf
               <section id="feedback">

                   <br />
                   <div class="field">
                       <label for="title">Название товара</label>

                       <input type="text" name="title" min="3" autofocus required" placeholder="Название товара" />
                   </div>
                   <div class="field">
                       <label for="description">Описание товара

                       </label>

                       <input type="text" name="description" min="50" max="500" autofocus required placeholder="Описание товара" />
                   </div>

                   <div class="field">
                       <label for="number">Цена товара</label>

                       <input type="number" name="price" id="price" required /> руб.
                   </div>
                   <br />
                   <div class="field">
                       <label for="img">Фото</label>

                       <input type="file" name="img" id="img" accept=".jpg, .jpeg, .png" required />
                   </div>
                   </p>

                   <div class="field">
                       <label for="category_id">Категория</label>
                       <select name="category_id">
                       </select>
                   </div>
                   <label for="name"></label>

                   <input type="submit" value="Загрузить товар">
               </section>
           </form>
       </div>
       <script>
           document.getElementById("adminform").reset();
       </script>