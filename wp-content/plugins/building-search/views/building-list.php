<div class="row category-page-row border-top">
  <div class="col large-12">
    <form id="custom-search-form" role="search" method="get" class="wl-search-form" action="<?php echo get_term_link( get_queried_object_id() ); ?>">
      <div class="row">
        <!-- Ô tìm kiếm -->
        <div class="col large-4 small-12">
          <div class="search-input-wrapper">
            <div class="input-with-icon">
              <span class="search-icon">
                <svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24.0002 24.5002L17.6562 18.1562" stroke="#222531" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="square"></path>
                  <path d="M12 20.5C16.4183 20.5 20 16.9183 20 12.5C20 8.08172 16.4183 4.5 12 4.5C7.58172 4.5 4 8.08172 4 12.5C4 16.9183 7.58172 20.5 12 20.5Z" stroke="#222531" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="square"></path>
                </svg>
              </span>
              <input type="search" id="search-field" class="form-control" name="s" placeholder="Tìm theo tên tòa nhà, tên đường..." value="">
            </div>
            <input type="hidden" name="post_type" value="product">
            <input type="hidden" name="product_cat" value="van-phong-ha-noi">
          </div>
        </div>
        <!-- Dropdown Quận -->
        <div class="col large-2 small-12">
          <div class="custom-dropdown-wrapper">
            <div class="dropdown-label">Quận</div>
            <div class="custom-dropdown" id="quan-dropdown">
              <div class="dropdown-display" id="quan-display">
                <span class="selected-count">(0) đã chọn</span>
                <i class="fa fa-chevron-down dropdown-arrow"></i>
              </div>
              <div class="dropdown-menu" id="quan-menu" style="display:none;">
                <!-- Nơi hiện tag đã chọn -->
                <div class="selected-items" id="selected-quan-items"></div>

                <div class="dropdown-options">
                  <?php foreach ($quans as $quan) : ?>
                      <div class="dropdown-option" data-value="<?php echo esc_html($quan->slug); ?>">
                        <input type="checkbox" id="quan_<?php echo esc_html($quan->slug); ?>" value="<?php echo esc_html($quan->slug); ?>">
                        <label for="quan_<?php echo esc_html($quan->slug); ?>"><?php echo esc_html($quan->name); ?></label>
                      </div>
                  <?php endforeach; ?>
                  <input type="hidden" id="current-quan-input" name="filter_quan-ha-noi" value="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Dropdown Giá -->
        <div class="col large-2 small-12">
          <div class="price-dropdown-wrapper">
            <div class="dropdown-label">Giá</div>
            <div class="custom-dropdown" id="price-dropdown">
              <div class="dropdown-display" id="price-display">
                <span class="price-range-text">$0 - $100</span>
                <i class="fa fa-chevron-down dropdown-arrow"></i>
              </div>
              <div class="dropdown-menu price-dropdown-menu" id="price-menu">
                <div class="price-controls">

                  <!-- Thanh slider 2 đầu -->
                  <div class="range-slider">
                    <input type="range" id="range-min" min="0" max="100" value="0" step="0">
                    <input type="range" id="range-max" min="0" max="100" value="100" step="0">
                    <div class="slider-track"></div>
                  </div>

                  <!-- Nhập số thủ công -->
                  <div class="price-inputs-row">
                    <div class="price-input-group">
                      <label>Từ</label>
                      <input type="number" id="price-min-input" class="price-input" min="0" max="100" value="0">
                    </div>
                    <div class="price-input-group">
                      <label>Đến</label>
                      <input type="number" id="price-max-input" class="price-input" min="0" max="100" value="100">
                    </div>
                  </div>

                  <div class="price-buttons">
                    <button type="button" class="btn-price-reset">Đặt lại</button>
                    <button type="button" class="btn-price-apply">Áp dụng</button>
                  </div>
                </div>

                <input type="hidden" id="min_price" name="min_price" value="0">
                <input type="hidden" id="max_price" name="max_price" value="100">
              </div>
            </div>
          </div>
        </div>

        <!-- Dropdown Hạng -->
        <div class="col large-2 small-12">
          <div class="custom-dropdown-wrapper">
            <div class="dropdown-label">Hạng</div>
              <div class="custom-dropdown" id="hang-dropdown">
                <div class="dropdown-display" id="hang-display">
                  <span class="selected-hang">(0) đã chọn</span>
                  <i class="fa fa-chevron-down dropdown-arrow"></i>
                </div>
                <div class="dropdown-menu" id="hang-menu" style="display:none;">
                  <!-- NƠI SẼ HIỆN TAG -->
                  <div class="selected-items" id="selected-hang-items"></div>

                  <div class="dropdown-options">
                    <div class="dropdown-option">
                      <input type="checkbox" id="hang_a" value="hang-a">
                      <label for="hang_a">Hạng A</label>
                    </div>
                    <div class="dropdown-option">
                      <input type="checkbox" id="hang_b" value="hang-b">
                      <label for="hang_b">Hạng B</label>
                    </div>
                    <div class="dropdown-option">
                      <input type="checkbox" id="hang_c" value="hang-c">
                      <label for="hang_c">Hạng C</label>
                    </div>

                    <!-- Hidden để submit -->
                    <input type="hidden" id="current-hang-input" name="filter_hang" value="">
                  </div>
                </div>
              </div>
          </div>
        </div>


        <!-- Nút tìm kiếm -->
        <div class="col large-2 small-12">
          <div class="search-button-wrapper">
            <button type="submit" class="btn btn-search">Tìm kiếm</button>
          </div>
        </div>
      </div>
    </form>
    <div class="shop-container">
      <section class="SectionBuilding">
        <div class="SectionBuildingHeader">
          <h3 class="SectionBuildingTitle">Cho thuê <?php echo $page->name; ?></h3>
          <p>Nhận được ngay báo giá, thông tin chi tiết của hàng ngàn toà nhà văn phòng lớn nhỏ. Với dịch vụ tư vấn của Wonderland, bạn sẽ không lo bỏ lỡ những văn phòng đẹp, phù hợp nhất với mức giá tốt nhất. Ngoài ra, thông tin tư vấn chuyên sâu của chúng tôi sẽ mang lại cho bạn cái nhìn toàn cảnh, chi tiết, công bằng mà không dễ có được sau một vài lần ghé thăm toà nhà hoặc được chia sẻ từ phía bên cho thuê.</p>
        </div>

        <div class="row">
          <div class="col SectionBuildingTagList">
            <?php foreach ($quans as $quan) : ?>
                <a class="SectionBuildingTag" href="<?php echo esc_html($quan->slug); ?>"><?php echo esc_html($quan->name); ?></a> 
            <?php endforeach; ?>
          </div>
        </div>

        <?php foreach($buildingsQuan as $buildingQuan) : ?>
          <?php if (!empty($buildingQuan['buildings'])) : ?>
            <div class="BuildingQuanHeader">
              <h4 class="BuildingQuanTitle">Cho thuê văn phòng quận <?php echo esc_html($buildingQuan['quan']->name); ?></h4>
              <a class="BuildingQuanLink" href="<?php echo esc_html($buildingQuan['quan']->slug); ?>" > Xem thêm</a>
            </div>
            <div class="row list-building">
              <?php foreach ($buildingQuan['buildings'] as $building) : ?>
                  <div class="col large-3 small-12 pb-0">
                      <div class="building-item">
                          <div class="thumb">
                              <a href="<?php echo get_permalink($building->ID); ?>" title="<?php echo get_the_title($building->ID); ?>">
                                  <?php echo get_the_post_thumbnail($building->ID, 'medium', ['class' => 'img-responsive thumb-blog', 'alt' => get_the_title($building->ID)]); ?>
                              </a>
                          </div>
                          <div class="content BuildingItemContent">
                              <h3>
                                  <a class="BuildingItemName" href="<?php echo get_permalink($building->ID); ?>" title="<?php echo get_the_title($building->ID); ?>"><?php echo get_the_title($building->ID); ?></a>
                              </h3>
                              <span class="BuildingItemLocation"><?php echo get_post_meta($building->ID, '_vi_tri', true); ?></span>
                              <div class="meta">
                                  <span class="price"><?php echo get_post_meta($building->ID, '_gia_hien_thi', true); ?></span>
                                  <span class="btn-care quan_tam js-btn-care BuildingItemCare" type="button" data-id="<?php echo $building->ID; ?>">
                                      <span>
                                          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                      </span> 
                                      Quan tâm 
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
            </div> <!-- End list-building -->
          <?php endif; ?>
        <?php endforeach; ?>

        
        <!-- <div class="row">
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/rox-tower-tnr-tower/" title="ROX TOWER (TNR TOWER)">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-rox-tower-dong-da-hanoi-2-360x360.jpg" class="img-responsive thumb-blog lazyloaded" alt="ROX TOWER (TNR TOWER)">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/rox-tower-tnr-tower/" title="ROX TOWER (TNR TOWER)">ROX TOWER (TNR TOWER)</a>
                </h3>
                <span class="BuildingItemLocation">54A Nguyễn Chí Thanh, Phường Láng, (Quận Đống Đa) Hà Nội</span>
                <div class="meta">
                  <span class="price">23-25$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="2004">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/thaisquare-caliria/" title="THAISQUARE CALIRIA">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-thaisquare-caliria-dong-da-hanoi-1-360x360.jpg" class="img-responsive thumb-blog lazyloaded" alt="THAISQUARE CALIRIA">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/thaisquare-caliria/" title="THAISQUARE CALIRIA">THAISQUARE CALIRIA</a>
                </h3>
                <span class="BuildingItemLocation">11A Cát Linh, Phường Ô Chợ Dừa, Đống Đa, Hà Nội</span>
                <div class="meta">
                  <span class="price">25-27$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1994">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/the-marc-88/" title="THE MARC 88">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-themarc88-cau-giay-hanoi-7-360x360.jpg?v=1756217910" class="img-responsive thumb-blog lazyloaded" alt="THE MARC 88">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/the-marc-88/" title="THE MARC 88">THE MARC 88</a>
                </h3>
                <span class="BuildingItemLocation">88 Trần Thái Tông, phường Cầu Giấy, (Quận Cầu Giấy) Hà Nội</span>
                <div class="meta">
                  <span class="price">18-20$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1986">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/leadvisor-tower/" title="LEADVISOR TOWER">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-leadvisor-tower-tu-liem-hanoi-4-360x360.jpg" class="img-responsive thumb-blog lazyloaded" alt="LEADVISOR TOWER">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/leadvisor-tower/" title="LEADVISOR TOWER">LEADVISOR TOWER</a>
                </h3>
                <span class="BuildingItemLocation">643 Phạm Văn Đồng, Phường Nghĩa Đô, (Quận Bắc Từ Liêm) Hà Nội</span>
                <div class="meta">
                  <span class="price">16-18$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1952">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/keangnam-hanoi-landmark-tower/" title="KEANGNAM HANOI LANDMARK TOWER">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-keangnam-my-dinh-hanoi-2-1-360x360.png" class="img-responsive thumb-blog lazyloaded" alt="KEANGNAM HANOI LANDMARK TOWER">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/keangnam-hanoi-landmark-tower/" title="KEANGNAM HANOI LANDMARK TOWER">KEANGNAM HANOI LANDMARK TOWER</a>
                </h3>
                <span class="BuildingItemLocation">Phạm Hùng, Từ Liêm, Hà Nội</span>
                <div class="meta">
                  <span class="price">20-25$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1938">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/gelex-tower/" title="GELEX TOWER">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-gelex-tower-hai-ba-trung-hanoi-1-360x360.jpg?v=1754585003" class="img-responsive thumb-blog lazyloaded" alt="GELEX TOWER">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/gelex-tower/" title="GELEX TOWER">GELEX TOWER</a>
                </h3>
                <span class="BuildingItemLocation">52 Lê Đại Hành, Hai Bà Trưng, Hà Nội</span>
                <div class="meta">
                  <span class="price">30-35$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1827">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/brg-diamond-park-plaza/" title="BRG DIAMOND PARK PLAZA">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-brg-diamond-park-plaza-lang-ha-dong-da-hanoi-5-1-360x360.jpg?v=1755512551" class="img-responsive thumb-blog lazyloaded" alt="BRG DIAMOND PARK PLAZA">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/brg-diamond-park-plaza/" title="BRG DIAMOND PARK PLAZA">BRG DIAMOND PARK PLAZA</a>
                </h3>
                <span class="BuildingItemLocation">16 Láng Hạ, Đống Đa, Hà Nội</span>
                <div class="meta">
                  <span class="price">30-35$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1817">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/capital-place/" title="CAPITAL PLACE">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-capital-place-ba-dinh-hanoi-6-1-360x360.jpg?v=1755513132" class="img-responsive thumb-blog lazyloaded" alt="CAPITAL PLACE">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/capital-place/" title="CAPITAL PLACE">CAPITAL PLACE</a>
                </h3>
                <span class="BuildingItemLocation">29 Liễu Giai, Ba Đình, Hà Nội</span>
                <div class="meta">
                  <span class="price">30-35$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1807">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col large-3 small-12 pb-0">
            <div class="building-item">
              <div class="thumb">
                <a href="https://oneoffice.vn/van-phong-ha-noi/grand-terra/" title="GRAND TERRA">
                  <img src="https://oneoffice.vn/wp-content/uploads/2025/08/toa-nha-grand-terra-dong-da-hanoi-2-1-360x360.jpg?v=1755574512" class="img-responsive thumb-blog lazyloaded" alt="GRAND TERRA">
                </a>
              </div>
              <div class="content">
                <h3>
                  <a class="BuildingItemName" href="https://oneoffice.vn/van-phong-ha-noi/grand-terra/" title="GRAND TERRA">GRAND TERRA</a>
                </h3>
                <span class="BuildingItemLocation">289 Cát Linh, Đống Đa, Hà Nội</span>
                <div class="meta">
                  <span class="price">30-35$</span>
                  <span class="btn-care quan_tam js-btn-care" type="button" data-id="1769">
                    <span>
                      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                      <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </span> Quan tâm </span>
                </div>
              </div>
            </div>
          </div>
        </div>  -->
        <!-- End list-building -->
        
        <!-- <div class="row">
          <div class="col large-12 small-12">
            <span>Hiện chưa có sản phẩn trong danh mục này!</span>
          </div>
        </div> -->
      </section>
    </div>
    <!-- shop container -->
  </div>
</div>