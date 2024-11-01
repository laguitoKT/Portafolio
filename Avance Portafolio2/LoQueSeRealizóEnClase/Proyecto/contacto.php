<?php include "includes/header.php"?>
    <section>
        <h2>Contactanos</h2>
        <!-- imegen -->
    </section>

    <section>
        <h2> Llena el Formulario de Contacto</h2>
        <form action="">
            <fieldset>
                <legend>Información Personal</legend>
                <div>
                    <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Escribe Tu Nombre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="tu@email.com">
                </div>
                <div>
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" placeholder="555-5555-555">
                </div>
                <div>
                    <label for="msg">Mensaje</label>
                    <textarea name="msg" id="msg" placeholder="Escribe un Mensaje"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Información Sobre la Propiedad</legend>
                <div>
                    <label for="vencom">Vende o Compra</label>
                    <input type="select" name="vencom" id="vencom">
                </div>
                <div>
                    <label for="quantity">Cantidad</label>
                    <input type="number" name="quantity" id="quantity">
                </div>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <div>
                    <label for="tel">Telefono</label>
                    <input type="radio" name="tel" id="tel">
                    <label for="e-mail">Email</label>
                    <input type="radio" name="e-mail" id="e-mail">
                </div>
                <div>
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date">
                    <label for="hour">Hora</label>
                    <input type="time" name="hour" id="hour">
                </div>
            </fieldset>
            <div>
                <button>Contactar</button>
            </div>
        </form>
    </section>
    <?php include "includes/footer.php"?>