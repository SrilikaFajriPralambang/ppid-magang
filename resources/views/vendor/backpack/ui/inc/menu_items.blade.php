{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Services" icon="la la-question" :link="backpack_url('service')" />
<x-backpack::menu-item title="Pages" icon="la la-question" :link="backpack_url('pages')" />
<x-backpack::menu-item title="Categories" icon="la la-question" :link="backpack_url('category')" />
<x-backpack::menu-item title="Information categories" icon="la la-question" :link="backpack_url('information-categories')" />
<x-backpack::menu-item title="Navigation links" icon="la la-question" :link="backpack_url('navigation-link')" />
<x-backpack::menu-item title="Information types" icon="la la-question" :link="backpack_url('information-types')" />