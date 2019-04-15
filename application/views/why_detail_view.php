<div class="post-detail">
    <div class="container cover">
        <div class="mask">
            <img src="<?php echo base_url('assets/upload/why/' . $detail['slug'] . '/' . $detail['image']); ?>" alt="Cover of Post Detail">
        </div>
    </div>

    <div class="container post-content">
        <div class="post-content-header">
            <h4>
                <?php echo $detail['title'] ?>
            </h4>

            <?php echo $detail['description'] ?>
        </div>

        <div class="post-content-body">
            <div class="row">
                <div class="left col-xs-12 col-md-8">
                    <article>
                        <?php echo $detail['body'] ?>
                    </article>

                    <div class="box-cta" style="background-image: url('https://images.unsplash.com/photo-1548587449-2c1dcd68cecd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=947&q=80')">
                        <div class="overlay">
                            <div class="left">
                                <h6>
                                    Hotline <b>024 2120 2888</b>
                                </h6>
                            </div>

                            <div class="right">
                                <a href="<?php echo base_url('') ?>" class="btn btn-primary" role="button" data-toggle="modal" data-target="#modalAdvise">
                                    Đăng ký nhận tư vấn ngay bây giờ!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right col-xs-12 col-md-4">
					<div class="post-related">
						<div class="post-related-header">
							<h6>
								Related Posts
							</h6>
						</div>
						<div class="post-related-body">
                            <?php if ( !empty($related) ): ?>
                                <?php foreach ($related as $key => $value): ?>
                                    <div class="post-item">
                                        <h6 class="subtitle-sm">
                                            
                                        </h6>
                                        <h5 class="text-wrapper">
                                            <a href="<?php echo base_url('tai-sao-chon-vyan/' . $value['slug']) ?>">
                                                <?php echo $value['title'] ?>
                                            </a>
                                        </h5>
                                        <div class="mask">
                                            <a href="<?php echo base_url('tai-sao-chon-vyan/' . $value['slug']) ?>">
                                                <img src="<?php echo base_url('assets/upload/why/' . $value['slug'] . '/' . $value['image']); ?>" alt="<?php echo $value['title'] ?>">
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
