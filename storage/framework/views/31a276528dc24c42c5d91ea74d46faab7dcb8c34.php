<div>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Añadir nueva opinión
        </button>
    </div>

    <!-- Modal añadir opinión -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #212121; color:#F6F6F6;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir nueva opinión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #F6F6F6">
                    <form id="opinionForm" action="<?php echo e(route('new-opinion')); ?>" method="POST">
                        <div class="mb-3">
                            <label for="content" class="form-label fw-bold">Opinión</label>
                            <textarea class="form-control" id="content" name="opinion" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <p class="fw-bold mb-1">Valoración</p>
                            <ul class="d-flex list-unstyled pt" id="stars">
                                <li class="me-2">
                                    <label for="rating1"><i class="fa-regular fa-star"></i></label>
                                    <input type="radio" id="rating1" name="ratings" value="1">
                                </li>
                                <li class="mx-2">
                                    <label for="rating2"><i class="fa-regular fa-star"></i></label>
                                    <input type="radio" id="rating2" name="ratings" value="2">
                                </li>
                                <li class="mx-2">
                                    <label for="rating3"><i class="fa-regular fa-star"></i></label>
                                    <input type="radio" id="rating3" name="ratings" value="3">
                                </li>
                                <li class="mx-2">
                                    <label for="rating4"><i class="fa-regular fa-star"></i></label>
                                    <input type="radio" id="rating4" name="ratings" value="4">
                                </li>
                                <li class="ms-2">
                                    <label for="rating5"><i class="fa-regular fa-star"></i></label>
                                    <input type="radio" id="rating5" name="ratings" value="5">
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('livewire:load', function () {
        $('li').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();

            var clickedIndex = $(this).index();
            var stars = $('#stars li');

            stars.removeClass('active');
            stars.removeClass('secondary-active');
            stars.each(function (index) {
                var star = $(this);
                var starIcon = star.find('i');

                if (index <= clickedIndex) {
                    star.addClass('active');
                    starIcon.removeClass('fa-regular').addClass('fa-solid');
                } else {
                    starIcon.removeClass('fa-solid').addClass('fa-regular');
                }
            });
        });
    });
</script>
<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/livewire/add-opinion.blade.php ENDPATH**/ ?>