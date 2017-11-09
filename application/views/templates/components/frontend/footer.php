<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<footer class="footer">
    <section class="hero aspirasi">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column introduction">
                        <h5 class="wow fadeInDown">Punya aspirasi dalam benak?</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="1.5s">Suarakan aspirasimu demi kemajuan masyarakat! Apapun itu, pasti akan kami dengar dengan seksama.</h2>
                        Gunakan form di samping. Tulis sejelas-jelasnya isi aspirasimu. Jangan hanya simpan mereka di dalam benak.
                    </div>
                    <div class="column">
                        <form class="" action="#" method="post">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" placeholder="Nama Anda">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" placeholder="Email Anda">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="number" class="input" placeholder="Usia Anda">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" placeholder="Judul Aspirasi Anda">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" rows="6" placeholder="Isi Aspirasi"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="submit" class="button is-link is-submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="columns is-centered">
            <div class="column mr5em">
                <figure class="image logo-footer m0 wow bounceInUp">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-footer.png" alt="Logo Footer" width="100">
                </figure>
            </div>
            <div class="column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
            <div class="column old-man">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/old-man-in-suit.png" width="200" alt="Nyat Kadir in Suit" class="wow fadeInRight" data-wow-delay="1.5s">
            </div>
        </div>
    </div>
    <div class="level copyright">
        <div class="level-left">
            <div class="level-item">
                Copyright &copy; Codewell Indonesia 2017
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                Last update: October 17th, 2017
            </div>
        </div>
    </div>
</footer>

<?php echo $plugins; ?>
</body>
</html>
