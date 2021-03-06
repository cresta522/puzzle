
    <div class="col-md-3 left_col">
        
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="/" class="site_title"><i class="fa fa-book fa-lg"></i> <span>{{ env('APP_NAME') }}</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <!-- magin用。 -->
                <div class="menu_section"></div>
                
                <div class="menu_section">
                    <ul class="nav side-menu">
                        <li>
                            <a><i class="fa fa-folder-o" aria-hidden="true"></i> ナンプレ <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/numpre/list">一覧</a></li>
                                <li><a href="/numpre/create">作成</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            
            </div>
            <!-- /sidebar menu -->
        </div>
    </div>
    
    
    <!--top navigation-->
    <div class="top_nav">
          <div class="nav_menu">
              <nav class="" role="navigation">
                  <div class="nav toggle">
                      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="">
                          @if (Auth::check() === true)
                              {{-- ログインされてたら --}}
                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <img src="/images/img.jpg" alt="">名無しの権兵衛
                                  <span class=" fa fa-twitter"></span>
                              </a>
                              <ul class="dropdown-menu dropdown-usermenu pull-right">
                                  <li><a href="/auth/twitter">Twitter認証</a></li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="badge bg-red pull-right">50%</span>
                                          <span>Settings</span>
                                      </a>
                                  </li>
                                  <li><a href="javascript:;">Help</a></li>
                                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                              </ul>
                          @else
                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class=" fa fa-twitter"></span>ユーザ情報
                              </a>
                              <ul class="dropdown-menu dropdown-usermenu pull-right">
                                  <li><a href="/auth/twitter">Twitter認証</a></li>
                                  <li>
                                      <a href="javascript:;">
                                          <span class="badge bg-red pull-right">50%</span>
                                          <span>Settings</span>
                                      </a>
                                  </li>
                                  <li><a href="javascript:;">Help</a></li>
                                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                              </ul>
                          @endif

                      </li>

                      <li role="presentation" class="dropdown">
                          {{-- バッジ --}}
                          {{--<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">--}}
                              {{--<i class="fa fa-envelope-o"></i>--}}
                              {{--<span class="badge bg-green">10</span>--}}
                          {{--</a>--}}
                          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                              <li>
                                  <a>
                                      <span class="image"><img src="/images/img.jpg" alt="Profile Image"></span>
                                      <span>
                                          <span>John Smith</span>
                                          <span class="time">3 mins ago</span>
                                      </span>
                                      <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span class="image"><img src="/images/img.jpg" alt="Profile Image"></span>
                                      <span>
                                          <span>John Smith</span>
                                          <span class="time">3 mins ago</span>
                                      </span>
                                      <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span class="image"><img src="/images/img.jpg" alt="Profile Image"></span>
                                      <span>
                                          <span>John Smith</span>
                                          <span class="time">3 mins ago</span>
                                      </span>
                                      <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span class="image"><img src="/images/img.jpg" alt="Profile Image"></span>
                                      <span>
                                          <span>John Smith</span>
                                          <span class="time">3 mins ago</span>
                                      </span>
                                      <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                  </a>
                              </li>
                              <li>
                                  <div class="text-center">
                                      <a>
                                          <strong>See All Alerts</strong>
                                          <i class="fa fa-angle-right"></i>
                                      </a>
                                  </div>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </nav>
          </div>
    </div>
    <!--/top navigation-->
