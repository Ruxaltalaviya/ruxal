@extends('layout.master')

@section('content')
    <div class="content-wrapper" style="margin-top:9%;margin-left:0%;display: flex;
            gap: 42px;">
        <div id="primary" class="content-area" style="width: 96%">
            <main id="content" class="clearfix"> <svg class="svg--spinner filter-pagination-spinner"
                    xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                    <path
                        d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z">
                    </path>
                </svg>
                <div id="post-grid-container" class="items-grid-container grid-loaded" >
                    <div id="blog-index" data-post-type="post"
                    style="grid-template-columns: repeat(2, 1fr); gap: 20px;width: 147%;"

                        data-params="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:-1,&quot;grid_padding&quot;:&quot;yes&quot;,&quot;item_animation&quot;:&quot;none&quot;,&quot;columns&quot;:&quot;default&quot;,&quot;overlay_color&quot;:&quot;black&quot;,&quot;overlay_text_color&quot;:&quot;white&quot;,&quot;overlay_opacity&quot;:44,&quot;caption_text_alignment&quot;:&quot;center&quot;,&quot;caption_v_align&quot;:&quot;middle&quot;,&quot;post_index&quot;:true,&quot;post_display&quot;:&quot;grid&quot;,&quot;post_metro_pattern&quot;:&quot;auto&quot;,&quot;post_module&quot;:&quot;grid&quot;,&quot;post_thumbnail_size&quot;:&quot;standard&quot;,&quot;post_layout&quot;:&quot;standard&quot;,&quot;post_excerpt_type&quot;:&quot;manual&quot;,&quot;post_excerpt_length&quot;:&quot;shorten&quot;,&quot;post_display_elements&quot;:&quot;show_thumbnail,show_date,show_text,show_category&quot;,&quot;pagination&quot;:&quot;load_more&quot;,&quot;page_display&quot;:&quot;grid&quot;,&quot;work_display&quot;:&quot;grid&quot;,&quot;work_module&quot;:&quot;grid&quot;,&quot;work_thumbnail_size&quot;:&quot;standard&quot;,&quot;work_layout&quot;:&quot;overlay&quot;,&quot;work_category_filter&quot;:true,&quot;work_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;work_hover_effect&quot;:&quot;default&quot;,&quot;product_display&quot;:&quot;grid&quot;,&quot;product_metro_pattern&quot;:&quot;pattern-1&quot;,&quot;product_module&quot;:&quot;grid&quot;,&quot;release_display&quot;:&quot;grid&quot;,&quot;release_metro_pattern&quot;:&quot;pattern-1&quot;,&quot;release_hover_effect&quot;:&quot;default&quot;,&quot;release_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;release_module&quot;:&quot;grid&quot;,&quot;release_thumbnail_size&quot;:&quot;square&quot;,&quot;release_layout&quot;:&quot;standard&quot;,&quot;event_display&quot;:&quot;list&quot;,&quot;event_module&quot;:&quot;grid&quot;,&quot;event_thumbnail_size&quot;:&quot;standard&quot;,&quot;event_location&quot;:&quot;location&quot;,&quot;timeline&quot;:&quot;future&quot;,&quot;mp_event_display&quot;:&quot;grid&quot;,&quot;mp_event_module&quot;:&quot;grid&quot;,&quot;video_display&quot;:&quot;grid&quot;,&quot;video_layout&quot;:&quot;overlay&quot;,&quot;video_module&quot;:&quot;grid&quot;,&quot;video_onclick&quot;:&quot;lightbox&quot;,&quot;video_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;artist_display&quot;:&quot;grid&quot;,&quot;artist_metro_pattern&quot;:&quot;auto&quot;,&quot;artist_hover_effect&quot;:&quot;default&quot;,&quot;artist_module&quot;:&quot;grid&quot;,&quot;artist_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;artist_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_display&quot;:&quot;grid&quot;,&quot;gallery_module&quot;:&quot;grid&quot;,&quot;gallery_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_custom_thumbnail_size&quot;:&quot;standard&quot;,&quot;gallery_layout&quot;:&quot;standard&quot;,&quot;gallery_category_filter&quot;:true,&quot;gallery_category_filter_text_alignment&quot;:&quot;center&quot;,&quot;gallery_hover_effect&quot;:&quot;default&quot;,&quot;attachment_display&quot;:&quot;masonry_horizontal&quot;,&quot;attachment_thumbnail_size&quot;:&quot;standard&quot;,&quot;attachment_custom_thumbnail_size&quot;:&quot;standard&quot;,&quot;job_display&quot;:&quot;list&quot;,&quot;context&quot;:&quot;archive&quot;,&quot;el_id&quot;:&quot;blog-index&quot;}"
                        class="post-grid-columns post-grid-columns-3 display-flex clearfix items wvc-element wolf-core-element entry-grid-loading post-items posts caption-text-align-center caption-valign-middle grid-padding-yes display-grid post-display-grid module-grid post-module-grid items-thumbnail-size-standard layout-standard post-layout-standard pagination-load_more grid no-filtered-content"
                        data-scroll data-scroll-css-progress>
                        <article id="post-5826"
                            class="post-5826 post type-post status-publish format-video has-post-thumbnail hentry category-practical category-videos post_format-post-format-video entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark metro-portrait is-youtube has-video entry-post entry-post-grid"
                            data-post-id="5826" data-thumbnail-color-tone="dark"> <a
                                href="2024/10/28/behind-the-scenes-a-week-in-the-life-of-soundkraft/index.html"
                                target="_parent" class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#857661">
                                            <div class="img-bg" style="background-color:#857661;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-226x300.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-226x300.jpg 226w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-771x1024.jpg 771w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-768x1019.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1157x1536.jpg 1157w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1543x2048.jpg 1543w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-377x500.jpg 377w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-550x730.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-500x664.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-301x400.jpg 301w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-940x1248.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1200x1593.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room.jpg 1808w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1808px) 100vw, 1808px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media">
                                            <div class="entry-custom-media-video">
                                                <div class=' video-bg-container'><img loading="lazy" width="771"
                                                        height="1024"
                                                        src="../app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-771x1024.jpg"
                                                        class="cover video-bg-fallback resized-thumbnail attachment-large"
                                                        alt=""
                                                        srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-771x1024.jpg 771w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-226x300.jpg 226w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-768x1019.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1157x1536.jpg 1157w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1543x2048.jpg 1543w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-377x500.jpg 377w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-550x730.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-500x664.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-301x400.jpg 301w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-940x1248.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-1200x1593.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room.jpg 1808w"
                                                        sizes="(max-width: 771px) 100vw, 771px" /><video class="video-bg"
                                                        id="video-bg-68b88161b33dc" preload="auto" autoplay loop="loop"
                                                        muted>
                                                        <source
                                                            src="https://preview.wolfthemes.store/app/uploads/sites/55/2024/09/523892979-4es8tm52-6zfbdhne_wRTUylmS.mp4"
                                                            type="video/mp4">
                                                    </video>
                                                    <div class="video-bg-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Practical <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-10-28T13:52:27+00:00">October
                                                        28, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:06:14+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/10/28/behind-the-scenes-a-week-in-the-life-of-soundkraft/index.html">Behind
                                                    the Scenes: A Week in the Life of
                                                    SoundKraft</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/10/28/behind-the-scenes-a-week-in-the-life-of-soundkraft/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-5825"
                            class="post-5825 post type-post status-publish format-video has-post-thumbnail hentry category-practical category-videos post_format-post-format-video entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark is-youtube has-video entry-post entry-post-grid"
                            data-post-id="5825" data-thumbnail-color-tone="dark"> <a
                                href="2024/10/28/studio-diary-how-we-recorded-our-latest-track/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#503726">
                                            <div class="img-bg" style="background-color:#503726;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media">
                                            <div class="entry-custom-media-video">
                                                <div class=' video-bg-container'><img loading="lazy" width="1024"
                                                        height="683"
                                                        src="../app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1024x683.jpg"
                                                        class="cover video-bg-fallback resized-thumbnail attachment-large"
                                                        alt=""
                                                        srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance.jpg 1950w"
                                                        sizes="(max-width: 1024px) 100vw, 1024px" /><video class="video-bg"
                                                        id="video-bg-68b881622b890" preload="auto" autoplay loop="loop"
                                                        muted>
                                                        <source
                                                            src="https://preview.wolfthemes.store/app/uploads/sites/55/2024/10/45987024_1.mp4"
                                                            type="video/mp4">
                                                    </video>
                                                    <div class="video-bg-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Practical <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-10-28T13:52:10+00:00">October
                                                        28, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:12+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/10/28/studio-diary-how-we-recorded-our-latest-track/index.html">Studio
                                                    Diary: How We Recorded Our Latest Track</a>
                                            </h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/10/28/studio-diary-how-we-recorded-our-latest-track/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-4015"
                            class="post-4015 post type-post status-publish format-standard has-post-thumbnail hentry category-photos tag-photos entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark entry-post entry-post-grid"
                            data-post-id="4015" data-thumbnail-color-tone="dark"> <a
                                href="2024/10/15/memorable-moments-from-sk-live-shows/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#6F6D62">
                                            <div class="img-bg" style="background-color:#6F6D62;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Photos <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-10-15T10:46:14+00:00">October
                                                        15, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:10+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/10/15/memorable-moments-from-sk-live-shows/index.html">Memorable
                                                    Moments from SK’s Live Shows</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/10/15/memorable-moments-from-sk-live-shows/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-2277"
                            class="post-2277 post type-post status-publish format-audio has-post-thumbnail hentry category-uncategorized tag-audio post_format-post-format-audio entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark metro-portrait has-audio-player entry-post entry-post-grid"
                            data-post-id="2277" data-thumbnail-color-tone="dark"> <a
                                href="2024/09/22/connects-through-music/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#212F35">
                                            <div class="img-bg" style="background-color:#212F35;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-200x300.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-200x300.jpg 200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-683x1024.jpg 683w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-768x1152.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-1024x1536.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-1365x2048.jpg 1365w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-333x500.jpg 333w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-550x825.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-500x750.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-267x400.jpg 267w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-940x1410.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance-1200x1800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Punk-Rock-Musician-Live-Performance.jpg 1600w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1600px) 100vw, 1600px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Uncategorized
                                                <span class="entry-meta-separator"> &bull;
                                                </span> <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-09-22T09:36:03+00:00">September
                                                        22, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:09+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/09/22/connects-through-music/index.html">Connects
                                                    Through Music</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/09/22/connects-through-music/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-2274"
                            class="post-2274 post type-post status-publish format-gallery has-post-thumbnail hentry category-news post_format-post-format-gallery entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark entry-post entry-post-grid"
                            data-post-id="2274" data-thumbnail-color-tone="dark"> <a
                                href="2024/09/22/tour-recap-our-favorite-moments-from-the-road/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#745647">
                                            <div class="img-bg" style="background-color:#745647;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-300x300.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-300x300.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-1024x1024.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-150x150.jpg 150w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-768x768.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-1536x1536.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-500x500.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-550x550.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-400x400.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-1920x1920.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-640x640.jpg 640w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-940x940.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-100x100.jpg 100w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-290x290.jpg 290w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-960x960.jpg 960w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene-1200x1200.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Ethereal-Party-Scene.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media">
                                            <div class="entry-custom-media-slider">
                                                <div data-slideshow-speed="2000" class="slideshow-background flexslider">
                                                    <ul class="slides">
                                                        <li class="slide"></li>
                                                        <li class="slide"></li>
                                                        <li class="slide"></li>
                                                    </ul>
                                                </div><a
                                                    href="2024/09/22/tour-recap-our-favorite-moments-from-the-road/index.html"
                                                    target="_parent" class="entry-link-mask"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> News <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-09-22T09:34:56+00:00">September
                                                        22, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:08:54+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/09/22/tour-recap-our-favorite-moments-from-the-road/index.html">Tour
                                                    Recap: Our Favorite Moments from the
                                                    Road</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/09/22/tour-recap-our-favorite-moments-from-the-road/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-2279"
                            class="post-2279 post type-post status-publish format-standard has-post-thumbnail hentry category-news entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark metro-landscape entry-post entry-post-grid"
                            data-post-id="2279" data-thumbnail-color-tone="dark"> <a
                                href="2024/08/22/the-story-behind-our-new-single/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#4B4039">
                                            <div class="img-bg" style="background-color:#4B4039;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-300x168.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-300x168.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-1024x574.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-768x430.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-1536x861.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-500x280.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-550x308.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-400x224.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-1920x1076.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-940x527.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing-1200x673.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Young-Man-Singing.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> News <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-08-22T09:37:40+00:00">August
                                                        22, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-05T11:39:03+00:00">July
                                                        5, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/08/22/the-story-behind-our-new-single/index.html">The
                                                    Story Behind Our New Single</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/08/22/the-story-behind-our-new-single/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-2273"
                            class="post-2273 post type-post status-publish format-video has-post-thumbnail hentry category-practical category-videos post_format-post-format-video entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark is-youtube has-video entry-post entry-post-grid"
                            data-post-id="2273" data-thumbnail-color-tone="dark"> <a
                                href="2024/08/22/new-ep-out-now-everything-you-need-to-know/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#796443">
                                            <div class="img-bg" style="background-color:#796443;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1024x684.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-768x513.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1536x1026.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-500x334.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1920x1282.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-940x628.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1200x801.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media">
                                            <div class="entry-custom-media-video">
                                                <div class=' video-bg-container'><img loading="lazy" width="1024"
                                                        height="684"
                                                        src="../app/uploads/sites/59/2025/05/61478935-1024x684.jpg"
                                                        class="cover video-bg-fallback resized-thumbnail attachment-large"
                                                        alt=""
                                                        srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1024x684.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-768x513.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1536x1026.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-500x334.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1920x1282.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-940x628.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935-1200x801.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/61478935.jpg 1950w"
                                                        sizes="(max-width: 1024px) 100vw, 1024px" /><video class="video-bg"
                                                        id="video-bg-68b88165a596e" preload="auto" autoplay loop="loop"
                                                        muted>
                                                        <source
                                                            src="https://preview.wolfthemes.store/app/uploads/sites/55/2024/08/45987024.mp4"
                                                            type="video/mp4">
                                                    </video>
                                                    <div class="video-bg-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Practical <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-08-22T09:35:11+00:00">August
                                                        22, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:19+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/08/22/new-ep-out-now-everything-you-need-to-know/index.html">New
                                                    EP Out Now: Everything You Need to Know</a>
                                            </h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/08/22/new-ep-out-now-everything-you-need-to-know/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-2271"
                            class="post-2271 post type-post status-publish format-audio has-post-thumbnail hentry category-practical tag-artists post_format-post-format-audio entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark is-spotify has-audio-player entry-post entry-post-grid"
                            data-post-id="2271" data-thumbnail-color-tone="dark"> <a
                                href="2024/08/22/5-songs-that-inspired-poizes-unique-sound/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#645B4D">
                                            <div class="img-bg" style="background-color:#645B4D;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Live-Concert-Performance.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Practical <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-08-22T09:34:22+00:00">August
                                                        22, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:20+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/08/22/5-songs-that-inspired-poizes-unique-sound/index.html">Spotlight
                                                    on Emerging Artists: The Future of Music</a>
                                            </h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/08/22/5-songs-that-inspired-poizes-unique-sound/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-4017"
                            class="post-4017 post type-post status-publish format-image has-post-thumbnail hentry category-news tag-history post_format-post-format-image entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark entry-post entry-post-grid"
                            data-post-id="4017" data-thumbnail-color-tone="dark"> <a
                                href="2024/08/15/exclusive-preview-upcoming-release-teasers/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#5F5145">
                                            <div class="img-bg" style="background-color:#5F5145;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitar-Jam-Session.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> News <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-08-15T10:46:32+00:00">August
                                                        15, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:22+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/08/15/exclusive-preview-upcoming-release-teasers/index.html">Exclusive
                                                    Preview: Upcoming Release Teasers</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/08/15/exclusive-preview-upcoming-release-teasers/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article id="post-4016"
                            class="post-4016 post type-post status-publish format-standard has-post-thumbnail hentry category-practical tag-local-artists entry clearfix entry-grid entry-columns-default entry-post-module-layout-standard thumbnail-color-tone-dark entry-post entry-post-grid"
                            data-post-id="4016" data-thumbnail-color-tone="dark"> <a
                                href="2024/08/15/how-we-craft-our-signature-rock-vibes/index.html" target="_parent"
                                class="entry-link-mask"></a>
                            <div class="entry-box">
                                <div class="entry-container">
                                    <div class="entry-media">
                                        <div class="entry-cover" style="background-color:#444D50">
                                            <div class="img-bg" style="background-color:#444D50;"><img
                                                    src="../app/themes/soundkraft/assets/img/blank.gif"
                                                    style="object-position:50% 50%;"
                                                    data-src="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-300x200.jpg"
                                                    srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-300x200.jpg 300w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-1024x683.jpg 1024w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-768x512.jpg 768w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-1536x1024.jpg 1536w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-500x333.jpg 500w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-550x367.jpg 550w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-400x267.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-1920x1280.jpg 1920w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-940x627.jpg 940w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night-1200x800.jpg 1200w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Guitarist-in-Denim-at-Night.jpg 1950w"
                                                    class="img-cover cover lazy-hidden lazyload-bg skip-auto-lazy"
                                                    sizes="(max-width: 1950px) 100vw, 1950px" alt="">
                                                <div class="img-bg-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="entry-custom-media"></div>
                                    </div>
                                    <div class="entry-summary">
                                        <div class="entry-summary-inner">
                                            <div class="entry-meta-container"> Practical <span class="entry-meta-separator">
                                                    &bull; </span>
                                                <span class="posted-on date"><time itemprop="datePublished"
                                                        class="published" datetime="2024-08-15T10:46:18+00:00">August
                                                        15, 2024</time><time itemprop="dateModified" class="updated"
                                                        datetime="2025-07-02T19:07:23+00:00">July
                                                        2, 2025</time></span>
                                            </div>
                                            <h2 class="entry-title"> <a
                                                    href="2024/08/15/how-we-craft-our-signature-rock-vibes/index.html">5
                                                    Reasons Why You Should Support Local
                                                    Artists</a></h2>
                                            <div class="entry-excerpt">
                                                <p>Ut enim ad minim veniam, quis nostrud
                                                    exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure
                                                    dolor in reprehenderit in voluptate...</p>
                                                <p><a class="wolf-core-button wolf-core-button-size-md theme-button-text"
                                                        href="2024/08/15/how-we-craft-our-signature-rock-vibes/index.html">
                                                        <span class="wolf-core-button-text">
                                                            Read more </span> </a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
               
            </main>
        </div>
        <div id="secondary" class="sidebar-container sidebar-main" role="complementary" itemscope="itemscope"
            itemtype="http://schema.org/WPSideBar">
            <div class="sidebar-inner">
                <div class="widget-area">
                    <aside id="block-2" class="widget widget_block widget_search">
                        <div class="widget-content">
                            <form role="search" method="get" action="https://preview.wolfthemes.store/soundkraft/"
                                class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                                <label class="wp-block-search__label" for="wp-block-search__input-1">Search</label>
                                <div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input"
                                        id="wp-block-search__input-1" placeholder="" value="" type="search" name="s"
                                        required /><button aria-label="Search"
                                        class="wp-block-search__button wp-element-button" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside id="block-4" class="widget widget_block">
                        <div class="widget-content">
                            <div class="wp-block-group">
                                <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                    <h3 class="wp-block-heading">Tags</h3>
                                    <p class="wp-block-tag-cloud"><a href="tag/artists/index.html"
                                            class="tag-cloud-link tag-link-59 tag-link-position-1" style="font-size: 8pt;"
                                            aria-label="artists (1 item)">artists</a> <a href="tag/audio/index.html"
                                            class="tag-cloud-link tag-link-64 tag-link-position-2" style="font-size: 8pt;"
                                            aria-label="audio (1 item)">audio</a> <a href="tag/going-green/index.html"
                                            class="tag-cloud-link tag-link-51 tag-link-position-3" style="font-size: 8pt;"
                                            aria-label="going green (1 item)">going green</a> <a
                                            href="tag/history/index.html"
                                            class="tag-cloud-link tag-link-56 tag-link-position-4" style="font-size: 8pt;"
                                            aria-label="history (1 item)">history</a> <a href="tag/local-artists/index.html"
                                            class="tag-cloud-link tag-link-55 tag-link-position-5" style="font-size: 8pt;"
                                            aria-label="local artists (1 item)">local
                                            artists</a> <a href="tag/photos/index.html"
                                            class="tag-cloud-link tag-link-54 tag-link-position-6" style="font-size: 8pt;"
                                            aria-label="photos (1 item)">photos</a></p>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside id="block-9" class="widget widget_block widget_categories">
                        <div class="widget-content">
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li class="cat-item cat-item-57"><a href="category/news/index.html">News</a></li>
                                <li class="cat-item cat-item-53"><a href="category/photos/index.html">Photos</a></li>
                                <li class="cat-item cat-item-52"><a href="category/practical/index.html">Practical</a></li>
                                <li class="cat-item cat-item-1"><a
                                        href="category/uncategorized/index.html">Uncategorized</a>
                                </li>
                                <li class="cat-item cat-item-62"><a href="category/videos/index.html">Videos</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside id="block-10" class="widget widget_block widget_recent_entries">
                        <div class="widget-content">
                            <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts">
                                <li>
                                    <div class="wp-block-latest-posts__featured-image alignleft">
                                        <img decoding="async" width="150" height="150"
                                            src="../app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""
                                            srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-150x150.jpg 150w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-640x640.jpg 640w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-100x100.jpg 100w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-290x290.jpg 290w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-400x400.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Man-Playing-Guitar-in-Minimalist-Room-960x960.jpg 960w"
                                            sizes="(max-width: 150px) 100vw, 150px" />
                                    </div><a class="wp-block-latest-posts__post-title"
                                        href="2024/10/28/behind-the-scenes-a-week-in-the-life-of-soundkraft/index.html">Behind
                                        the Scenes: A Week in the Life of SoundKraft</a><time
                                        datetime="2024-10-28T13:52:27+00:00"
                                        class="wp-block-latest-posts__post-date">October 28,
                                        2024</time>
                                </li>
                                <li>
                                    <div class="wp-block-latest-posts__featured-image alignleft">
                                        <img decoding="async" width="150" height="150"
                                            src="../app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""
                                            srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-150x150.jpg 150w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-640x640.jpg 640w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-100x100.jpg 100w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-290x290.jpg 290w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-400x400.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/05/Live-Rock-Band-Performance-960x960.jpg 960w"
                                            sizes="(max-width: 150px) 100vw, 150px" />
                                    </div><a class="wp-block-latest-posts__post-title"
                                        href="2024/10/28/studio-diary-how-we-recorded-our-latest-track/index.html">Studio
                                        Diary: How We Recorded Our Latest Track</a><time
                                        datetime="2024-10-28T13:52:10+00:00"
                                        class="wp-block-latest-posts__post-date">October 28,
                                        2024</time>
                                </li>
                                <li>
                                    <div class="wp-block-latest-posts__featured-image alignleft">
                                        <img decoding="async" width="150" height="150"
                                            src="../app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-150x150.jpg"
                                            class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style=""
                                            srcset="https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-150x150.jpg 150w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-640x640.jpg 640w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-100x100.jpg 100w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-290x290.jpg 290w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-400x400.jpg 400w, https://preview.wolfthemes.store/app/uploads/sites/59/2025/06/Person-at-Desk-with-Audio-Equipment-960x960.jpg 960w"
                                            sizes="(max-width: 150px) 100vw, 150px" />
                                    </div><a class="wp-block-latest-posts__post-title"
                                        href="2024/10/15/memorable-moments-from-sk-live-shows/index.html">Memorable
                                        Moments from SK’s Live Shows</a><time datetime="2024-10-15T10:46:14+00:00"
                                        class="wp-block-latest-posts__post-date">October 15,
                                        2024</time>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection