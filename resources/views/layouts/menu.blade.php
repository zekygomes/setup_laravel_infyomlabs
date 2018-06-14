<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i> <span>Usuários</span></a>
</li>
<li class="{{ Request::is('examples*') ? 'active' : '' }}">
    <a href="{!! route('examples.index') !!}"><i class="fa fa-edit"></i><span>Examples</span></a>
</li>

