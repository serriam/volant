<template>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Notifications') }}</h6>
                    </div>

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-globe"></span> Notifications <span
                                class="badge alert-danger">{{unreads.length}}</span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <notification-item v-for="unread in unreadNotifications" :unread="unread" :key="unread.id"></notification-item>
                            </li>
                        </ul>
                </div>
</template>

<script>
    export default {
        props: ['unreads', 'userId'],
        mounted() {
            console.log('Component mounted.');

            Echo.private('App.User.' + 1)
                .notification((notification) => {
                    console.log(notification);
                });
        }
    }
</script>
