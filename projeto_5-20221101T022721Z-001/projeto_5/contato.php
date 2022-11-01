<?php 
include("inc/header.php");
?>
    <section class="w-100 bg-content">
        <div class="center container">
            <article class="w-100 p-top-120 p-bottom-120 relative content p-top-1024-50 p-bottom-1024-50">
                <h1 class="w-100 t-align-c f-size-50 t-align-c title">
                    Contato
                </h1>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-60 p-bottom-60 p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-90 m-left-5 d_flex justify-space box-info-contact w-1024-100 direction-1024-column">
                <section class="d_flex direction-column self-center">
                    <div class="d_flex">
                        <figure class="d_flex direction-column">
                            <img class="self-center" src="assets/img/phone-2.png" title="" alt="" />
                        </figure>
                        <p>
                            (51) 3589 2229
                        </p>
                    </div>
                    <div class="d_flex">
                        <figure class="d_flex direction-column">
                            <img class="self-center" src="assets/img/address.png" title="" alt="" />
                        </figure>
                        <p>
                            Avenida São Borja, 1527<br />
                            Jardim America, São Leopoldo
                        </p>
                    </div>
                    <div class="d_flex">
                        <figure class="d_flex direction-column">
                            <img class="self-center" src="assets/img/email.png" title="" alt="" />
                        </figure>
                        <p>
                            <a title="" href="">
                                santanna@mbsk.com.br
                            </a>
                        </p>
                    </div>
                </section>
                <aside class="flex-1 w-1024-100 m-top-1024-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427843!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1575124910559!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </aside>
            </article>
            <article class="w-80 m-top-80 m-left-10 box-form w-1024-100 m-top-1024-30">
                <h2 class="w-100 title t-align-1024-c">
                    Solicite seu orçamento
                </h2>
                <div role="form" class="wpcf7" id="wpcf7-f5-p57-o1" lang="pt-BR" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="" method="post" class="wpcf7-form" novalidate="novalidate" id="fContact">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="5">
                            <input type="hidden" name="_wpcf7_version" value="5.1.4">
                            <input type="hidden" name="_wpcf7_locale" value="pt_BR">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p57-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="57">
                        </div>
                        <p>
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nome">
                            </span>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail">
                            </span>
                            <span class="wpcf7-form-control-wrap your-fone">
                                <input type="text" name="your-fone" value="" size="40" class="wpcf7-form-control wpcf7-text masked-phone" aria-invalid="false" placeholder="Telefone" maxlength="15" autocomplete="off">
                            </span>
                            <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Mensagem"></textarea>
                            </span>
                            <input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit">
                            <span class="ajax-loader"></span>
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </article>
        </div>
    </section>
<?php 
include("inc/footer.php");
?>