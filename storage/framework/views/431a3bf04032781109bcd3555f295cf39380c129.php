<?php $__env->startSection('page-title'); ?>
Checkout |
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <main>
        <div class="container">
            <div class="row vh-100">
                <div class="col d-flex align-items-center justify-content-center">
                    <div id="form" class="w-md-50 p-md-4 p-2 pt-4">
                        <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
                        <?php endif; ?>

                        <?php if(Session::has('success')): ?>
                        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                        <?php endif; ?>
                        <h1 class="ubuntu-font text-center mb-4 display-5">Checkout</h1>
                        <div>
                            <form action="<?php echo e(route('paymentStripe')); ?>" method="post" id="payment-form" role="form"
                                class="mx-3">
                                <?php echo csrf_field(); ?>
                                <p class="text-left text-lg ubuntu-font mb-3">Datos Personales</p>
                                <div class="form-group d-flex">
                                    <div class="form-control-wrapper me-1">
                                        <input type="text" class="form-control" name="nombre" id="nombre" autocomplete="on"
                                            required aria-label="Nombre completo" placeholder="">
                                        <label for="nombre">Nombre*</label>
                                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-1">
                                    </div>
                                    <div class="form-control-wrapper">
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" required
                                            aria-label="Apellidos" autocomplete="on" placeholder="">
                                        <label for="apellidos">Apellidos*</label>
                                        <?php $__errorArgs = ['apellidos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <p class="text-left text-lg ubuntu-font mb-4">Datos de Envio</p>
                                <div class="form-group">
                                    <div class="form-control-wrapper">
                                        <input type="text" class="form-control" name="direccion" id="address"
                                            placeholder="" autocomplete="on" required
                                            aria-label="Dirección de envio del pedido">
                                        <label for="address">Direccion de envio*</label>
                                        <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group d-flex">
                                    <div class="form-control-wrapper w-50 me-1">
                                        <label class="visually-hidden" for="provincia">Provincia</label>
                                        <select class="form-select" name="provincia"
                                            aria-label="Eliga la provincia de su dirección" id="provincia" required>
                                            <option value="" selected disabled>-- Elige una provincia --</option>
                                            <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($provincia); ?>"><?php echo e($provincia); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['provincia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="w-1">
                                    </div>
                                    <div class="form-control-wrapper w-50">
                                        <input type="text" class="form-control" name="postal" id="postal"
                                            autocomplete="on" required aria-label="Indique su código postal"
                                            placeholder="" maxlength="5">
                                        <label for="postal">Código Postal*</label>
                                        <?php $__errorArgs = ['postal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*<?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <div class="form-control-wrapper">
                                        <p class="text-center text-lg ubuntu-font m-0">Forma de Pago</p>
                                        <div class="btn-group" role="group" aria-label="Metodos de pago de compra">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                autocomplete="off">
                                            <label class="btn btn-lg btn-outline-dark d-flex align-items-center" for="btnradio1"><img
                                                    src="<?php echo e(Storage::url('paypal-icon.png')); ?>" alt="Icono de Paypal"
                                                    width="30px" class="img img-fluid me-1 btn-img"> Paypal</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off">
                                            <label class="btn btn-lg btn-outline-dark d-flex align-items-center"
                                                for="btnradio2">Tarjeta <img
                                                    src="<?php echo e(Storage::url('tarjeta-de-credito.png')); ?>"
                                                    class="h-75 img img-fluid ms-2 btn-img" alt="Icono de Tarjeta de Pago"
                                                    width="30px"></label>
                                        </div>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['card_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class=" mt-5 text-danger d-flex justify-content-center">*Datos de tarjeta
                                    incorrectos</div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="form-group mt-5" id="tarjeta-formulario">
                                    <div class="card credit-card p-4">
                                        <div class="card-body p-0">
                                            <div class="row">
                                                <div class="col-12 text-end">
                                                    <p class="fst-italic ubuntu-font">Débito</p>
                                                </div>
                                                <div class="col-12 my-2">
                                                    <label for="nomTitular" class="visually-hidden">Nombre del
                                                        titular</label>
                                                    <input class="card-number w-100" placeholder="Nombre del titular"
                                                        id="nomTitular" name="nomTitular" required>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <label for="card_num" class="visually-hidden">Número de
                                                        tarjeta</label>
                                                    <input class="card-title w-100" placeholder="Número de tarjeta"
                                                        name="card_no" id="card_num" required>
                                                </div>
                                                <div>
                                                    <p class="ubuntu-font">Fecha de expiración</p>
                                                </div>
                                                <div class="col-10 mb-2 d-flex">
                                                    <label class="visually-hidden" for="expiraMes">Mes de
                                                        Expiración</label>
                                                    <input class="card-title me-3 w-50" placeholder="MM"
                                                        name="ccExpiryMonth" id="expiraMes">
                                                    <label class="visually-hidden" for="expiraAnio">Año de
                                                        Expiración</label>
                                                    <input class="card-title me-3 w-50" placeholder="YY"
                                                        name="ccExpiryYear" id="expiraAnio" required>
                                                    <label class="visually-hidden" for="cvv">CCV de la
                                                        tarjeta</label>
                                                    <input class="card-title w-50" placeholder="CVV" name="cvvNumber"
                                                        id="cvv" required>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $__errorArgs = ['card_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">*Datos de tarjeta incorrectos</div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-success rounded-pill"
                                            id="pay-button">Proceder al Pago <i
                                                class="ml-2 fa-regular fa-credit-card"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group mt-5 d-flex justify-content-center">
                                <form action="<?php echo e(route('requestpayment')); ?>" method="POST" id="pagar-paypal">
                                    <?php echo csrf_field(); ?>
                                    <input aria-label="Nombre completo" type="text" class="form-control visually-hidden"
                                        name="nombre" id="nombre-paypal">
                                    <input aria-label="Apellidos" type="text" class="form-control visually-hidden"
                                        name="apellidos" id="apellidos-paypal">
                                    <input type="text" class="form-control visually-hidden" name="direccion"
                                        id="address-paypal" aria-label="Dirección de envio del pedido">
                                    <select class="form-select visually-hidden" name="provincia"
                                        aria-label="Eliga la provincia de su dirección" id="provincia-paypal">
                                        <option disabled selected>-- Elige una provincia --</option>
                                        <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($provincia); ?>"><?php echo e($provincia); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <input type="text" class="form-control visually-hidden" name="postal"
                                        id="postal-paypal" aria-label="Indique su código postal">

                                    <button class=" btn rounded-pill d-flex align-items-center px-3 py-2" type="submit"
                                        id="paypal-button">
                                        <i class="fa-brands fa-paypal me-2"></i> Pagar con Paypal</button>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
    <script>
        // Seleccionamos los elementos de radio
        const paypalRadio = document.getElementById('btnradio1');
        const tarjetaRadio = document.getElementById('btnradio2');

        // Seleccionamos el formulario de pago de la tarjeta de crédito y de Paypal
        const tarjetaFormulario = document.getElementById('tarjeta-formulario');
        const paypalPay = document.getElementById('pagar-paypal');

        // Ocultamos el formulario de pago con tarjeta de crédito y Paypal al inicio
        tarjetaFormulario.style.display = 'none';
        paypalPay.style.display = 'none';

        // Agrega un controlador de eventos para el cambio en los botones de radio
        paypalRadio.addEventListener('change', () => {
            if (paypalRadio.checked) {
                tarjetaFormulario.style.display = 'none';
                paypalPay.style.display = 'block';
            } else {
                tarjetaFormulario.style.display = 'block';
                paypalPay.style.display = 'none';
            }
        });

        tarjetaRadio.addEventListener('change', () => {
            if (tarjetaRadio.checked) {
                tarjetaFormulario.style.display = 'block';
                paypalPay.style.display = 'none';
            } else {
                tarjetaFormulario.style.display = 'none';
                paypalPay.style.display = 'block';
            }
        });

        //------------------------------------------------------------------------------

        //Seleccinamos todos lo campos del primer y segundo formulario
        const nombre = document.getElementById('nombre');
        const nombrePaypal = document.getElementById('nombre-paypal');
        const apellidos = document.getElementById('apellidos');
        const apellidosPaypal = document.getElementById('apellidos-paypal');
        const address = document.getElementById('address');
        const addressPaypal = document.getElementById('address-paypal');
        const provincia = document.getElementById('provincia');
        const provinciaPaypal = document.getElementById('provincia-paypal');
        const postal = document.getElementById('postal');
        const postalPaypal = document.getElementById('postal-paypal');

        nombre.addEventListener('input', () => {
            nombrePaypal.value = nombre.value;
        });

        apellidos.addEventListener('input', () => {
            apellidosPaypal.value = apellidos.value;
        });

        address.addEventListener('input', () => {
            addressPaypal.value = address.value;
        });

        provincia.addEventListener('input', () => {
            provinciaPaypal.value = provincia.value;
        })

        postal.addEventListener('input', () => {

            postalPaypal.value = postal.value;
        });
    </script>

    <style>
        body {
            background: linear-gradient(-45deg, #212121, #6D9886, #D9CAB3, #F6F6F6);
            background-size: 400% 400%;
            animation: change 10s ease-in-out infinite;
            font-family: 'Roboto', sans-serif;
        }

        .ubuntu-font {
            font-family: 'Ubuntu', sans-serif;
        }

        @keyframes change {
            0% {
                background-position: 0 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0 50%;
            }
        }

        #form {
            background: rgba(246, 246, 246, 0.41);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid #212121;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control-wrapper {
            position: relative;
            padding-top: 10px;
        }

        .form-control-wrapper input.form-control,
        .form-control-wrapper select.form-select {
            height: 50px;
            padding: 10px 20px;
            font-size: 16px;
            line-height: 28px;
            background-color: transparent;
            border: 1px solid #212121;
        }

        .form-control-wrapper input.form-control:focus {
            border-bottom: 2px solid #cc7e0a;
            box-shadow: none;
        }

        .form-control-wrapper label {
            position: absolute;
            top: 22px;
            left: 8px;
            font-size: 17px;
            transition: all 0.2s ease-out;
        }

        .form-control-wrapper input.form-control:focus+label,
        .form-control-wrapper input.form-control:not(:placeholder-shown)+label {
            top: -15px;
            font-size: 16px;
            color: #0086c4;
        }

        .credit-card {
            border: 1px solid #212121;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            background-color: #f8f9fa;
        }

        .credit-card input {
            background-color: transparent;
            border: 1px solid #212121;
            border-radius: 5px;
            padding: 5px;
        }

        .credit-card input:focus {
            border: 1px solid #cc7e0a;
        }

        .credit-card img {
            max-width: 100%;
        }

        #paypal-button {
            background-color: #1e477a;
            color: #F6F6F6
        }

        #paypal-button:hover {
            background-color: #3b6bae;
            border-color: #F6F6F6;
            color: #F6F6F6
        }

        #pay-button {
            background-color: #212121;
            color: #F6F6F6;
            border: 2px solid #F6F6F6;
        }

        #pay-button:hover {
            background-color: transparent;
            color: #212121;
        }

        @media(max-width:576px) {
            .form-control-wrapper label {
                position: absolute;
                top: 17px;
                left: 5.5px;
                font-size: 12px;
                transition: all 0.2s ease-out;
            }

            .form-control-wrapper input.form-control:focus+label,
            .form-control-wrapper input.form-control:not(:placeholder-shown)+label {
                top: -10px;
                font-size: 12px;
                color: #0086c4;
            }

            .form-control-wrapper input.form-control,
            .form-control-wrapper select.form-select {
                height: 35px;
                padding: 5px;
                font-size: 12px;
                line-height: 0px;
            }

            .btn-img{
                width: 22px;
            }

            #tarjeta-formulario, #pay-button, #paypal-button{
                font-size: 12px;
            }


        }
    </style>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/checkout/pago.blade.php ENDPATH**/ ?>