<footer id="dak-footer">
    <div class="uk-section dak-top-footer uk-background-norepeat uk-background-bottom-right" data-src="imgs/bg_footer.svg" uk-img>
        <div class="uk-container">
            <ul class="uk-hidden@m dak-link-mobile" uk-accordion>
                <?php
                $data = array(
                    array(
                        'title' => 'PRODUCT',
                        'link' => array(
                            'FAQS',
                            'LOAN APPLICATION',
                            'HOW IT WORKS',
                            'DOWNLOAD APP',
                        ),
                    ),
                    array(
                        'title' => 'COMPANY',
                        'link' => array(
                            'ABOUT DAKKO',
                            'CONTACT US',
                            'CAREER',
                        ),
                    ),
                    array(
                        'title' => 'QUICK LINKS',
                        'link' => array(
                            '#DAKKO BLOG',
                            'NEWS',
                        ),
                    ),
                    array(
                        'title' => 'LEGAL',
                        'link' => array(
                            'TERMS OF USE',
                            'PRIVACY POLICY',
                        ),
                    ),
                );
                foreach ($data as $k1 => $v1){ ?>
                <li>
                    <a class="uk-accordion-title" href="#"><h5 class="dak-footer-title uk-margin-remove"><?= $v1['title'] ?></h5></a>
                    <div class="uk-accordion-content">
                        <ul class="uk-list dak-footer-list">
                            <?php foreach ($v1['link'] as $k2 => $v2){ ?>
                                <li><a href="#"><?= $v2 ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <div class="uk-child-width-1-4@m uk-visible@m" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'PRODUCT',
                        'link' => array(
                            'FAQS',
                            'LOAN APPLICATION',
                            'HOW IT WORKS',
                            'DOWNLOAD APP',
                        ),
                    ),
                    array(
                        'title' => 'COMPANY',
                        'link' => array(
                            'ABOUT DAKKO',
                            'CONTACT US',
                            'CAREER',
                        ),
                    ),
                    array(
                        'title' => 'QUICK LINKS',
                        'link' => array(
                            '#DAKKO BLOG',
                            'NEWS',
                        ),
                    ),
                    array(
                        'title' => 'LEGAL',
                        'link' => array(
                            'TERMS OF USE',
                            'PRIVACY POLICY',
                        ),
                    ),
                );
                foreach ($data as $k1 => $v1){ ?>
                    <div>
                        <h5 class="dak-footer-title"><?= $v1['title'] ?></h5>
                        <ul class="uk-list dak-footer-list">
                            <?php foreach ($v1['link'] as $k2 => $v2){ ?>
                                <li><a href="#"><?= $v2 ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-2-5@m">
                    <hr>
                    <h5 class="dak-footer-title uk-text-center uk-margin-medium">FOLLOW US ON</h5>
                    <div class="uk-child-width-auto uk-flex-center" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'icon' => '<span uk-icon="facebook"></span>',
                                'title' => 'Facebook',
                            ),
                            array(
                                'icon' => '<span uk-icon="linkedin"></span>',
                                'title' => 'LinkedIn',
                            ),
                            array(
                                'icon' => '<span uk-icon="instagram"></span>',
                                'title' => 'Instagram',
                            ),
                        );
                        foreach ($data as $k1 => $v1){ ?>
                            <div>
                                <div class="uk-text-center">
                                    <div class="uk-margin-small">
                                        <a href="#"><div class="dak-social-icon"><?= $v1['icon'] ?></div></a>
                                    </div>
                                    <span class="dak-social-txt"><?= $v1['title'] ?></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall dak-bottom-footer">
        <div class="uk-container">
            Copyright @ 2019 by 101DIGITAL
        </div>
    </div>
</footer>
</section>
</body>
</html>