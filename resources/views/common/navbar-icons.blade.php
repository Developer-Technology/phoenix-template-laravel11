<ul class="navbar-nav navbar-nav-icons flex-row">
  @if ($navbarShape == 'default')
    <li class="nav-item">
      <div class="theme-control-toggle fa-icon-wait px-2">
        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
      </div>
    </li>
  @else
    <li class="nav-item">
      <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim">
        <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs-9 fw-bold">Dark</span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs-9 fw-bold">Light</span></label>
      </div>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal">
        <span class="d-inline-block" style="height:12px;width:12px;">
          <span data-feather="search" style="height:12px;width:12px;"></span>
        </span>
      </a>
    </li>
  @endif
  
  <li class="nav-item dropdown">
    <a class="nav-link" href="#" style="{!! $navbarShape == 'default' ? 'min-width: 2.25rem' : '' !!}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
      <span class="d-inline-block" style="{!! $navbarShape == 'default' ? 'height:20px;width:20px;' : 'height: 12px; width: 12px;' !!}">
        <span data-feather="bell" style="{!! $navbarShape == 'default' ? 'height:20px;width:20px;' : 'height: 12px; width: 12px;' !!}"></span>
      </span>
    </a>

    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
      <div class="card position-relative border-0">
        <div class="card-header p-2">
          <div class="d-flex justify-content-between">
            <h5 class="text-body-emphasis mb-0">Notificatons</h5>
            <button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="scrollbar-overlay" style="height: 27rem;">
            <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src={{ Vite::asset('resources/img/team/40x40/30.webp') }} alt="" />
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3">
                    <div class="avatar-name rounded-circle"><span>J</span></div>
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src={{ Vite::asset('resources/img/team/40x40/avatar.webp') }} alt="" />
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src={{ Vite::asset('resources/img/team/40x40/57.webp') }} alt="" />
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src={{ Vite::asset('resources/img/team/40x40/59.webp') }} alt="" />
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
            <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
              <div class="d-flex align-items-center justify-content-between position-relative">
                <div class="d-flex">
                  <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src={{ Vite::asset('resources/img/team/40x40/58.webp') }} alt="" />
                  </div>
                  <div class="flex-1 me-sm-3">
                    <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                    <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                    <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                  </div>
                </div>
                <div class="d-none d-sm-block">
                  <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer p-0 border-top border-translucent border-0">
          <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="pages/notifications.html">Notification history</a></div>
        </div>
      </div>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
      <svg {!! $navbarShape == 'default' ? 'width="16" height="16"' : 'width="10" height="10"' !!} " viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
        <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
        <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
        <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
        <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
        <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
        <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
        <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
      </svg></a>

    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
      <div class="card bg-body-emphasis position-relative border-0">
        <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
          <div class="row text-center align-items-center gx-0 gy-0">
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/behance.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/google-cloud.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/slack.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/gitlab.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/bitbucket.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/google-drive.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/trello.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/figma.webp') }} alt="" width="20" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/twitter.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/pinterest.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/ln.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/google-maps.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/google-photos.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
              </a></div>
            <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src={{ Vite::asset('resources/img/nav-icons/spotify.webp') }} alt="" width="30" />
                <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
              </a></div>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
      @if ($navbarShape == 'default')
        <div class="avatar avatar-l ">
          <img class="rounded-circle " src={{ Vite::asset('resources/img/team/40x40/57.webp') }} alt="" />
        </div>
      @else
        Olivia 
        <span class="d-inline-block" style="height: 10px; width: 10px;">
          <span class="fa-solid fa-chevron-down fs-10">
        </span>
      @endif
    </a>
    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
      <div class="card position-relative border-0">
        <div class="card-body p-0">
          <div class="text-center pt-4 pb-3">
            <div class="avatar avatar-xl ">
              <img class="rounded-circle " src={{ Vite::asset('resources/img/team/72x72/57.webp') }} alt="" />

            </div>
            <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
          </div>
          <div class="mb-3 mx-3">
            <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
          </div>
        </div>
        <div class="overflow-auto scrollbar" style="height: 10rem;">
          <ul class="nav d-flex flex-column mb-2 pb-1">
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
          </ul>
        </div>
        <div class="card-footer p-0 border-top border-translucent">
          <ul class="nav d-flex flex-column my-3">
            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
          </ul>
          <hr />
          <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
          <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
        </div>
      </div>
    </div>
  </li>
</ul>

