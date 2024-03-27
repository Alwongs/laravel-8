<x-admin-layout>
    <main class="main container dashboard">

        <section class="reminder-section">
            <div class="add-btn-group">
                <a class="add-btn btn-icon-add" title="add new event" href="{{ route('events.create') }}?return_url=dashboard"></a>
            </div>    

            <div class="dashboard-row">  
                <x-dashboard-card :events="$overdue" :title="'overdue'" :class="'overdue'"/>
                <x-dashboard-card :events="$today" :title="'today'" :class="'today'"/>
                <x-dashboard-card :events="$tomorrow" :title="'tomorrow'" :class="'tomorrow'"/>
            </div>

            <div class="dashboard-row-second">
                <x-dashboard-card :events="$in_week" :title="'in week'" :class="'in-week'"/>
            </div>
        </section>



        <section class="tasks">
            <h2>Taks</h2>
            <ul>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
                <li>task 1</li>
                <li>task 2</li>
            </ul>
        </seciton>

    </main>
</x-admin-layout>
