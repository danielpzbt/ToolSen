    <!-- contact section -->
    <section class="contact_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h3>
                                Contáctanos
                            </h3>
                            <p>
                                Reporta cualquier incidente, irregularidad o felicitación respecto al funcionamiento de la página.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <h3>
                            PQRSF
                        </h3>
                        <br>
                        <form action="<?php echo getUrl("Pqrsf","Pqrsf","postInsert",false,"ajax"); ?>" method="post">
                            <div class="row">
                                <div class="col-md-auto">
                                    <div>
                                        <label>Tipo de PQRSF</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div>
                                        <select name="t_pqrsf_tipo" id="">
                                            <option value="" selected>Selecciona...</option>
                                            <?php
                                            foreach ($tipo_pqrsf as $tpt) {
                                                echo "<option value='".$tpt['pqrsf_tipo_cod']."'>".$tpt['pqrsf_tipo_desc']."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="pqrsf_nombres" placeholder="Nombres" />
                                <input type="text" name="pqrsf_apellidos" placeholder="Apellidos" />
                            </div>
                            <div>
                                <input type="email" name="pqrsf_correo" placeholder="Correo electrónico" />
                            </div>
                            <div>
                                <input type="textarea" name="pqrsf_desc" placeholder="Observación" class="input_message" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn_on-hover">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->