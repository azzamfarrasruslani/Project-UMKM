<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFC Korea</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="flex flex-col justify-center">
  <header class="flex relative flex-col items-center px-60 w-full bg-white shadow-sm max-h-[1000000px] max-md:px-5 max-md:max-w-full">
    <div class="flex z-0 flex-wrap gap-5 justify-between items-start self-center pt-4 pr-20 pb-12 pl-10 w-full text-sm tracking-tight leading-10 whitespace-nowrap bg-white max-w-[1440px] text-stone-500 max-md:px-5 max-md:max-w-full">
      <a href="/" aria-label="KFC Home">
        <img loading="lazy" src="/assets/images/kfc-logo.png" alt="KFC Logo" class="object-contain shrink-0 mt-5 max-w-full aspect-[3.66] w-[110px]"/>
      </a>
      <nav class="flex gap-3.5" role="navigation" aria-label="User navigation">
        <button class="hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md px-2 transition-colors" type="button">로그인</button>
        <div class="flex self-start">
          <div class="flex relative flex-col pt-2 pr-3 pl-3.5">
            <button class="z-0 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md px-2 transition-colors" type="button">주문내역조회</button>
            <div class="flex absolute left-0 top-2/4 z-0 w-px h-2.5 border-l border-solid -translate-y-2/4 border-l-zinc-300 min-h-[10px] right-[98px] translate-x-[0%]" aria-hidden="true"></div>
          </div>
          <div class="flex relative flex-col px-3 pt-2">
            <button class="z-0 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md px-2 transition-colors" type="button">고객센터</button>
            <div class="flex absolute left-0 top-2/4 z-0 w-px h-2.5 border-l border-solid -translate-y-2/4 border-l-zinc-300 min-h-[10px] right-[73px] translate-x-[0%]" aria-hidden="true"></div>
          </div>
          <div class="flex relative flex-col px-3 pt-2">
            <button class="z-0 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md px-2 transition-colors" type="button">인재채용</button>
            <div class="flex absolute left-0 top-2/4 z-0 w-px h-2.5 border-l border-solid -translate-y-2/4 border-l-zinc-300 min-h-[10px] right-[73px] translate-x-[0%]" aria-hidden="true"></div>
          </div>
        </div>
        <div class="overflow-hidden px-3.5 pt-5 pb-1 my-auto text-xs font-bold leading-3 text-center text-black" role="status" aria-label="장바구니 수량">0</div>
      </nav>
    </div>
    <nav class="flex overflow-hidden absolute -bottom-px left-2/4 z-0 flex-col pr-80 pl-96 text-xl font-bold tracking-tighter leading-5 text-center -translate-x-2/4 max-w-[1440px] text-stone-800 translate-y-[0%] w-[1440px] max-md:px-5 max-md:max-w-full" role="navigation" aria-label="메인 메뉴">
      <div class="flex gap-5 justify-between pb-1.5 pl-5 w-full max-md:max-w-full">
        <button class="overflow-hidden px-1.5 py-5 whitespace-nowrap min-h-[60px] text-stone-800 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">DELIVERY</button>
        <button class="overflow-hidden px-1.5 py-5 text-xl whitespace-nowrap min-h-[60px] hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">STORE</button>
        <button class="overflow-hidden py-5 pr-1.5 pl-5 whitespace-nowrap min-h-[60px] hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">EVENT</button>
        <button class="overflow-hidden px-1.5 py-5 min-h-[60px] hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">KFC SERVICE</button>
        <button class="overflow-hidden z-10 px-1.5 py-5 text-xl min-h-[60px] max-md:-mr-2.5 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">가맹 및 입점 문의</button>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero-section flex flex-col bg-stone-800 max-h-[1000000px] max-md:max-w-full" aria-label="히어로 섹션">
      <img loading="lazy" src="/assets/images/hero-banner.jpg" alt="KFC 메인 배너" class="object-contain max-w-full aspect-[4.37] min-h-[440px] w-[1920px]"/>
    </section>

    <section class="promotional-banners flex flex-wrap gap-5 justify-center items-start self-center pr-7 pl-2.5 mt-5 w-full max-w-[1820px] max-md:pr-5 max-md:max-w-full" aria-label="프로모션 배너">
      <div class="flex overflow-hidden flex-col flex-1 shrink rounded-2xl basis-0 min-w-[240px] max-md:max-w-full">
        <img loading="lazy" src="/assets/images/promo-1.jpg" alt="KFC 프로모션 배너 1" class="object-contain max-w-full aspect-[2.78] w-[581px]"/>
      </div>
      <div class="flex overflow-hidden flex-col flex-1 shrink rounded-2xl basis-0 min-w-[240px] max-md:max-w-full">
        <img loading="lazy" src="/assets/images/promo-2.jpg" alt="KFC 프로모션 배너 2" class="object-contain max-w-full aspect-[2.78] w-[581px]"/>
      </div>
      <div class="flex overflow-hidden flex-col flex-1 shrink rounded-2xl basis-0 min-w-[240px] max-md:max-w-full">
        <img loading="lazy" src="/assets/images/promo-3.jpg" alt="KFC 프로모션 배너 3" class="object-contain max-w-full aspect-[2.78] w-[581px]"/>
      </div>
    </section>

    <section class="best-menu flex flex-col items-center pb-24 mt-5 bg-neutral-100 max-h-[1000100px] max-md:max-w-full" aria-labelledby="best-menu-heading">
      <div class="flex flex-col px-16 w-full max-w-[1920px] max-md:px-5 max-md:max-w-full">
        <div class="flex flex-col text-3xl font-bold tracking-tight leading-10 text-stone-800 max-md:max-w-full">
          <img loading="lazy" src="/assets/images/best-menu-logo.png" alt="베스트 메뉴 로고" class="object-contain max-w-full aspect-[2.08] w-[250px]"/>
          <h2 id="best-menu-heading" class="mt-5">BEST MENU</h2>
        </div>

        <div class="menu-slider flex relative flex-col mt-10 w-full max-md:max-w-full">
          <div class="flex overflow-hidden z-0 flex-col self-center pb-12 w-full tracking-tight text-center whitespace-nowrap max-w-[1800px] max-md:max-w-full">
            <div class="menu-items flex flex-wrap gap-5 justify-center min-h-[535px] max-md:max-w-full" role="list">
              <article class="menu-item flex flex-col grow shrink px-8 pt-8 pb-14 bg-white rounded-2xl shadow-lg max-h-[1000000px] min-w-[240px] w-[470px] max-md:px-5 max-md:max-w-full hover:shadow-xl transition-shadow" role="listitem">
                <img loading="lazy" src="/assets/images/menu-1.jpg" alt="닭껍질튀김" class="object-contain w-full aspect-[1.52] max-md:max-w-full"/>
                <h3 class="overflow-hidden pr-44 pl-40 mt-8 text-2xl font-bold leading-6 text-neutral-800 max-md:px-5 max-md:max-w-full">닭껍질튀김1900원</h3>
                <p class="self-center pl-6 mt-5 text-xl leading-8 text-red-700 max-md:pl-5">1,900원</p>
              </article>

              <article class="menu-item flex flex-col grow shrink px-8 py-8 bg-white rounded-2xl shadow-lg max-h-[1000000px] min-w-[240px] w-[469px] max-md:px-5 max-md:max-w-full hover:shadow-xl transition-shadow" role="listitem">
                <img loading="lazy" src="/assets/images/menu-2.jpg" alt="NEW핫딜버켓" class="object-contain w-full aspect-[1.51] max-md:max-w-full"/>
                <h3 class="overflow-hidden px-48 mt-8 text-2xl font-bold leading-6 text-neutral-800 max-md:px-5 max-md:max-w-full">NEW핫딜버켓</h3>
                <p class="overflow-hidden pr-28 pl-28 mt-1 text-base leading-5 text-stone-500 max-md:px-5 max-md:max-w-full">핫크리스피통다리8조각+커넬오리지널+코울슬로</p>
                <p class="self-center pl-6 mt-4 text-xl leading-8 text-red-700 max-md:pl-5">31,100원</p>
              </article>

              <article class="menu-item flex flex-col grow shrink px-8 py-8 bg-white rounded-2xl shadow-lg max-h-[1000000px] min-w-[240px] w-[470px] max-md:px-5 max-md:max-w-full hover:shadow-xl transition-shadow" role="listitem">
                <img loading="lazy" src="/assets/images/menu-3.jpg" alt="갓양념켄치밥세트" class="object-contain w-full aspect-[1.52] max-md:max-w-full"/>
                <h3 class="overflow-hidden px-44 mt-8 text-2xl font-bold leading-6 text-neutral-800 max-md:px-5 max-md:max-w-full">갓양념켄치밥세트</h3>
                <p class="overflow-hidden pr-40 pl-40 mt-1 text-base leading-5 text-stone-500 max-md:px-5 max-md:max-w-full">갓양념켄치밥+콜라M+코울슬로</p>
                <p class="self-center pl-6 mt-4 text-xl leading-8 text-red-700 max-md:pl-5">7,400원</p>
              </article>
            </div>
          </div>

          <div class="slider-controls flex absolute inset-x-0 z-0 flex-wrap gap-2 items-start px-5 w-full top-[-98px]" role="navigation" aria-label="메뉴 슬라이더 컨트롤">
            <button class="prev-button flex flex-col items-center rounded-lg border-2 border-red-600 border-solid opacity-60 h-[52px] max-h-[1000004px] min-h-[52px] w-[52px] hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-red-600 transition-opacity" aria-label="이전 메뉴" type="button">
              <div class="flex overflow-hidden flex-col justify-center items-center p-2.5 min-h-[52px] w-[52px]">
                <img loading="lazy" src="/assets/images/arrow-left.png" alt="" class="object-contain w-full aspect-square" aria-hidden="true"/>
              </div>
            </button>
            <button class="next-button flex flex-col items-center rounded-lg border-2 border-red-600 border-solid opacity-60 h-[52px] max-h-[1000004px] min-h-[52px] w-[52px] hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-red-600 transition-opacity" aria-label="다음 메뉴" type="button">
              <div class="flex overflow-hidden flex-col justify-center items-center p-2.5 min-h-[52px] w-[52px]">
                <img loading="lazy" src="/assets/images/arrow-right.png" alt="" class="object-contain w-full aspect-square" aria-hidden="true"/>
              </div>
            </button>
          </div>
        </div>

        <a href="/menu" class="view-all-menu flex gap-0 justify-center items-start self-center px-20 py-6 text-2xl leading-9 text-center text-white rounded-2xl bg-stone-900 max-h-[1000000px] max-w-[400px] w-[400px] max-md:px-5 hover:bg-stone-700 focus:outline-none focus:ring-2 focus:ring-stone-600 transition-colors" role="button">
          <span class="font-bold tracking-tight">다양한 메뉴 보러가기</span>
          <span class="material-icons" aria-hidden="true">arrow_forward_ios</span>
        </a>
      </div>
    </section>

    <section class="app-download flex flex-col px-80 text-lg font-bold tracking-tight leading-7 text-center text-white bg-red-600 max-h-[1000000px] max-md:px-5 max-md:max-w-full" aria-labelledby="app-download-heading">
      <div class="flex relative flex-col items-start px-16 pt-16 pb-16 w-full max-md:px-5 max-md:max-w-full">
        <img loading="lazy" src="/assets/images/app-visual.png" alt="" class="object-contain absolute right-0 -top-12 z-0 max-w-full aspect-[2.48] h-[420px] w-[1042px]" aria-hidden="true"/>
        <img loading="lazy" src="/assets/images/app-logo.png" alt="KFC 앱" class="object-contain z-0 max-w-full aspect-[2.36] w-[307px]"/>
        <h2 id="app-download-heading" class="sr-only">KFC 앱 다운로드</h2>
        <a href="/app-download" class="download-button px-10 py-5 mt-11 max-w-full bg-black rounded-xl max-h-[1000000px] w-[200px] hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-600 transition-colors max-md:px-5 max-md:mt-10">
          앱으로 주문하기
        </a>
      </div>
    </section>

    <section class="social-feed flex flex-col items-center max-md:max-w-full" aria-labelledby="social-feed-heading">
      <div class="flex flex-col items-center px-12 pb-12 w-full max-w-[1920px] max-md:px-5 max-md:max-w-full">
        <div class="flex flex-col w-full text-3xl font-bold tracking-tight leading-10 text-stone-800">
          <img loading="lazy" src="/assets/images/social-logo.png" alt="" class="object-contain max-w-full aspect-[2.08] w-[250px]"/>
          <h2 id="social-feed-heading" class="mt-5 max-md:max-w-full">KFC FACEBOOK, INSTAGRAM</h2>
        </div>

        <div class="social-grid flex flex-wrap gap-5 items-start px-2.5 mt-10 w-full">
          <article class="social-post flex overflow-hidden flex-col flex-1 shrink rounded-2xl shadow-lg basis-0 bg-white bg-opacity-0 max-h-[1000000px] min-w-[240px] hover:shadow-xl transition-shadow">
            <div class="flex overflow-hidden flex-col w-full">
              <img loading="lazy" src="/assets/images/social-1.jpg" alt="KFC 소셜 포스트 1" class="object-contain w-full aspect-square max-w-[344px]"/>
            </div>
            <div class="post-footer flex overflow-hidden gap-40 items-start py-4 pr-2 pl-2.5 w-full text-base tracking-tight leading-4 bg-neutral-100 max-h-[1000030px]">
              <div class="flex overflow-hidden gap-2.5 items-center whitespace-nowrap text-zinc-500 w-[110px]">
                <img loading="lazy" src="/assets/images/instagram-icon.png" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square max-w-[110px] w-[22px]" aria-hidden="true"/>
                <span class="self-stretch my-auto">kfc_korea</span>
              </div>
              <button class="follow-button font-bold text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">+ 팔로워</button>
            </div>
          </article>

          <article class="social-post flex overflow-hidden flex-col flex-1 shrink rounded-2xl shadow-lg basis-0 bg-white bg-opacity-0 max-h-[1000000px] min-w-[240px] hover:shadow-xl transition-shadow">
            <div class="flex overflow-hidden flex-col w-full">
              <img loading="lazy" src="/assets/images/social-2.jpg" alt="KFC 소셜 포스트 2" class="object-contain w-full aspect-square max-w-[344px]"/>
            </div>
            <div class="post-footer flex overflow-hidden gap-40 items-start py-4 pr-2 pl-2.5 w-full text-base tracking-tight leading-4 bg-neutral-100 max-h-[1000030px]">
              <div class="flex overflow-hidden gap-2.5 items-center whitespace-nowrap text-zinc-500 w-[110px]">
                <img loading="lazy" src="/assets/images/instagram-icon.png" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square max-w-[110px] w-[22px]" aria-hidden="true"/>
                <span class="self-stretch my-auto">kfc_korea</span>
              </div>
              <button class="follow-button font-bold text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">+ 팔로워</button>
            </div>
          </article>

          <article class="social-post flex overflow-hidden flex-col flex-1 shrink rounded-2xl shadow-lg basis-0 bg-white bg-opacity-0 max-h-[1000000px] min-w-[240px] hover:shadow-xl transition-shadow">
            <div class="flex overflow-hidden flex-col w-full">
              <img loading="lazy" src="/assets/images/social-3.jpg" alt="KFC 소셜 포스트 3" class="object-contain w-full aspect-square max-w-[344px]"/>
            </div>
            <div class="post-footer flex overflow-hidden gap-40 items-start py-4 pr-2 pl-2.5 w-full text-base tracking-tight leading-4 bg-neutral-100 max-h-[1000030px]">
              <div class="flex overflow-hidden gap-2.5 items-center whitespace-nowrap text-zinc-500 w-[110px]">
                <img loading="lazy" src="/assets/images/instagram-icon.png" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square max-w-[110px] w-[22px]" aria-hidden="true"/>
                <span class="self-stretch my-auto">kfc_korea</span>
              </div>
              <button class="follow-button font-bold text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">+ 팔로워</button>
            </div>
          </article>

          <article class="social-post flex overflow-hidden flex-col flex-1 shrink rounded-2xl shadow-lg basis-0 bg-white bg-opacity-0 max-h-[1000000px] min-w-[240px] hover:shadow-xl transition-shadow">
            <div class="flex overflow-hidden flex-col w-full">
              <img loading="lazy" src="/assets/images/social-4.jpg" alt="KFC 소셜 포스트 4" class="object-contain w-full aspect-square max-w-[344px]"/>
            </div>
            <div class="post-footer flex overflow-hidden gap-40 items-start py-4 pr-2 pl-2.5 w-full text-base tracking-tight leading-4 bg-neutral-100 max-h-[1000030px]">
              <div class="flex overflow-hidden gap-2.5 items-center whitespace-nowrap text-zinc-500 w-[110px]">
                <img loading="lazy" src="/assets/images/instagram-icon.png" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square max-w-[110px] w-[22px]" aria-hidden="true"/>
                <span class="self-stretch my-auto">kfc_korea</span>
              </div>
              <button class="follow-button font-bold text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">+ 팔로워</button>
            </div>
          </article>

          <article class="social-post flex overflow-hidden flex-col flex-1 shrink rounded-2xl shadow-lg basis-0 bg-white bg-opacity-0 max-h-[1000000px] min-w-[240px] hover:shadow-xl transition-shadow">
            <div class="flex overflow-hidden flex-col w-full">
              <img loading="lazy" src="/assets/images/social-5.jpg" alt="KFC 소셜 포스트 5" class="object-contain w-full aspect-square max-w-[344px]"/>
            </div>
            <div class="post-footer flex overflow-hidden gap-40 items-start py-4 pr-2 pl-2.5 w-full text-base tracking-tight leading-4 bg-neutral-100 max-h-[1000030px]">
              <div class="flex overflow-hidden gap-2.5 items-center whitespace-nowrap text-zinc-500 w-[110px]">
                <img loading="lazy" src="/assets/images/instagram-icon.png" alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square max-w-[110px] w-[22px]" aria-hidden="true"/>
                <span class="self-stretch my-auto">kfc_korea</span>
              </div>
              <button class="follow-button font-bold text-red-600 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 rounded-md transition-colors" type="button">+ 팔로워</button>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="youtube-section flex flex-col px-16 pb-32 max-md:px-5 max-md:pb-24 max-md:max-w-full" aria-labelledby="youtube-section-heading">
      <div class="flex flex-col max-w-full text-3xl font-bold tracking-tight leading-10 text-stone-800 w-[1800px]">
        <img loading="lazy" src="/assets/images/youtube-logo.png" alt="" class="object-contain max-w-full aspect-[2.08] w-[250px]"/>
        <h2 id="youtube-section-heading" class="mt-5">KFC YOUTUBE</h2>
      </div>

      <div class="youtube-slider flex relative flex-col mt-12 w-full max-md:mt-10 max-md:max-w-full">
        <div class="flex overflow-hidden z-0 flex-col w-full max-md:max-w-full">
          <div class="youtube-videos flex flex-wrap gap-5 justify-center items-start h-[330px]">
            <article class="youtube-video flex overflow-hidden flex-col grow shrink rounded-2xl opacity-30 bg-black bg-opacity-10 max-h-[1000000px] min-w-[240px] w-[470px] max-md:max-w-full hover:opacity-40 transition-opacity">
              <div class="video-container flex overflow-hidden flex-col max-w-full w-[587px]">
                <div class="flex flex-col justify-center bg-black min-h-[330px] max-md:max-w-full">
                  <div class="flex overflow-hidden flex-col flex-1 w-full bg-black max-md:max-w-full">
                    <div class="flex relative flex-col py-1 w-full min-h-[330px] max-md:max-w-full">
                      <img loading="lazy" src="/assets/images/youtube-thumb-1.jpg" alt="KFC 유튜브 영상 1" class="object-cover absolute inset-0 size-full"/>
                      <div class="video-info flex relative flex-col flex-wrap gap-2.5 items-start pr-5 pb-9 pl-2 w-full min-h-[99px] max-md:pr-5 max-md:max-w-full">
                        <div class="flex relative flex-auto max-md:max-w-full">
                          <div class="channel-info flex overflow-hidden z-10 items-start self-end p-1.5 mt-2 mr-0 rounded-3xl min-h-[50px]">
                            <img loading="lazy" src="/assets/images/kfc-channel-logo.jpg" alt="KFC 채널 로고" class="object-contain w-10 rounded-3xl aspect-square"/>
                          </div>
                          <h3 class="video-title flex overflow-hidden flex-col grow shrink-0 pt-5 pl-12 text-lg leading-6 basis-0 min-h-[60px] text-zinc-100 w-fit max-md:max-w-full">
                            [KFC] 전세계가 사랑했던 추억의 그 맛! 1994윙 IS BACK
                          </h3>
                        </div>
                        <button class="share-button flex overflow-hidden relative flex-col pt-1.5 text-sm font-medium leading-5 text-center whitespace-nowrap min-w-[48px] text-zinc-100 hover:text-zinc-200 focus:outline-none focus:ring-2 focus:ring-zinc-100 rounded-md transition-colors" type="button" aria-label="공유하기">
                          <img loading="lazy" src="/assets/images/share-icon.png" alt="" class="object-contain self-center w-9 aspect-square" aria-hidden="true"/>
                          <div class="overflow-hidden px-1.5 py-px w-full">Share</div>
                        </button>
                      </div>
                      <img loading="lazy" src="/assets/images/play-button.png" alt="재생" class="object-contain self-center mt-11 aspect-[1.42] w-[68px] max-md:mt-10"/>
                      <div class="watch-on-youtube flex relative gap-2 self-start px-3 py-4 mt-24 text-base font-medium leading-4 text-white rounded-none bg-neutral-900 bg-opacity-80 min-h-[47px] max-md:mt-10">
                        <span class="self-start">Watch on</span>
                        <img loading="lazy" src="/assets/images/youtube-logo-small.png" alt="YouTube" class="object-contain shrink-0 aspect-[4.5] w-[72px]"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="youtube-video flex overflow-hidden flex-col grow shrink rounded-2xl bg-black bg-opacity-10 max-h-[1000000px] min-w-[240px] w-[469px] max-md:max-w-full hover:opacity-90 transition-opacity">
              <div class="video-container flex overflow-hidden flex-col max-w-full w-[587px]">
                <div class="flex flex-col justify-center bg-black min-h-[330px] max-md:max-w-full">
                  <div class="flex overflow-hidden flex-col flex-1 w-full bg-black max-md:max-w-full">
                    <div class="flex relative flex-col py-1 w-full min-h-[330px] max-md:max-w-full">
                      <img loading="lazy" src="/assets/images/youtube-thumb-2.jpg" alt="KFC 유튜브 영상 2" class="object-cover absolute inset-0 size-full"/>
                      <div class="video-info flex relative flex-col flex-wrap gap-2.5 items-start pr-5 pb-9 pl-2 w-full min-h-[99px] max-md:max-w-full">
                        <div class="flex relative flex-auto max-md:max-w-full">
                          <div class="channel-info flex overflow-hidden z-10 items-start self-end p-1.5 mt-2 mr-0 rounded-3xl min-h-[50px]">
                            <img loading="lazy" src="/assets/images/kfc-channel-logo.jpg" alt="KFC 채널 로고" class="object-contain w-10 rounded-3xl aspect-square"/>
                          </div>
                          <h3 class="video-title flex overflow-hidden flex-col grow shrink-0 pt-5 pl-12 text-lg leading-6 basis-0 min-h-[60px] text-zinc-100 w-fit max-md:max-w-full">
                            [KFC] 커넬 오리지널 3,900원 출시!✨
                          </h3>
                        </div>
                        <button class="share-button flex overflow-hidden relative flex-col pt-1.5 text-sm font-medium leading-5 text-center whitespace-nowrap min-w-[48px] text-zinc-100 hover:text-zinc-200 focus:outline-none focus:ring-2 focus:ring-zinc-100 rounded-md transition-colors" type="button" aria-label="공유하기">
                          <img loading="lazy" src="/assets/images/share-icon.png" alt="" class="object-contain self-center w-9 aspect-square" aria-hidden="true"/>
                          <div class="overflow-hidden px-1.5 py-px w-full">Share</div>
                        </button>
                      </div>
                      <img loading="lazy" src="/assets/images/play-button.png" alt="재생" class="object-contain self-center mt-11 aspect-[1.42] w-[68px] max-md:mt-10"/>
                      <div class="watch-on-youtube flex relative gap-2.5 self-start px-3 py-4 mt-24 text-base font-medium leading-4 text-white rounded-none bg-neutral-900 bg-opacity-80 min-h-[47px] max-md:mt-10">
                        <span class="self-start">Watch on</span>
                        <img loading="lazy" src="/assets/images/youtube-logo-small.png" alt="YouTube" class="object-contain shrink-0 aspect-[4.5] w-[72px]"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <article class="youtube-video flex overflow-hidden flex-col grow shrink rounded-2xl opacity-30 bg-black bg-opacity-10 max-h-[1000000px] min-w-[240px] w-[470px] max-md:max-w-full hover:opacity-40 transition-opacity">
              <div class="video-container flex overflow-hidden flex-col max-w-full w-[587px]">
                <div class="flex flex-col justify-center bg-black min-h-[330px] max-md:max-w-full">
                  <div class="flex overflow-hidden flex-col flex-1 w-full bg-black max-md:max-w-full">
                    <div class="flex relative flex-col py-1 w-full min-h-[330px] max-md:max-w-full">
                      <img loading="lazy" src="/assets/images/youtube-thumb-3.jpg" alt="KFC 유튜브 영상 3" class="object-cover absolute inset-0 size-full"/>
                      <div class="video-info flex relative flex-col flex-wrap gap-2.5 items-start pr-5 pb-9 pl-2 w-full min-h-[99px] max-md:max-w-full">
                        <div class="flex relative flex-auto max-md:max-w-full">
                          <div class="channel-info flex overflow-hidden z-10 items-start self-end p-1.5 mt-2 mr-0 rounded-3xl min-h-[50px]">
                            <img loading="lazy" src="/assets/images/kfc-channel-logo.jpg" alt="KFC 채널 로고" class="object-contain w-10 rounded-3xl aspect-square"/>
                          </div>
                          <h3 class="video-title flex overflow-hidden flex-col grow shrink-0 pt-5 pl-12 text-lg leading-6 basis-0 min-h-[60px] text-zinc-100 w-fit max-md:max-w-full">
                            [KFC] 엄마는 치킨버거를 만든 적이 없어
                          </h3>
                        </div>
                        <button class="share-button flex overflow-hidden relative flex-col pt-1.5 text-sm font-medium leading-5 text-center whitespace-nowrap min-w-[48px] text-zinc-100 hover:text-zinc-200 focus:outline-none focus:ring-2 focus:ring-zinc-100 rounded-md transition-colors" type="button" aria-label="공유하기">
                          <img loading="lazy" src="/assets/images/share-icon.png" alt="" class="object-contain self-center w-9 aspect-square" aria-hidden="true"/>
                          <div class="overflow-hidden px-1.5 py-px w-full">Share</div>
                        </button>
                      </div>
                      <img loading="lazy" src="/assets/images/play-button.png" alt="재생" class="object-contain self-center mt-11 aspect-[1.42] w-[68px] max-md:mt-10"/>
                      <div class="watch-on-youtube flex relative gap-2 self-start px-3 py-4 mt-24 text-base font-medium leading-4 text-white rounded-none bg-neutral-900 bg-opacity-80 min-h-[47px] max-md:mt-10">
                        <span class="self-start">Watch on</span>
                        <img loading="lazy" src="/assets/images/youtube-logo-small.png" alt="YouTube" class="object-contain shrink-0 aspect-[4.5] w-[72px]"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="slider-controls flex absolute inset-x-0 z-0 flex-wrap gap-2 items-start px-5 max-w-full top-[-98px] w-[1800px]" role="navigation" aria-label="유튜브 슬라이더 컨트롤">
          <button class="prev-button flex flex-col items-center rounded-lg border-2 border-red-600 border-solid opacity-60 h-[52px] max-h-[1000004px] min-h-[52px] w-[52px] hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-red-600 transition-opacity" aria-label="이전 영상" type="button">
            <div class="flex overflow-hidden flex-col justify-center items-center p-2.5 min-h-[52px] w-[52px]">
              <img loading="lazy" src="/assets/images/arrow-left.png" alt="" class="object-contain w-full aspect-square" aria-hidden="true"/>
            </div>
          </button>
          <button class="next-button flex flex-col items-center rounded-lg border-2 border-red-600 border-solid opacity-60 h-[52px] max-h-[1000004px] min-h-[52px] w-[52px] hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-red-600 transition-opacity" aria-label="다음 영상" type="button">
            <div class="flex overflow-hidden flex-col justify-center items-center p-2.5 min-h-[52px] w-[52px]">
              <img loading="lazy" src="/assets/images/arrow-right.png" alt="" class="object-contain w-full aspect-square" aria-hidden="true"/>
            </div>
          </button>
        </div>
      </div>
    </section>
  </main>

  <footer class="flex flex-col tracking-tight max-md:max-w-full">
    <div class="flex overflow-hidden flex-col justify-center items-center px-20 py-16 w-full bg-white max-h-[1000120px] max-md:px-5 max-md:max-w-full">
      <div class="flex flex-col max-w-full w-[1260px]">
        <img loading="lazy" src="/assets/images/kfc-logo-footer.png" alt="KFC" class="object-contain ml-2.5 max-w-full aspect-[3.66] w-[110px]"/>
        <nav class="footer-nav flex flex-wrap gap-10 justify-between items-start px-2.5 pt-4 mt-10 max-md:max-w-full" role="navigation" aria-label="푸터 메뉴">
          <div class="flex flex-col items-start py-px text-xs leading-5 whitespace-nowrap text-zinc-500 w-[66px]">
            <h3 class="self-stretch text-sm font-bold leading-6 text-black">DELIVERY</h3>
            <ul class="mt-2">
              <li><a href="/menu/recommended" class="hover:text-red-600 transition-colors">추천메뉴</a></li>
              <li><a href="/menu/chicken" class="hover:text-red-600 transition-colors">치킨&세트</a></li>
              <li><a href="/menu/burger" class="hover:text-red-600 transition-colors">버거&세트</a></li>
              <li><a href="/menu/snack" class="hover:text-red-600 transition-colors">스낵&사이드</a></li>
              <li><a href="/menu/drink" class="z-10 hover:text-red-600 transition-colors">음료</a></li>
            </ul>
          </div>

          <div class="flex flex-col pt-0.5 pb-1 whitespace-nowrap w-[47px]">
            <h3 class="w-full text-base font-bold leading-6 text-black">STORE</h3>
            <ul class="mt-3.5 text-xs leading-5 text-zinc-500">
              <li><a href="/store/finder" class="hover:text-red-600 transition-colors">매장찾기</a></li>
            </ul>
          </div>

          <div class="flex flex-col py-px text-xs leading-5 whitespace-nowrap text-zinc-500 w-[45px]">
            <h3 class="text-sm font-bold leading-6 text-black">EVENT</h3>
            <ul class="mt-2">
              <li><a href="/event/promotion" class="max-md:mr-0.5 hover:text-red-600 transition-colors">프로모션</a></li>
              <li><a href="/event/news" class="self-start hover:text-red-600 transition-colors">새소식</a></li>
              <li><a href="/event/notice" class="z-10 max-md:mr-0.5 hover:text-red-600 transition-colors">공지사항</a></li>
            </ul>
          </div>

          <div class="flex flex-col items-start py-px text-xs leading-5 text-zinc-500 w-[88px]">
            <h3 class="self-stretch text-sm font-bold leading-6 text-black">KFC SERVICE</h3>
            <ul class="mt-2">
              <li><a href="/service/membership" class="whitespace-nowrap hover:text-red-600 transition-colors">멤버십</a></li>
              <li><a href="/service/gift-card" class="hover:text-red-600 transition-colors">카드 & 상품권</a></li>
              <li><a href="/service/tips" class="text-xs hover:text-red-600 transition-colors">KFC TIP</a></li>
              <li><a href="/service/customer" class="whitespace-nowrap hover:text-red-600 transition-colors">고객센터</a></li>
              <li><a href="/service/franchise" class="z-10 hover:text-red-600 transition-colors">직영 입점 문의</a></li>
            </ul>
          </div>

          <div class="flex flex-col items-start py-px leading-5 text-zinc-500 w-[33px]">
            <h3 class="text-sm font-bold leading-6 text-black max-md:-mr-2.5">KFC IS</h3>
            <ul class="mt-2">
              <li><a href="/about/brand" class="self-stretch text-xs whitespace-nowrap max-md:mr-0.5 hover:text-red-600 transition-colors">브랜드</a></li>
              <li><a href="/about/history" class="text-xs whitespace-nowrap hover:text-red-600 transition-colors">연혁</a></li>
              <li><a href="/about/ir" class="text-xs whitespace-nowrap hover:text-red-600 transition-colors">IR</a></li>
              <li><a href="/about/news" class="z-10 self-stretch text-xs whitespace-nowrap max-md:mr-1 hover:text-red-600 transition-colors">NEWS</a></li>
            </ul>
          </div>

          <div class="flex flex-col pt-0.5 pb-1 w-[54px]">
            <h3 class="text-base font-bold leading-6 text-black whitespace-nowrap">인재채용</h3>
            <ul class="mt-3.5 text-xs leading-5 text-zinc-500">
              <li><a href="/careers" class="hover:text-red-600 transition-colors">KFC 인재채용</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div class="divider w-full bg-zinc-800 max-h-[1000000px] min-h-[46px] max-md:max-w-full"></div>

    <div class="footer-bottom flex flex-col items-center pt-6 pb-20 w-full text-xs leading-5 text-center bg-neutral-800 max-h-[1000095px] text-stone-500 max-md:max-w-full">
      <nav class="footer-links flex flex-wrap gap-4 items-start pl-4 text-sm leading-5 text-zinc-500 max-md:max-w-full" role="navigation" aria-label="법적 고지">
        <a href="/privacy" class="text-orange-300 hover:text-orange-400 transition-colors">개인정보처리방침</a>
        <div class="flex relative flex-col px-3.5 w-[119px]">
          <a href="/terms" class="z-0 self-center hover:text-zinc-400 transition-colors">사이트 이용약관</a>
          <div class="flex absolute left-0 top-2/4 z-0 w-px h-3 -translate-y-2/4 bg-stone-500 min-h-[12px] translate-x-[0%]" aria-hidden="true"></div>
        </div>
        <div class="flex relative flex-col pr-3.5 w-[116px]">
          <a href="/location-terms" class="z-0 self-center hover:text-zinc-400 transition-colors">위치정보 이용약관</a>
          <div class="flex absolute left-0 top-2/4 z-0 w-px h-3 -translate-y-2/4 bg-stone-500 min-h-[12px] translate-x-[0%]" aria-hidden="true"></div>
        </div>
        <div class="flex relative flex-col pr-3 w-[142px]">
          <a href="/card-terms" class="z-0 self-center hover:text-zinc-400 transition-colors">KFC 선불카드 이용약관</a>
          <div class="flex absolute left-0 top-2/4 z-0 w-px h-3 -translate-y-2/4 bg-stone-500 min-h-[12px] translate-x-[0%]" aria-hidden="true"></div>
        </div>
        <div class="flex relative flex-col pr-3.5 w-48">
          <a href="/video-policy" class="z-0 self-center hover:text-zinc-400 transition-colors">영상정보처리기기 운영관리 방침</a>
          <div class="flex absolute left-0 top-2/4 z-0 w-px h-3 -translate-y-2/4 bg-stone-500 min-h-[12px] translate-x-[0%]" aria-hidden="true"></div>
        </div>
      </nav>

      <address class="mt-10 not-italic">서울 송파구 올림픽로 299, 2F KFC</address>

      <div class="company-info self-stretch px-[756px] max-md:px-5 max-md:max-w-full">
        사업자등록번호 : 201-81-89723 / 주식회사 케이에프씨코리아 / 대표자 : 신호상
        <br/>
        TEL : 02)6020-8383 월~금 09:00~12:00, 13:00~17:00 공휴일 제외 / FAX : 02)6020-8399
      </div>

      <small class="mt-8">ⓒ 2017 KFC KOREA Co., Ltd. All Rights Reserved.</small>
    </div>
  </footer>
</div>
</body>
</html>
