<x-admin-layout>
    <header class="header">
        <h1>{{ __('Dashboard') }}</h1>
    </header>

    <main class="main container dashboard">
        <div class="add-btn-group">
            <a class="add-btn btn-icon-add" title="add new event" href="/events/create?return_url=/dashboard"></a>
        </div>    

        <div class="dashboard-row">  

            @include('components.dashboard-card')  

            @include('components.dashboard-card')  

            @include('components.dashboard-card')  

            <!-- {include file='components/dashboard-card.tpl' title='Overdue' events=$overdue class='dashboard-item'}

            {include file='components/dashboard-card.tpl' title='Today' events=$today class='dashboard-item'}

            {include file='components/dashboard-card.tpl' title='Tomorrow' events=$tomorrow class='dashboard-item'} -->
        </div>

        <div class="dashboard-row-second">

        @include('components.dashboard-card')  

            <!-- {include file='components/dashboard-card.tpl' title='In week' events=$in_week class='dashboard-item'} -->
        </div>
    </main>

</x-admin-layout>
