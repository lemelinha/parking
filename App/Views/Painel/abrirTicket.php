<div class="row fixed-bottom" style="padding: 20px; transform: translateY(100vh)">
    <div class="col-sm-12">
        <form method="post">
            <div class="header" style="margin-bottom: 20px">
                Abrir Ticket
                <span class='close'><i class="fa-solid fa-x"></i></span>
            </div>
            <div class="body">
                <input type="text" name="placa" id="placa" placeholder="Placa do veículo" class="form-control" required>
            </div>
            <div class="footer">
                <button class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-success">Abrir</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(window).ready(function () {
        gsap.fromTo($('.row .fixed-bottom'), 
        {
            y: '100vh'
        },
        {
            transform: 'none'
        }
        );
    });
    $('.close').on('click', async function () {
        await gsap.to($('.row .fixed-bottom'), {
            y: '100vh'
        });

        $('.row .fixed-bottom').remove();
        $('#abrirTicket').attr("disabled", false);
    });
</script>