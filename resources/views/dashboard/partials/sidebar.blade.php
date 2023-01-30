<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="#7367F0"
                  />
                  <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616"
                  />
                  <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616"
                  />
                  <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="#7367F0"
                  />
                </svg>
              </span>
            <span class="app-brand-text demo menu-text fw-bold">Site Nome</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Advogados Contrários">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Cadastros</span>
        </li>
        <li class="menu-item">
            <a href="{{ route('lawyers.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Advogados Contrários">Advogados Contrários</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('clientes.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Clientes">Clientes</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('printings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Impressos">Impressos</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('processos.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Processos">Processos</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Processos">Partes Contrárias</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Configurações</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Configurações">Configurações</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('banks.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Bancos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('courts.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Varas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('forums.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Foros</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('genders.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Gêneros</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('holidays.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Feriados</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('judges.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Juízes / Juizados Especiais</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('issuing-institutions.index') }}" class="menu-link">
                        <div data-i18n="Page 2">RG - Orgãos Emissores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('kinships.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Parentescos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('marital-status.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Estados Civis</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('occupations.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Profissões</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('situations.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Situações dos Processos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('commitment-situations.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Situações dos Compromissos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('procedural-conditions.index') }}" class="menu-link">
                        <div data-i18n="Page 2">Condições Processuais</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Financeiro</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Financeiro</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('accounts.index') }}" class="menu-link">
                        <div data-i18n="Connections">Contas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('categories.index') }}" class="menu-link">
                        <div data-i18n="Connections">Categorias</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('expenses.index') }}" class="menu-link">
                        <div data-i18n="Connections">Despesas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('incomes.index') }}" class="menu-link">
                        <div data-i18n="Connections">Pagamentos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('payment-methods.index') }}" class="menu-link">
                        <div data-i18n="Connections">Métodos de Pagamento</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Tipos</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Tipos">Tipos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('actions.index') }}" class="menu-link">
                        <div data-i18n="List">Ações</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('address.index') }}" class="menu-link">
                        <div data-i18n="List">Endereços</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('cases.index') }}" class="menu-link">
                        <div data-i18n="List">Processos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('clients.index') }}" class="menu-link">
                        <div data-i18n="List">Clientes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('defenders.index') }}" class="menu-link">
                        <div data-i18n="List">Defensores</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('justices.index') }}" class="menu-link">
                        <div data-i18n="List">Justiças</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('phones.index') }}" class="menu-link">
                        <div data-i18n="List">Telefones</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
