<template>
  <div
    class="bg-[#f6f5f3] dark:bg-[#0e1321] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
        <div class="lg:col-span-2">
          <div class="trezo-tabs xl:max-w-[740px]" id="trezo-tabs">
            <ul
              class="navs mb-[30px] md:mb-[40px] lg:mb-[50px] -mt-[15px] border-b border-gray-200 dark:border-[#172036]"
            >
              <li
                class="nav-item inline-block mt-[15px] ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px] ltr:lg:mr-[50px] rtl:lg:ml-[50px] ltr:xl:mr-[65px] rtl:xl:ml-[65px] ltr:last:mr-0 rtl:last:ml-0"
              >
                <button
                  type="button"
                  data-tab="tab1"
                  class="nav-link block pb-[8px] md:pb-[10px] lg:pb-[15px] transition-all relative font-medium md:text-[15px] lg:text-md"
                  @click="switchTab('tab1')"
                  :class="{ active: activeTab === 'tab1' }"
                >
                  Overview
                </button>
              </li>
              <li
                class="nav-item inline-block mt-[15px] ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px] ltr:lg:mr-[50px] rtl:lg:ml-[50px] ltr:xl:mr-[65px] rtl:xl:ml-[65px] ltr:last:mr-0 rtl:last:ml-0"
              >
                <button
                  type="button"
                  data-tab="tab2"
                  class="nav-link block pb-[8px] md:pb-[10px] lg:pb-[15px] transition-all relative font-medium md:text-[15px] lg:text-md"
                  @click="switchTab('tab2')"
                  :class="{ active: activeTab === 'tab2' }"
                >
                  Curriculum
                </button>
              </li>
              <li
                class="nav-item inline-block mt-[15px] ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px] ltr:lg:mr-[50px] rtl:lg:ml-[50px] ltr:xl:mr-[65px] rtl:xl:ml-[65px] ltr:last:mr-0 rtl:last:ml-0"
              >
                <button
                  type="button"
                  data-tab="tab3"
                  class="nav-link block pb-[8px] md:pb-[10px] lg:pb-[15px] transition-all relative font-medium md:text-[15px] lg:text-md"
                  @click="switchTab('tab3')"
                  :class="{ active: activeTab === 'tab3' }"
                >
                  Instructor
                </button>
              </li>
              <li
                class="nav-item inline-block mt-[15px] ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px] ltr:lg:mr-[50px] rtl:lg:ml-[50px] ltr:xl:mr-[65px] rtl:xl:ml-[65px] ltr:last:mr-0 rtl:last:ml-0"
              >
                <button
                  type="button"
                  data-tab="tab4"
                  class="nav-link block pb-[8px] md:pb-[10px] lg:pb-[15px] transition-all relative font-medium md:text-[15px] lg:text-md"
                  @click="switchTab('tab4')"
                  :class="{ active: activeTab === 'tab4' }"
                >
                  Reviews
                </button>
              </li>
            </ul>

            <div class="tab-content">
              <div
                class="tab-pane"
                :class="{ active: activeTab === 'tab1' }"
                id="tab1"
              >
                <h3
                  class="!text-lg md:!text-[22px] lg:!text-xl !font-semibold !mb-[15px] md:!mb-[20px] [&:not(:first-child)]:mt-[25px] md:[&:not(:first-child)]:mt-[35px] lg:[&:not(:first-child)]:mt-[45px]"
                >
                  Course Overview
                </h3>
                <p class="md:text-[15px] lg:text-md">
                  Master the skills to become a professional full-stack web
                  developer from scratch. This hands-on course covers both
                  front-end and back-end development using the most in-demand
                  tools and technologies in the industry. Whether you’re
                  starting your career or looking to upgrade your skill set,
                  this course will guide you step by step through real-world
                  projects and practical applications.
                </p>
                <h3
                  class="!text-lg md:!text-[22px] lg:!text-xl !font-semibold !mb-[15px] md:!mb-[20px] [&:not(:first-child)]:mt-[25px] md:[&:not(:first-child)]:mt-[35px] lg:[&:not(:first-child)]:mt-[45px]"
                >
                  Course Features
                </h3>
                <ul>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    45 in-depth lessons with hands-on coding
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Real-world projects: blog, e-commerce store, and portfolio
                    site
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Code-along exercises and quizzes
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Lifetime access and updates
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Downloadable resources and source code
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Certificate of completion
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Community Q&A and support
                  </li>
                </ul>
                <h3
                  class="!text-lg md:!text-[22px] lg:!text-xl !font-semibold !mb-[15px] md:!mb-[20px] [&:not(:first-child)]:mt-[25px] md:[&:not(:first-child)]:mt-[35px] lg:[&:not(:first-child)]:mt-[45px]"
                >
                  Who Should Enroll
                </h3>
                <ul>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Beginners with no prior coding experience
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Designers or marketers looking to build web apps
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Students preparing for software development careers
                  </li>
                  <li
                    class="relative mb-[5px] last:mb-0 md:text-[15px] lg:text-md ltr:pl-[14px] rtl:pl-[14px]"
                  >
                    <span
                      class="block w-[5px] h-[5px] rounded-full absolute top-1/2 -translate-y-1/2 bg-gray-500 ltr:left-0 rtl:right-0"
                    ></span>
                    Freelancers and entrepreneurs who want to create websites or
                    SaaS products
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane"
                :class="{ active: activeTab === 'tab2' }"
                id="tab2"
              >
                <div
                  class="p-[20px] md:p-[25px] xl:p-[30px] border border-gray-200 dark:border-gray-900 mb-[25px] md:mb-[30px] lg:mb-[40px] last:mb-0"
                >
                  <div class="flex items-center justify-between">
                    <h4
                      class="!text-md md:!text-lg lg:!text-[20px] !mb-0 text-gray-700 dark:text-gray-100"
                    >
                      Introduction to Web Development
                    </h4>
                    <div
                      class="w-[30px] h-[30px] md:w-[40px] md:h-[40px] rounded-full bg-white dark:bg-dark flex items-center justify-center text-[25px] text-gray-700 dark:text-gray-300"
                    >
                      <i class="ri-arrow-down-s-line"></i>
                    </div>
                  </div>
                  <ul class="mt-[20px] md:mt-[25px] lg:mt-[30px]">
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        How the web works
                      </div>
                      <div
                        class="relative mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-purple-500 text-white rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-play-line absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2 text-[22px]"
                            ></i>
                            Overview
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> visibility </i>

                        <lightgallery
                          :settings="{ speed: 500, plugins }"
                          class="absolute top-0 left-0 right-0 bottom-0"
                        >
                          <a
                            href="https://www.youtube.com/watch?v=WDlEBXD2I2k"
                            class="absolute top-0 left-0 right-0 bottom-0 z-[1]"
                          ></a>
                        </lightgallery>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Front-end vs. back-end overview
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            12:30 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Tools you'll need (Code editor, Browser, Git)
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            8:00 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                  </ul>
                </div>

                <div
                  class="p-[20px] md:p-[25px] xl:p-[30px] border border-gray-200 dark:border-gray-900 mb-[25px] md:mb-[30px] lg:mb-[40px] last:mb-0"
                >
                  <div class="flex items-center justify-between">
                    <h4
                      class="!text-md md:!text-lg lg:!text-[20px] !mb-0 text-gray-700 dark:text-gray-100"
                    >
                      HTML Fundamentals
                    </h4>
                    <div
                      class="w-[30px] h-[30px] md:w-[40px] md:h-[40px] rounded-full bg-white dark:bg-dark flex items-center justify-center text-[25px] text-gray-700 dark:text-gray-300"
                    >
                      <i class="ri-arrow-down-s-line"></i>
                    </div>
                  </div>
                  <ul class="mt-[20px] md:mt-[25px] lg:mt-[30px]">
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Structure of an HTML document
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            12:30 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Text formatting, links, and images
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            8:00 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Forms and semantic elements
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            11:00 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div
                  class="p-[20px] md:p-[25px] xl:p-[30px] border border-gray-200 dark:border-gray-900 mb-[25px] md:mb-[30px] lg:mb-[40px] last:mb-0"
                >
                  <div class="flex items-center justify-between">
                    <h4
                      class="!text-md md:!text-lg lg:!text-[20px] !mb-0 text-gray-700 dark:text-gray-100"
                    >
                      CSS & Responsive Design
                    </h4>
                    <div
                      class="w-[30px] h-[30px] md:w-[40px] md:h-[40px] rounded-full bg-white dark:bg-dark flex items-center justify-center text-[25px] text-gray-700 dark:text-gray-300"
                    >
                      <i class="ri-arrow-down-s-line"></i>
                    </div>
                  </div>
                  <ul class="mt-[20px] md:mt-[25px] lg:mt-[30px]">
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Selectors, colors, margins, and padding
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            12:30 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Flexbox and Grid layout
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            8:00 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                    <li
                      class="relative md:flex items-center justify-between border-b border-gray-200 dark:border-gray-900 pb-[15px] mb-[15px] last:border-b-0 last:mb-0 last:pb-0"
                    >
                      <div
                        class="relative md:text-[15px] lg:text-md font-medium text-gray-700 dark:text-gray-100 ltr:pl-[35px] rtl:pr-[35px]"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2"
                        >
                          description
                        </i>
                        Media queries and mobile-first design
                      </div>
                      <div
                        class="mt-[15px] md:mt-0 text-gray-700 dark:text-gray-100 flex items-center gap-[15px]"
                      >
                        <div
                          class="bg-orange-100 dark:bg-[#0a0e19] text-orange-600 rounded-[4px] px-[8px] py-[3.5px]"
                        >
                          <span
                            class="inline-block relative ltr:pl-[20px] rtl:pl-[20px]"
                          >
                            <i
                              class="ri-time-line absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 text-[18px]"
                            ></i>
                            11:00 Minutes
                          </span>
                        </div>
                        <i class="material-symbols-outlined"> lock </i>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div
                class="tab-pane"
                :class="{ active: activeTab === 'tab3' }"
                id="tab3"
              >
                <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px]">
                  <div class="lg:max-w-[225px] xl:max-w-[305px]">
                    <img
                      src="@/assets/images/lms-courses/instructor.jpg"
                      alt="instructor-image"
                      class="rounded-[15px]"
                    />
                    <div
                      class="flex items-center gap-[8px] mt-[20px] md:mt-[25px]"
                    >
                      <span class="block md:text-[15px] lg:text-md">
                        Follow Me:
                      </span>
                      <a
                        href="#"
                        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
                        target="_blank"
                      >
                        <i class="ri-facebook-box-fill"></i>
                      </a>
                      <a
                        href="#"
                        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
                        target="_blank"
                      >
                        <i class="ri-twitter-x-fill"></i>
                      </a>
                      <a
                        href="#"
                        class="leading-none inline-block transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500 text-[22px]"
                        target="_blank"
                      >
                        <i class="ri-linkedin-box-fill"></i>
                      </a>
                    </div>
                  </div>
                  <div
                    class="ltr:lg:-ml-[75px] rtl:lg:-mr-[75px] ltr:xl:-ml-[50px] rtl:xl:-mr-[50px]"
                  >
                    <h3
                      class="!text-md md:!text-lg lg:!text-[20px] !text-gray-700 dark:!text-gray-100 !mb-[12px]"
                    >
                      David Mercer
                    </h3>
                    <p class="md:text-[15px] lg:text-md">
                      Senior Full-Stack Engineer | Tech Educator | Mentor
                    </p>
                    <ul class="mb-[25px]">
                      <li
                        class="relative ltr:pl-[24px] rtl:pr-[24px] md:text-[15px] lg:text-md mb-[10px] last:mb-0"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 !text-[22px]"
                        >
                          location_on
                        </i>
                        San Francisco, CA
                      </li>
                      <li
                        class="relative ltr:pl-[24px] rtl:pr-[24px] md:text-[15px] lg:text-md mb-[10px] last:mb-0"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 !text-[22px]"
                        >
                          cast_for_education
                        </i>
                        <span class="font-bold">12+</span> Years of Industry
                        Experience
                      </li>
                      <li
                        class="relative ltr:pl-[24px] rtl:pr-[24px] md:text-[15px] lg:text-md mb-[10px] last:mb-0"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 !text-[22px]"
                        >
                          star
                        </i>
                        <span class="font-bold">4.9</span> Instructor Rating
                      </li>
                      <li
                        class="relative ltr:pl-[24px] rtl:pr-[24px] md:text-[15px] lg:text-md mb-[10px] last:mb-0"
                      >
                        <i
                          class="material-symbols-outlined absolute ltr:-left-[3px] rtl:-right-[3px] top-1/2 -translate-y-1/2 !text-[22px]"
                        >
                          school
                        </i>
                        <span class="font-bold">45,000+</span> Students Taught
                      </li>
                    </ul>
                    <h3
                      class="!text-md md:!text-lg lg:!text-[20px] !text-gray-700 dark:!text-gray-100 !mb-[12px]"
                    >
                      About David
                    </h3>
                    <p class="md:text-[15px] lg:text-md">
                      David is a passionate software engineer, educator, and
                      startup consultant who has spent over a decade building
                      web applications and helping developers grow. With a
                      background in both corporate and startup environments,
                      David brings a real-world perspective into every lesson —
                      from front-end design to backend architecture.
                    </p>
                    <p class="md:text-[15px] lg:text-md">
                      He’s contributed to open-source projects, mentored junior
                      developers, and led teams at top tech companies including
                      CodeNest and AppForge. David believes in teaching through
                      practical projects and simplifying complex ideas for every
                      learner level.
                    </p>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane"
                :class="{ active: activeTab === 'tab4' }"
                id="tab4"
              >
                <div
                  class="grid grid-cols-1 md:grid-cols-3 gap-[25px] items-center gap-[25px]"
                >
                  <div class="md:col-span-1">
                    <div
                      class="text-center bg-white dark:bg-[#0a0e19] rounded-md px-[20px] md:px-[25px] py-[25px] md:py-[55px] ltr:xl:mr-[15px] rtl:xl:ml-[15px]"
                    >
                      <h3
                        class="!mb-[7px] !leading-none !text-xl !text-primary-500"
                      >
                        4.7
                      </h3>
                      <div
                        class="flex items-center justify-center mb-[5px] text-orange-400 text-[20px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </div>
                      <span class="block md:text-md lg:text-lg">
                        10 ratings
                      </span>
                    </div>
                  </div>
                  <div class="md:col-span-2">
                    <div
                      class="flex items-center relative gap-[20px] mb-[10px] ltr:pr-[30px] rtl:pl-[30px] last:mb-0"
                    >
                      <div
                        class="flex items-center justify-center text-orange-400 text-[15px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                      </div>
                      <div
                        class="flex w-full h-[4px] overflow-hidden rounded-md bg-[#D5D9E2] dark:bg-[#172036]"
                      >
                        <div
                          class="flex flex-col justify-center overflow-hidden bg-[#FFC444] rounded-md"
                          style="width: 100%"
                        ></div>
                      </div>
                      <span
                        class="text-gray-700 dark:text-gray-200 absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2"
                      >
                        5
                      </span>
                    </div>
                    <div
                      class="flex items-center relative gap-[20px] mb-[10px] ltr:pr-[30px] rtl:pl-[30px] last:mb-0"
                    >
                      <div
                        class="flex items-center justify-center text-orange-400 text-[15px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                      </div>
                      <div
                        class="flex w-full h-[4px] overflow-hidden rounded-md bg-[#D5D9E2] dark:bg-[#172036]"
                      >
                        <div
                          class="flex flex-col justify-center overflow-hidden bg-[#FFC444] rounded-md"
                          style="width: 100%"
                        ></div>
                      </div>
                      <span
                        class="text-gray-700 dark:text-gray-200 absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2"
                      >
                        2
                      </span>
                    </div>
                    <div
                      class="flex items-center relative gap-[20px] mb-[10px] ltr:pr-[30px] rtl:pl-[30px] last:mb-0"
                    >
                      <div
                        class="flex items-center justify-center text-orange-400 text-[15px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                      </div>
                      <div
                        class="flex w-full h-[4px] overflow-hidden rounded-md bg-[#D5D9E2] dark:bg-[#172036]"
                      >
                        <div
                          class="flex flex-col justify-center overflow-hidden bg-[#FFC444] rounded-md"
                          style="width: 100%"
                        ></div>
                      </div>
                      <span
                        class="text-gray-700 dark:text-gray-200 absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2"
                      >
                        1
                      </span>
                    </div>
                    <div
                      class="flex items-center relative gap-[20px] mb-[10px] ltr:pr-[30px] rtl:pl-[30px] last:mb-0"
                    >
                      <div
                        class="flex items-center justify-center text-orange-400 text-[15px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                      </div>
                      <div
                        class="flex w-full h-[4px] overflow-hidden rounded-md bg-[#D5D9E2] dark:bg-[#172036]"
                      >
                        <div
                          class="flex flex-col justify-center overflow-hidden bg-[#FFC444] rounded-md"
                          style="width: 0%"
                        ></div>
                      </div>
                      <span
                        class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2"
                      >
                        0
                      </span>
                    </div>
                    <div
                      class="flex items-center relative gap-[20px] mb-[10px] ltr:pr-[30px] rtl:pl-[30px] last:mb-0"
                    >
                      <div
                        class="flex items-center justify-center text-orange-400 text-[15px] gap-[2px]"
                      >
                        <i class="ri-star-fill"></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                        <i
                          class="ri-star-line text-[#f6f5f3] dark:text-[#0e1321]"
                        ></i>
                      </div>
                      <div
                        class="flex w-full h-[4px] overflow-hidden rounded-md bg-[#D5D9E2] dark:bg-[#172036]"
                      >
                        <div
                          class="flex flex-col justify-center overflow-hidden bg-[#FFC444] rounded-md"
                          style="width: 0%"
                        ></div>
                      </div>
                      <span
                        class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2"
                      >
                        0
                      </span>
                    </div>
                  </div>
                </div>
                <div
                  class="h-[1px] bg-gray-200 dark:bg-[#172036] my-[25px] md:my-[35px] lg:my-[45px] xl:my-[60px]"
                ></div>
                <div
                  class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] xl:gap-[30px]"
                >
                  <img
                    src="@/assets/images/lms-courses/users/user6.jpg"
                    class="rounded-full w-[120px]"
                    alt="user-image"
                  />
                  <div>
                    <h3
                      class="!text-md md:!text-lg lg:!text-[20px] !text-gray-700 dark:!text-gray-100 !mb-[8px]"
                    >
                      David Mercer
                    </h3>
                    <span class="md:text-[15px] lg:text-md block mb-[8px]">
                      Senior Full-Stack Engineer | Tech Educator | Mentor
                    </span>
                    <div
                      class="flex items-center text-orange-400 text-md gap-[2px]"
                    >
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:col-span-1">
          <CourseOverview />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import CourseOverview from "./CourseOverview.vue";

import Lightgallery from "lightgallery/vue";
import lgVideo from "lightgallery/plugins/video";

import "lightgallery/css/lightgallery.css";
import "lightgallery/css/lg-video.css";

export default defineComponent({
  name: "CourseDetails",
  components: {
    CourseOverview,
    Lightgallery,
  },
  setup() {
    const activeTab = ref("tab1");

    const switchTab = (tabId: string) => {
      activeTab.value = tabId;
    };

    const plugins = ref([lgVideo]);

    return {
      activeTab,
      switchTab,
      plugins,
    };
  },
});
</script>
