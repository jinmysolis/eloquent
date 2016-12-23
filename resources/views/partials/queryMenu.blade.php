 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Consultas Eloquent
                      <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{route('all')}}">
                              Todos los usuarioa(all)
                          </a>
                      </li>
                      
                      <li>
                          <a href="{{route('get','f')}}">
                              Todos los usuario (Femeninas)
                          </a>
                      </li>
                      
                      <li>
                          <a href="{{route('get','m')}}">
                              Todos los usuario(Masculinos)
                          </a>
                      </li>
                      
                       <li>
                          <a href="{{route('get-custom')}}">
                              Todos los usuario(Get con array)
                          </a>
                      </li>
                      
                  </ul>
                  
              </li>