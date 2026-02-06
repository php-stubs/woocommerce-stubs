<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/php-stubs/woocommerce-stubs
 */

namespace {
    /**
     * Class ActionScheduler_ActionClaim
     */
    class ActionScheduler_ActionClaim
    {
        /**
         * Claim ID.
         *
         * @var string
         */
        private $id = '';
        /**
         * Claimed action IDs.
         *
         * @var int[]
         */
        private $action_ids = array();
        /**
         * Construct.
         *
         * @param string $id Claim ID.
         * @param int[]  $action_ids Action IDs.
         */
        public function __construct($id, array $action_ids)
        {
        }
        /**
         * Get claim ID.
         */
        public function get_id()
        {
        }
        /**
         * Get IDs of claimed actions.
         */
        public function get_actions()
        {
        }
    }
    /**
     * Class ActionScheduler_ActionFactory
     */
    class ActionScheduler_ActionFactory
    {
        /**
         * Return stored actions for given params.
         *
         * @param string                        $status The action's status in the data store.
         * @param string                        $hook The hook to trigger when this action runs.
         * @param array                         $args Args to pass to callbacks when the hook is triggered.
         * @param ActionScheduler_Schedule|null $schedule The action's schedule.
         * @param string                        $group A group to put the action in.
         * phpcs:ignore Squiz.Commenting.FunctionComment.ExtraParamComment
         * @param int                           $priority The action priority.
         *
         * @return ActionScheduler_Action An instance of the stored action.
         */
        public function get_stored_action($status, $hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Enqueue an action to run one time, as soon as possible (rather a specific scheduled time).
         *
         * This method creates a new action using the NullSchedule. In practice, this results in an action scheduled to
         * execute "now". Therefore, it will generally run as soon as possible but is not prioritized ahead of other actions
         * that are already past-due.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function async($hook, $args = array(), $group = '')
        {
        }
        /**
         * Same as async, but also supports $unique param.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether to ensure the action is unique.
         *
         * @return int The ID of the stored action.
         */
        public function async_unique($hook, $args = array(), $group = '', $unique = \true)
        {
        }
        /**
         * Create single action.
         *
         * @param string $hook  The hook to trigger when this action runs.
         * @param array  $args  Args to pass when the hook is triggered.
         * @param int    $when  Unix timestamp when the action will run.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function single($hook, $args = array(), $when = \null, $group = '')
        {
        }
        /**
         * Create single action only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $when Unix timestamp when the action will run.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         */
        public function single_unique($hook, $args = array(), $when = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $first Unix timestamp for the first run.
         * @param int    $interval Seconds between runs.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a given interval only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $first Unix timestamp for the first run.
         * @param int    $interval Seconds between runs.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         */
        public function recurring_unique($hook, $args = array(), $first = \null, $interval = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int    $schedule A cron definition string.
         * @param string $group A group to put the action in.
         *
         * @return int The ID of the stored action.
         */
        public function cron($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '')
        {
        }
        /**
         * Create the first instance of an action recurring on a Cron schedule only if there is no pending or running action with same name and params.
         *
         * @param string $hook The hook to trigger when this action runs.
         * @param array  $args Args to pass when the hook is triggered.
         * @param int    $base_timestamp The first instance of the action will be scheduled
         *        to run at a time calculated after this timestamp matching the cron
         *        expression. This can be used to delay the first instance of the action.
         * @param int    $schedule A cron definition string.
         * @param string $group A group to put the action in.
         * @param bool   $unique Whether action scheduled should be unique.
         *
         * @return int The ID of the stored action.
         **/
        public function cron_unique($hook, $args = array(), $base_timestamp = \null, $schedule = \null, $group = '', $unique = \true)
        {
        }
        /**
         * Create a successive instance of a recurring or cron action.
         *
         * Importantly, the action will be rescheduled to run based on the current date/time.
         * That means when the action is scheduled to run in the past, the next scheduled date
         * will be pushed forward. For example, if a recurring action set to run every hour
         * was scheduled to run 5 seconds ago, it will be next scheduled for 1 hour in the
         * future, which is 1 hour and 5 seconds from when it was last scheduled to run.
         *
         * Alternatively, if the action is scheduled to run in the future, and is run early,
         * likely via manual intervention, then its schedule will change based on the time now.
         * For example, if a recurring action set to run every day, and is run 12 hours early,
         * it will run again in 24 hours, not 36 hours.
         *
         * This slippage is less of an issue with Cron actions, as the specific run time can
         * be set for them to run, e.g. 1am each day. In those cases, and entire period would
         * need to be missed before there was any change is scheduled, e.g. in the case of an
         * action scheduled for 1am each day, the action would need to run an entire day late.
         *
         * @param ActionScheduler_Action $action The existing action.
         *
         * @return string The ID of the stored action
         * @throws InvalidArgumentException If $action is not a recurring action.
         */
        public function repeat($action)
        {
        }
        /**
         * Creates a scheduled action.
         *
         * This general purpose method can be used in place of specific methods such as async(),
         * async_unique(), single() or single_unique(), etc.
         *
         * @internal Not intended for public use, should not be overridden by subclasses.
         *
         * @param array $options {
         *     Describes the action we wish to schedule.
         *
         *     @type string     $type      Must be one of 'async', 'cron', 'recurring', or 'single'.
         *     @type string     $hook      The hook to be executed.
         *     @type array      $arguments Arguments to be passed to the callback.
         *     @type string     $group     The action group.
         *     @type bool       $unique    If the action should be unique.
         *     @type int        $when      Timestamp. Indicates when the action, or first instance of the action in the case
         *                                 of recurring or cron actions, becomes due.
         *     @type int|string $pattern   Recurrence pattern. This is either an interval in seconds for recurring actions
         *                                 or a cron expression for cron actions.
         *     @type int        $priority  Lower values means higher priority. Should be in the range 0-255.
         * }
         *
         * @return int The action ID. Zero if there was an error scheduling the action.
         */
        public function create(array $options = array())
        {
        }
        /**
         * Save action to database.
         *
         * @param ActionScheduler_Action $action Action object to save.
         *
         * @return int The ID of the stored action
         */
        protected function store(\ActionScheduler_Action $action)
        {
        }
        /**
         * Store action if it's unique.
         *
         * @param ActionScheduler_Action $action Action object to store.
         *
         * @return int ID of the created action. Will be 0 if action was not created.
         */
        protected function store_unique_action(\ActionScheduler_Action $action)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView_Deprecated
     *
     * Store deprecated public functions previously found in the ActionScheduler_AdminView class.
     * Keeps them out of the way of the main class.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView_Deprecated
    {
        /**
         * Adjust parameters for custom post type.
         *
         * @param array $args Args.
         */
        public function action_scheduler_post_type_args($args)
        {
        }
        /**
         * Customise the post status related views displayed on the Scheduled Actions administration screen.
         *
         * @param array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         * @return array $views An associative array of views and view labels which can be used to filter the 'scheduled-action' posts displayed on the Scheduled Actions administration screen.
         */
        public function list_table_views($views)
        {
        }
        /**
         * Do not include the "Edit" action for the Scheduled Actions administration screen.
         *
         * Hooked to the 'bulk_actions-edit-action-scheduler' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public function bulk_actions($actions)
        {
        }
        /**
         * Completely customer the columns displayed on the Scheduled Actions administration screen.
         *
         * Because we can't filter the content of the default title and date columns, we need to recreate our own
         * custom columns for displaying those post fields. For the column content, @see self::list_table_column_content().
         *
         * @param array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that are use for the table on the Scheduled Actions administration screen.
         */
        public function list_table_columns($columns)
        {
        }
        /**
         * Make our custom title & date columns use defaulting title & date sorting.
         *
         * @param array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         * @return array $columns An associative array of columns that can be used to sort the table on the Scheduled Actions administration screen.
         */
        public static function list_table_sortable_columns($columns)
        {
        }
        /**
         * Print the content for our custom columns.
         *
         * @param string $column_name The key for the column for which we should output our content.
         * @param int    $post_id The ID of the 'scheduled-action' post for which this row relates.
         */
        public static function list_table_column_content($column_name, $post_id)
        {
        }
        /**
         * Hide the inline "Edit" action for all 'scheduled-action' posts.
         *
         * Hooked to the 'post_row_actions' filter.
         *
         * @param array   $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         * @param WP_Post $post The 'scheduled-action' post object.
         * @return array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
         */
        public static function row_actions($actions, $post)
        {
        }
        /**
         * Run an action when triggered from the Action Scheduler administration screen.
         *
         * @codeCoverageIgnore
         */
        public static function maybe_execute_action()
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This function goes one step
         * further to display two degrees of accuracy.
         *
         * Based on Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @return void
         */
        public static function admin_notices()
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string   $orderby MySQL orderby string.
         * @param WP_Query $query Instance of a WP_Query object.
         * @return void
         */
        public function custom_orderby($orderby, $query)
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string   $search MySQL search string.
         * @param WP_Query $query Instance of a WP_Query object.
         * @return void
         */
        public function search_post_password($search, $query)
        {
        }
        /**
         * Change messages when a scheduled action is updated.
         *
         * @param  array $messages Messages.
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
    {
        /**
         * Instance.
         *
         * @var null|self
         */
        private static $admin_view = \null;
        /**
         * Screen ID.
         *
         * @var string
         */
        private static $screen_id = 'tools_page_action-scheduler';
        /**
         * ActionScheduler_ListTable instance.
         *
         * @var ActionScheduler_ListTable
         */
        protected $list_table;
        /**
         * Get instance.
         *
         * @return ActionScheduler_AdminView
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Print system status report.
         */
        public function system_status_report()
        {
        }
        /**
         * Registers action-scheduler into WooCommerce > System status.
         *
         * @param array $tabs An associative array of tab key => label.
         * @return array $tabs An associative array of tab key => label, including Action Scheduler's tabs
         */
        public function register_system_status_tab(array $tabs)
        {
        }
        /**
         * Include Action Scheduler's administration under the Tools menu.
         *
         * A menu under the Tools menu is important for backward compatibility (as that's
         * where it started), and also provides more convenient access than the WooCommerce
         * System Status page, and for sites where WooCommerce isn't active.
         */
        public function register_menu()
        {
        }
        /**
         * Triggers processing of any pending actions.
         */
        public function process_admin_ui()
        {
        }
        /**
         * Renders the Admin UI
         */
        public function render_admin_ui()
        {
        }
        /**
         * Get the admin UI object and process any requested actions.
         *
         * @return ActionScheduler_ListTable
         */
        protected function get_list_table()
        {
        }
        /**
         * Action: admin_notices
         *
         * Maybe check past-due actions, and print notice.
         *
         * @uses $this->check_pastdue_actions()
         */
        public function maybe_check_pastdue_actions()
        {
        }
        /**
         * Check past-due actions, and print notice.
         */
        protected function check_pastdue_actions()
        {
        }
        /**
         * Provide more information about the screen and its data in the help tab.
         */
        public function add_help_tabs()
        {
        }
    }
    /**
     * ActionScheduler_AsyncRequest_QueueRunner class.
     */
    class ActionScheduler_AsyncRequest_QueueRunner extends \WP_Async_Request
    {
        /**
         * Data store for querying actions
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * Prefix for ajax hooks
         *
         * @var string
         */
        protected $prefix = 'as';
        /**
         * Action for ajax hooks
         *
         * @var string
         */
        protected $action = 'async_request_queue_runner';
        /**
         * Initiate new async request.
         *
         * @param ActionScheduler_Store $store Store object.
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Handle async requests
         *
         * Run a queue, and maybe dispatch another async request to run another queue
         * if there are still pending actions after completing a queue in this request.
         */
        protected function handle()
        {
        }
        /**
         * If the async request runner is needed and allowed to run, dispatch a request.
         */
        public function maybe_dispatch()
        {
        }
        /**
         * Only allow async requests when needed.
         *
         * Also allow 3rd party code to disable running actions via async requests.
         */
        protected function allow()
        {
        }
        /**
         * Chaining async requests can crash MySQL. A brief sleep call in PHP prevents that.
         */
        protected function get_sleep_seconds()
        {
        }
    }
    /**
     * Class ActionScheduler_Compatibility
     */
    class ActionScheduler_Compatibility
    {
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
         *
         * @link https://secure.php.net/manual/en/function.ini-get.php
         * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         * @return int An integer byte value.
         */
        public static function convert_hr_to_bytes($value)
        {
        }
        /**
         * Attempts to raise the PHP memory limit for memory intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it.
         *
         * Wrapper for wp_raise_memory_limit(), added in WordPress v4.6.0
         *
         * @return bool|int|string The limit that was set or false on failure.
         */
        public static function raise_memory_limit()
        {
        }
        /**
         * Attempts to raise the PHP timeout for time intensive processes.
         *
         * Only allows raising the existing limit and prevents lowering it. Wrapper for wc_set_time_limit(), when available.
         *
         * @param int $limit The time limit in seconds.
         */
        public static function raise_time_limit($limit = 0)
        {
        }
    }
    /**
     * Class ActionScheduler_DataController
     *
     * The main plugin/initialization class for the data stores.
     *
     * Responsible for hooking everything up with WordPress.
     *
     * @package Action_Scheduler
     *
     * @since 3.0.0
     */
    class ActionScheduler_DataController
    {
        /** Action data store class name. */
        const DATASTORE_CLASS = 'ActionScheduler_DBStore';
        /** Logger data store class name. */
        const LOGGER_CLASS = 'ActionScheduler_DBLogger';
        /** Migration status option name. */
        const STATUS_FLAG = 'action_scheduler_migration_status';
        /** Migration status option value. */
        const STATUS_COMPLETE = 'complete';
        /** Migration minimum required PHP version. */
        const MIN_PHP_VERSION = '5.5';
        /**
         * Instance.
         *
         * @var ActionScheduler_DataController
         */
        private static $instance;
        /**
         * Sleep time in seconds.
         *
         * @var int
         */
        private static $sleep_time = 0;
        /**
         * Tick count required for freeing memory.
         *
         * @var int
         */
        private static $free_ticks = 50;
        /**
         * Get a flag indicating whether the migration environment dependencies are met.
         *
         * @return bool
         */
        public static function dependencies_met()
        {
        }
        /**
         * Get a flag indicating whether the migration is complete.
         *
         * @return bool Whether the flag has been set marking the migration as complete
         */
        public static function is_migration_complete()
        {
        }
        /**
         * Mark the migration as complete.
         */
        public static function mark_migration_complete()
        {
        }
        /**
         * Unmark migration when a plugin is de-activated. Will not work in case of silent activation, for example in an update.
         * We do this to mitigate the bug of lost actions which happens if there was an AS 2.x to AS 3.x migration in the past, but that plugin is now
         * deactivated and the site was running on AS 2.x again.
         */
        public static function mark_migration_incomplete()
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public static function set_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public static function set_logger_class($class)
        {
        }
        /**
         * Set the sleep time in seconds.
         *
         * @param integer $sleep_time The number of seconds to pause before resuming operation.
         */
        public static function set_sleep_time($sleep_time)
        {
        }
        /**
         * Set the tick count required for freeing memory.
         *
         * @param integer $free_ticks The number of ticks to free memory on.
         */
        public static function set_free_ticks($free_ticks)
        {
        }
        /**
         * Free memory if conditions are met.
         *
         * @param int $ticks Current tick count.
         */
        public static function maybe_free_memory($ticks)
        {
        }
        /**
         * Reduce memory footprint by clearing the database query and object caches.
         */
        public static function free_memory()
        {
        }
        /**
         * Connect to table datastores if migration is complete.
         * Otherwise, proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * ActionScheduler DateTime class.
     *
     * This is a custom extension to DateTime that
     */
    class ActionScheduler_DateTime extends \DateTime
    {
        /**
         * UTC offset.
         *
         * Only used when a timezone is not set. When a timezone string is
         * used, this will be set to 0.
         *
         * @var int
         */
        protected $utcOffset = 0;
        // phpcs:ignore WordPress.NamingConventions.ValidVariableName.PropertyNotSnakeCase
        /**
         * Get the unix timestamp of the current object.
         *
         * Missing in PHP 5.2 so just here so it can be supported consistently.
         *
         * @return int
         */
        #[\ReturnTypeWillChange]
        public function getTimestamp()
        {
        }
        /**
         * Set the UTC offset.
         *
         * This represents a fixed offset instead of a timezone setting.
         *
         * @param string|int $offset UTC offset value.
         */
        public function setUtcOffset($offset)
        {
        }
        /**
         * Returns the timezone offset.
         *
         * @return int
         * @link http://php.net/manual/en/datetime.getoffset.php
         */
        #[\ReturnTypeWillChange]
        public function getOffset()
        {
        }
        /**
         * Set the TimeZone associated with the DateTime
         *
         * @param DateTimeZone $timezone Timezone object.
         *
         * @return static
         * @link http://php.net/manual/en/datetime.settimezone.php
         */
        #[\ReturnTypeWillChange]
        public function setTimezone($timezone)
        {
        }
        /**
         * Get the timestamp with the WordPress timezone offset added or subtracted.
         *
         * @since  3.0.0
         * @return int
         */
        public function getOffsetTimestamp()
        {
        }
    }
    /**
     * ActionScheduler Exception Interface.
     *
     * Facilitates catching Exceptions unique to Action Scheduler.
     *
     * @package ActionScheduler
     * @since 2.1.0
     */
    interface ActionScheduler_Exception
    {
    }
    /**
     * Class ActionScheduler_FatalErrorMonitor
     */
    class ActionScheduler_FatalErrorMonitor
    {
        /**
         * ActionScheduler_ActionClaim instance.
         *
         * @var ActionScheduler_ActionClaim
         */
        private $claim = \null;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store = \null;
        /**
         * Current action's ID.
         *
         * @var int
         */
        private $action_id = 0;
        /**
         * Construct.
         *
         * @param ActionScheduler_Store $store Action store.
         */
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        /**
         * Start monitoring.
         *
         * @param ActionScheduler_ActionClaim $claim Claimed actions.
         */
        public function attach(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Stop monitoring.
         */
        public function detach()
        {
        }
        /**
         * Track specified action.
         *
         * @param int $action_id Action ID to track.
         */
        public function track_current_action($action_id)
        {
        }
        /**
         * Un-track action.
         */
        public function untrack_action()
        {
        }
        /**
         * Handle unexpected shutdown.
         */
        public function handle_unexpected_shutdown()
        {
        }
    }
    /**
     * InvalidAction Exception.
     *
     * Used for identifying actions that are invalid in some way.
     *
     * @package ActionScheduler
     */
    class ActionScheduler_InvalidActionException extends \InvalidArgumentException implements \ActionScheduler_Exception
    {
        /**
         * Create a new exception when the action's schedule cannot be fetched.
         *
         * @param string $action_id The action ID with bad args.
         * @param mixed  $schedule  Passed schedule.
         * @return static
         */
        public static function from_schedule($action_id, $schedule)
        {
        }
        /**
         * Create a new exception when the action's args cannot be decoded to an array.
         *
         * @param string $action_id The action ID with bad args.
         * @param mixed  $args      Passed arguments.
         * @return static
         */
        public static function from_decoding_args($action_id, $args = array())
        {
        }
    }
    /**
     * Action Scheduler Abstract List Table class
     *
     * This abstract class enhances WP_List_Table making it ready to use.
     *
     * By extending this class we can focus on describing how our table looks like,
     * which columns needs to be shown, filter, ordered by and more and forget about the details.
     *
     * This class supports:
     *  - Bulk actions
     *  - Search
     *  - Sortable columns
     *  - Automatic translations of the columns
     *
     * @codeCoverageIgnore
     * @since  2.0.0
     */
    abstract class ActionScheduler_Abstract_ListTable extends \WP_List_Table
    {
        /**
         * The table name
         *
         * @var string
         */
        protected $table_name;
        /**
         * Package name, used to get options from WP_List_Table::get_items_per_page.
         *
         * @var string
         */
        protected $package;
        /**
         * How many items do we render per page?
         *
         * @var int
         */
        protected $items_per_page = 10;
        /**
         * Enables search in this table listing. If this array
         * is empty it means the listing is not searchable.
         *
         * @var array
         */
        protected $search_by = array();
        /**
         * Columns to show in the table listing. It is a key => value pair. The
         * key must much the table column name and the value is the label, which is
         * automatically translated.
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Defines the row-actions. It expects an array where the key
         * is the column name and the value is an array of actions.
         *
         * The array of actions are key => value, where key is the method name
         * (with the prefix row_action_<key>) and the value is the label
         * and title.
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The Primary key of our table
         *
         * @var string
         */
        protected $ID = 'ID';
        /**
         * Enables sorting, it expects an array
         * of columns (the column names are the values)
         *
         * @var array
         */
        protected $sort_by = array();
        /**
         * The default sort order
         *
         * @var string
         */
        protected $filter_by = array();
        /**
         * The status name => count combinations for this table's items. Used to display status filters.
         *
         * @var array
         */
        protected $status_counts = array();
        /**
         * Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
         *
         * @var array
         */
        protected $admin_notices = array();
        /**
         * Localised string displayed in the <h1> element above the able.
         *
         * @var string
         */
        protected $table_header;
        /**
         * Enables bulk actions. It must be an array where the key is the action name
         * and the value is the label (which is translated automatically). It is important
         * to notice that it will check that the method exists (`bulk_$name`) and will throw
         * an exception if it does not exists.
         *
         * This class will automatically check if the current request has a bulk action, will do the
         * validations and afterwards will execute the bulk method, with two arguments. The first argument
         * is the array with primary keys, the second argument is a string with a list of the primary keys,
         * escaped and ready to use (with `IN`).
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Makes translation easier, it basically just wraps
         * `_x` with some default (the package name).
         *
         * @param string $text The new text to translate.
         * @param string $context The context of the text.
         * @return string|void The translated text.
         *
         * @deprecated 3.0.0 Use `_x()` instead.
         */
        protected function translate($text, $context = '')
        {
        }
        /**
         * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
         * also validates that the bulk method handler exists. It throws an exception because
         * this is a library meant for developers and missing a bulk method is a development-time error.
         *
         * @return array
         *
         * @throws RuntimeException Throws RuntimeException when the bulk action does not have a callback method.
         */
        protected function get_bulk_actions()
        {
        }
        /**
         * Checks if the current request has a bulk action. If that is the case it will validate and will
         * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
         * the previous page removing the current arguments that makes this request a bulk action.
         */
        protected function process_bulk_action()
        {
        }
        /**
         * Default code for deleting entries.
         * validated already by process_bulk_action()
         *
         * @param array  $ids ids of the items to delete.
         * @param string $ids_sql the sql for the ids.
         * @return void
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Prepares the _column_headers property which is used by WP_Table_List at rendering.
         * It merges the columns and the sortable columns.
         */
        protected function prepare_column_headers()
        {
        }
        /**
         * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
         * expects
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Returns the columns names for rendering. It adds a checkbox for selecting everything
         * as the first column
         */
        public function get_columns()
        {
        }
        /**
         * Get prepared LIMIT clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared LIMIT clause for items query.
         */
        protected function get_items_query_limit()
        {
        }
        /**
         * Returns the number of items to offset/skip for this current view.
         *
         * @return int
         */
        protected function get_items_offset()
        {
        }
        /**
         * Get prepared OFFSET clause for items query
         *
         * @global wpdb $wpdb
         *
         * @return string Prepared OFFSET clause for items query.
         */
        protected function get_items_query_offset()
        {
        }
        /**
         * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
         * columns are sortable. This requests validates the orderby $_GET parameter is a valid
         * column and sortable. It will also use order (ASC|DESC) using DESC by default.
         */
        protected function get_items_query_order()
        {
        }
        /**
         * Querystring arguments to persist between form submissions.
         *
         * @since 3.7.3
         *
         * @return string[]
         */
        protected function get_request_query_args_to_persist()
        {
        }
        /**
         * Return the sortable column specified for this request to order the results by, if any.
         *
         * @return string
         */
        protected function get_request_orderby()
        {
        }
        /**
         * Return the sortable column order specified for this request.
         *
         * @return string
         */
        protected function get_request_order()
        {
        }
        /**
         * Return the status filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_status()
        {
        }
        /**
         * Return the search filter for this request, if any.
         *
         * @return string
         */
        protected function get_request_search_query()
        {
        }
        /**
         * Process and return the columns name. This is meant for using with SQL, this means it
         * always includes the primary key.
         *
         * @return array
         */
        protected function get_table_columns()
        {
        }
        /**
         * Check if the current request is doing a "full text" search. If that is the case
         * prepares the SQL to search texts using LIKE.
         *
         * If the current request does not have any search or if this list table does not support
         * that feature it will return an empty string.
         *
         * @return string
         */
        protected function get_items_query_search()
        {
        }
        /**
         * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
         * any data sent by the user it validates that it is a valid option.
         */
        protected function get_items_query_filters()
        {
        }
        /**
         * Prepares the data to feed WP_Table_List.
         *
         * This has the core for selecting, sorting and filtering data. To keep the code simple
         * its logic is split among many methods (get_items_query_*).
         *
         * Beside populating the items this function will also count all the records that matches
         * the filtering criteria and will do fill the pagination variables.
         */
        public function prepare_items()
        {
        }
        /**
         * Display the table.
         *
         * @param string $which The name of the table.
         */
        public function extra_tablenav($which)
        {
        }
        /**
         * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
         * are serialized). This can be override in child classes for further data transformation.
         *
         * @param array $items Items array.
         */
        protected function set_items(array $items)
        {
        }
        /**
         * Renders the checkbox for each row, this is the first column and it is named ID regardless
         * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
         * name transformation though using `$this->ID`.
         *
         * @param array $row The row to render.
         */
        public function column_cb($row)
        {
        }
        /**
         * Renders the row-actions.
         *
         * This method renders the action menu, it reads the definition from the $row_actions property,
         * and it checks that the row action method exists before rendering it.
         *
         * @param array  $row Row to be rendered.
         * @param string $column_name Column name.
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Process the bulk actions.
         *
         * @return void
         */
        protected function process_row_actions()
        {
        }
        /**
         * Default column formatting, it will escape everything for security.
         *
         * @param array  $item The item array.
         * @param string $column_name Column name to display.
         *
         * @return string
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_header()
        {
        }
        /**
         * Display the table heading and search query, if any
         */
        protected function display_admin_notices()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Renders the table list, we override the original class to render the table inside a form
         * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
         * forget about any extra HTML.
         */
        protected function display_table()
        {
        }
        /**
         * Process any pending actions.
         */
        public function process_actions()
        {
        }
        /**
         * Render the list table page, including header, notices, status filters and table.
         */
        public function display_page()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_placeholder()
        {
        }
        /**
         * Gets the screen per_page option name.
         *
         * @return string
         */
        protected function get_per_page_option_name()
        {
        }
    }
    /**
     * Implements the admin view of the actions.
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_ListTable extends \ActionScheduler_Abstract_ListTable
    {
        /**
         * The package name.
         *
         * @var string
         */
        protected $package = 'action-scheduler';
        /**
         * Columns to show (name => label).
         *
         * @var array
         */
        protected $columns = array();
        /**
         * Actions (name => label).
         *
         * @var array
         */
        protected $row_actions = array();
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * A logger to use for getting action logs to display
         *
         * @var ActionScheduler_Logger
         */
        protected $logger;
        /**
         * A ActionScheduler_QueueRunner runner instance (or child class)
         *
         * @var ActionScheduler_QueueRunner
         */
        protected $runner;
        /**
         * Bulk actions. The key of the array is the method name of the implementation.
         * Example: bulk_<key>(array $ids, string $sql_in).
         *
         * See the comments in the parent class for further details
         *
         * @var array
         */
        protected $bulk_actions = array();
        /**
         * Flag variable to render our notifications, if any, once.
         *
         * @var bool
         */
        protected static $did_notification = \false;
        /**
         * Array of seconds for common time periods, like week or month, alongside an internationalised string representation, i.e. "Day" or "Days"
         *
         * @var array
         */
        private static $time_periods;
        /**
         * Sets the current data store object into `store->action` and initialises the object.
         *
         * @param ActionScheduler_Store       $store Store object.
         * @param ActionScheduler_Logger      $logger Logger object.
         * @param ActionScheduler_QueueRunner $runner Runner object.
         */
        public function __construct(\ActionScheduler_Store $store, \ActionScheduler_Logger $logger, \ActionScheduler_QueueRunner $runner)
        {
        }
        /**
         * Handles setting the items_per_page option for this screen.
         *
         * @param mixed  $status Default false (to skip saving the current option).
         * @param string $option Screen option name.
         * @param int    $value  Screen option value.
         * @return int
         */
        public function set_items_per_page_option($status, $option, $value)
        {
        }
        /**
         * Convert an interval of seconds into a two part human friendly string.
         *
         * The WordPress human_time_diff() function only calculates the time difference to one degree, meaning
         * even if an action is 1 day and 11 hours away, it will display "1 day". This function goes one step
         * further to display two degrees of accuracy.
         *
         * Inspired by the Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @param int $periods_to_include Depth of time periods to include, e.g. for an interval of 70, and $periods_to_include of 2, both minutes and seconds would be included. With a value of 1, only minutes would be included.
         * @return string A human friendly string representation of the interval.
         */
        private static function human_interval($interval, $periods_to_include = 2)
        {
        }
        /**
         * Returns the recurrence of an action or 'Non-repeating'. The output is human readable.
         *
         * @param ActionScheduler_Action $action Action object.
         *
         * @return string
         */
        protected function get_recurrence($action)
        {
        }
        /**
         * Serializes the argument of an action to render it in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table.
         *
         * @return string
         */
        public function column_args(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param array $row Action array.
         * @return string
         */
        public function column_log_entries(array $row)
        {
        }
        /**
         * Prints the logs entries inline. We do so to avoid loading Javascript and other hacks to show it in a modal.
         *
         * @param ActionScheduler_LogEntry $log_entry Log entry object.
         * @param DateTimezone             $timezone Timestamp.
         * @return string
         */
        protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
        {
        }
        /**
         * Only display row actions for pending actions.
         *
         * @param array  $row         Row to render.
         * @param string $column_name Current row.
         *
         * @return string
         */
        protected function maybe_render_actions($row, $column_name)
        {
        }
        /**
         * Renders admin notifications
         *
         * Notifications:
         *  1. When the maximum number of tasks are being executed simultaneously.
         *  2. Notifications when a task is manually executed.
         *  3. Tables are missing.
         */
        public function display_admin_notices()
        {
        }
        /**
         * Prints the scheduled date in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table.
         *
         * @return string
         */
        public function column_schedule($row)
        {
        }
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @param ActionScheduler_Schedule $schedule Action's schedule.
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Bulk delete.
         *
         * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
         * properly validated by the callee and it will delete the actions without any extra validation.
         *
         * @param int[]  $ids Action IDs.
         * @param string $ids_sql Inherited and unused.
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id Action ID.
         */
        protected function row_action_cancel($action_id)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id Action ID.
         */
        protected function row_action_run($action_id)
        {
        }
        /**
         * Force the data store schema updates.
         */
        protected function recreate_tables()
        {
        }
        /**
         * Implements the logic behind processing an action once an action link is clicked on the list table.
         *
         * @param int    $action_id Action ID.
         * @param string $row_action_type The type of action to perform on the action.
         */
        protected function process_row_action($action_id, $row_action_type)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function prepare_items()
        {
        }
        /**
         * Prints the available statuses so the user can click to filter.
         */
        protected function display_filter_by_status()
        {
        }
        /**
         * Get the text to display in the search box on the list table.
         */
        protected function get_search_box_button_text()
        {
        }
        /**
         * {@inheritDoc}
         */
        protected function get_per_page_option_name()
        {
        }
    }
    /**
     * Class ActionScheduler_LogEntry
     */
    class ActionScheduler_LogEntry
    {
        /**
         * Action's ID for log entry.
         *
         * @var int $action_id
         */
        protected $action_id = '';
        /**
         * Log entry's message.
         *
         * @var string $message
         */
        protected $message = '';
        /**
         * Log entry's date.
         *
         * @var Datetime $date
         */
        protected $date;
        /**
         * Constructor
         *
         * @param mixed    $action_id Action ID.
         * @param string   $message   Message.
         * @param Datetime $date      Datetime object with the time when this log entry was created. If this parameter is
         *                            not provided a new Datetime object (with current time) will be created.
         */
        public function __construct($action_id, $message, $date = \null)
        {
        }
        /**
         * Returns the date when this log entry was created
         *
         * @return Datetime
         */
        public function get_date()
        {
        }
        /**
         * Get action ID of log entry.
         */
        public function get_action_id()
        {
        }
        /**
         * Get log entry message.
         */
        public function get_message()
        {
        }
    }
    /**
     * Class ActionScheduler_NullLogEntry
     */
    class ActionScheduler_NullLogEntry extends \ActionScheduler_LogEntry
    {
        /**
         * Construct.
         *
         * @param string $action_id Action ID.
         * @param string $message   Log entry.
         */
        public function __construct($action_id = '', $message = '')
        {
        }
    }
    /**
     * Abstract class for setting a basic lock to throttle some action.
     *
     * Class ActionScheduler_Lock
     */
    abstract class ActionScheduler_Lock
    {
        /**
         * Instance.
         *
         * @var ActionScheduler_Lock
         */
        private static $locker = \null;
        /**
         * Duration of lock.
         *
         * @var int
         */
        protected static $lock_duration = \MINUTE_IN_SECONDS;
        /**
         * Check if a lock is set for a given lock type.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        public function is_locked($lock_type)
        {
        }
        /**
         * Set a lock.
         *
         * To prevent race conditions, implementations should avoid setting the lock if the lock is already held.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool
         */
        abstract public function set($lock_type);
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        abstract public function get_expiration($lock_type);
        /**
         * Get the amount of time to set for a given lock. 60 seconds by default.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return int
         */
        protected function get_duration($lock_type)
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Lock
         */
        public static function instance()
        {
        }
    }
    /**
     * Provide a way to set simple transient locks to block behaviour
     * for up-to a given duration.
     *
     * Class ActionScheduler_OptionLock
     *
     * @since 3.0.0
     */
    class ActionScheduler_OptionLock extends \ActionScheduler_Lock
    {
        /**
         * Set a lock using options for a given amount of time (60 seconds by default).
         *
         * Using an autoloaded option avoids running database queries or other resource intensive tasks
         * on frequently triggered hooks, like 'init' or 'shutdown'.
         *
         * For example, ActionScheduler_QueueRunner->maybe_dispatch_async_request() uses a lock to avoid
         * calling ActionScheduler_QueueRunner->has_maximum_concurrent_batches() every time the 'shutdown',
         * hook is triggered, because that method calls ActionScheduler_QueueRunner->store->get_claim_count()
         * to find the current number of claims in the database.
         *
         * @param string $lock_type A string to identify different lock types.
         * @bool True if lock value has changed, false if not or if set failed.
         */
        public function set($lock_type)
        {
        }
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public function get_expiration($lock_type)
        {
        }
        /**
         * Given the lock string, derives the lock expiration timestamp (or false if it cannot be determined).
         *
         * @param string $lock_value String containing a timestamp, or pipe-separated combination of unique value and timestamp.
         *
         * @return false|int
         */
        private function get_expiration_from($lock_value)
        {
        }
        /**
         * Get the key to use for storing the lock in the transient
         *
         * @param string $lock_type A string to identify different lock types.
         * @return string
         */
        protected function get_key($lock_type)
        {
        }
        /**
         * Supplies the existing lock value, or an empty string if not set.
         *
         * @param string $lock_type A string to identify different lock types.
         *
         * @return string
         */
        private function get_existing_lock($lock_type)
        {
        }
        /**
         * Supplies a lock value consisting of a unique value and the current timestamp, which are separated by a pipe
         * character.
         *
         * Example: (string) "649de012e6b262.09774912|1688068114"
         *
         * @param string $lock_type A string to identify different lock types.
         *
         * @return string
         */
        private function new_lock_value($lock_type)
        {
        }
    }
    /**
     * Class ActionScheduler_QueueCleaner
     */
    class ActionScheduler_QueueCleaner
    {
        /**
         * The batch size.
         *
         * @var int
         */
        protected $batch_size;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store = \null;
        /**
         * 31 days in seconds.
         *
         * @var int
         */
        private $month_in_seconds = 2678400;
        /**
         * Default list of statuses purged by the cleaner process.
         *
         * @var string[]
         */
        private $default_statuses_to_purge = array(\ActionScheduler_Store::STATUS_COMPLETE, \ActionScheduler_Store::STATUS_CANCELED);
        /**
         * ActionScheduler_QueueCleaner constructor.
         *
         * @param ActionScheduler_Store|null $store      The store instance.
         * @param int                        $batch_size The batch size.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, $batch_size = 20)
        {
        }
        /**
         * Default queue cleaner process used by queue runner.
         *
         * @return array
         */
        public function delete_old_actions()
        {
        }
        /**
         * Delete selected actions limited by status and date.
         *
         * @param string[] $statuses_to_purge List of action statuses to purge. Defaults to canceled, complete.
         * @param DateTime $cutoff_date Date limit for selecting actions. Defaults to 31 days ago.
         * @param int|null $batch_size Maximum number of actions per status to delete. Defaults to 20.
         * @param string   $context Calling process context. Defaults to `old`.
         * @return array Actions deleted.
         */
        public function clean_actions(array $statuses_to_purge, \DateTime $cutoff_date, $batch_size = \null, $context = 'old')
        {
        }
        /**
         * Delete actions.
         *
         * @param int[]  $actions_to_delete List of action IDs to delete.
         * @param int    $lifespan Minimum scheduled age in seconds of the actions being deleted.
         * @param string $context Context of the delete request.
         * @return array Deleted action IDs.
         */
        private function delete_actions(array $actions_to_delete, $lifespan = \null, $context = 'old')
        {
        }
        /**
         * Unclaim pending actions that have not been run within a given time limit.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
         */
        public function reset_timeouts($time_limit = 300)
        {
        }
        /**
         * Mark actions that have been running for more than a given time limit as failed, based on
         * the assumption some uncatchable and unloggable fatal error occurred during processing.
         *
         * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
         * as a parameter is 10x the time limit used for queue processing.
         *
         * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
         */
        public function mark_failures($time_limit = 300)
        {
        }
        /**
         * Do all of the cleaning actions.
         *
         * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
         */
        public function clean($time_limit = 300)
        {
        }
        /**
         * Get the batch size for cleaning the queue.
         *
         * @return int
         */
        protected function get_batch_size()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @deprecated 2.1.1
         * @return int The number of seconds.
         */
        protected function get_maximum_execution_time()
        {
        }
    }
    /**
     * Abstract class with common Queue Cleaner functionality.
     */
    abstract class ActionScheduler_Abstract_QueueRunner extends \ActionScheduler_Abstract_QueueRunner_Deprecated
    {
        /**
         * ActionScheduler_QueueCleaner instance.
         *
         * @var ActionScheduler_QueueCleaner
         */
        protected $cleaner;
        /**
         * ActionScheduler_FatalErrorMonitor instance.
         *
         * @var ActionScheduler_FatalErrorMonitor
         */
        protected $monitor;
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * The created time.
         *
         * Represents when the queue runner was constructed and used when calculating how long a PHP request has been running.
         * For this reason it should be as close as possible to the PHP request start time.
         *
         * @var int
         */
        private $created_time;
        /**
         * ActionScheduler_Abstract_QueueRunner constructor.
         *
         * @param ActionScheduler_Store|null             $store Store object.
         * @param ActionScheduler_FatalErrorMonitor|null $monitor Monitor object.
         * @param ActionScheduler_QueueCleaner|null      $cleaner Cleaner object.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Process an individual action.
         *
         * @param int    $action_id The action ID to process.
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *                        Generally, this should be capitalised and not localised as it's a proper noun.
         * @throws \Exception When error running action.
         */
        public function process_action($action_id, $context = '')
        {
        }
        /**
         * Marks actions as either having failed execution or failed validation, as appropriate.
         *
         * @param int       $action_id    Action ID.
         * @param Exception $e            Exception instance.
         * @param string    $context      Execution context.
         * @param bool      $valid_action If the action is valid.
         *
         * @return void
         */
        private function handle_action_error($action_id, $e, $context, $valid_action)
        {
        }
        /**
         * Schedule the next instance of the action if necessary.
         *
         * @param ActionScheduler_Action $action Action.
         * @param int                    $action_id Action ID.
         */
        protected function schedule_next_instance(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Determine if the specified recurring action has been consistently failing.
         *
         * @param ActionScheduler_Action $action    The recurring action to be rescheduled.
         * @param int                    $action_id The ID of the recurring action.
         *
         * @return bool
         */
        private function recurring_action_is_consistently_failing(\ActionScheduler_Action $action, $action_id)
        {
        }
        /**
         * Run the queue cleaner.
         */
        protected function run_cleanup()
        {
        }
        /**
         * Get the number of concurrent batches a runner allows.
         *
         * @return int
         */
        public function get_allowed_concurrent_batches()
        {
        }
        /**
         * Check if the number of allowed concurrent batches is met or exceeded.
         *
         * @return bool
         */
        public function has_maximum_concurrent_batches()
        {
        }
        /**
         * Get the maximum number of seconds a batch can run for.
         *
         * @return int The number of seconds.
         */
        protected function get_time_limit()
        {
        }
        /**
         * Get the number of seconds the process has been running.
         *
         * @return int The number of seconds.
         */
        protected function get_execution_time()
        {
        }
        /**
         * Check if the host's max execution time is (likely) to be exceeded if processing more actions.
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
         * @return bool
         */
        protected function time_likely_to_be_exceeded($processed_actions)
        {
        }
        /**
         * Get memory limit
         *
         * Based on WP_Background_Process::get_memory_limit()
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90% of the maximum WordPress memory.
         *
         * Based on WP_Background_Process::memory_exceeded()
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * See if the batch limits have been exceeded, which is when memory usage is almost at
         * the maximum limit, or the time to process more actions will exceed the max time limit.
         *
         * Based on WC_Background_Process::batch_limits_exceeded()
         *
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action.
         * @return bool
         */
        protected function batch_limits_exceeded($processed_actions)
        {
        }
        /**
         * Process actions in the queue.
         *
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        abstract public function run($context = '');
    }
    /**
     * Class ActionScheduler_QueueRunner
     */
    class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        const WP_CRON_HOOK = 'action_scheduler_run_queue';
        const WP_CRON_SCHEDULE = 'every_minute';
        /**
         * ActionScheduler_AsyncRequest_QueueRunner instance.
         *
         * @var ActionScheduler_AsyncRequest_QueueRunner
         */
        protected $async_request;
        /**
         * ActionScheduler_QueueRunner instance.
         *
         * @var ActionScheduler_QueueRunner
         */
        private static $runner = \null;
        /**
         * Number of processed actions.
         *
         * @var int
         */
        private $processed_actions_count = 0;
        /**
         * Get instance.
         *
         * @return ActionScheduler_QueueRunner
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * ActionScheduler_QueueRunner constructor.
         *
         * @param ActionScheduler_Store|null                    $store Store object.
         * @param ActionScheduler_FatalErrorMonitor|null        $monitor Monitor object.
         * @param ActionScheduler_QueueCleaner|null             $cleaner Cleaner object.
         * @param ActionScheduler_AsyncRequest_QueueRunner|null $async_request Async request runner object.
         */
        public function __construct(?\ActionScheduler_Store $store = \null, ?\ActionScheduler_FatalErrorMonitor $monitor = \null, ?\ActionScheduler_QueueCleaner $cleaner = \null, ?\ActionScheduler_AsyncRequest_QueueRunner $async_request = \null)
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Hook check for dispatching an async request.
         */
        public function hook_dispatch_async_request()
        {
        }
        /**
         * Unhook check for dispatching an async request.
         */
        public function unhook_dispatch_async_request()
        {
        }
        /**
         * Check if we should dispatch an async request to process actions.
         *
         * This method is attached to 'shutdown', so is called frequently. To avoid slowing down
         * the site, it mitigates the work performed in each request by:
         * 1. checking if it's in the admin context and then
         * 2. haven't run on the 'shutdown' hook within the lock time (60 seconds by default)
         * 3. haven't exceeded the number of allowed batches.
         *
         * The order of these checks is important, because they run from a check on a value:
         * 1. in memory - is_admin() maps to $GLOBALS or the WP_ADMIN constant
         * 2. in memory - transients use autoloaded options by default
         * 3. from a database query - has_maximum_concurrent_batches() run the query
         *    $this->store->get_claim_count() to find the current number of claims in the DB.
         *
         * If all of these conditions are met, then we request an async runner check whether it
         * should dispatch a request to process pending actions.
         */
        public function maybe_dispatch_async_request()
        {
        }
        /**
         * Process actions in the queue. Attached to self::WP_CRON_HOOK i.e. 'action_scheduler_run_queue'
         *
         * The $context param of this method defaults to 'WP Cron', because prior to Action Scheduler 3.0.0
         * that was the only context in which this method was run, and the self::WP_CRON_HOOK hook had no context
         * passed along with it. New code calling this method directly, or by triggering the self::WP_CRON_HOOK,
         * should set a context as the first parameter. For an example of this, refer to the code seen in
         *
         * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
         *
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public function run($context = 'WP Cron')
        {
        }
        /**
         * Process a batch of actions pending in the queue.
         *
         * Actions are processed by claiming a set of pending actions then processing each one until either the batch
         * size is completed, or memory or time limits are reached, defined by @see $this->batch_limits_exceeded().
         *
         * @param int    $size The maximum number of actions to process in the batch.
         * @param string $context Optional identifier for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *                        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        protected function do_batch($size = 100, $context = '')
        {
        }
        /**
         * Flush the cache if possible (intended for use after a batch of actions has been processed).
         *
         * This is useful because running large batches can eat up memory and because invalid data can accrue in the
         * runtime cache, which may lead to unexpected results.
         */
        protected function clear_caches()
        {
        }
        /**
         * Add schedule to WP cron.
         *
         * @param array<string, array<string, int|string>> $schedules Schedules.
         * @return array<string, array<string, int|string>>
         */
        public function add_wp_cron_schedule($schedules)
        {
        }
    }
    /**
     * Provides information about active and registered instances of Action Scheduler.
     */
    class ActionScheduler_SystemInformation
    {
        /**
         * Returns information about the plugin or theme which contains the current active version
         * of Action Scheduler.
         *
         * If this cannot be determined, or if Action Scheduler is being loaded via some other
         * method, then it will return an empty array. Otherwise, if populated, the array will
         * look like the following:
         *
         *     [
         *         'type' => 'plugin', # or 'theme'
         *         'name' => 'Name',
         *     ]
         *
         * @return array
         */
        public static function active_source(): array
        {
        }
        /**
         * Returns the directory path for the currently active installation of Action Scheduler.
         *
         * @return string
         */
        public static function active_source_path(): string
        {
        }
        /**
         * Get registered sources.
         *
         * It is not always possible to obtain this information. For instance, if earlier versions (<=3.9.0) of
         * Action Scheduler register themselves first, then the necessary data about registered sources will
         * not be available.
         *
         * @return array<string, string>
         */
        public static function get_sources()
        {
        }
    }
    /**
     * Class ActionScheduler_Versions
     */
    class ActionScheduler_Versions
    {
        /**
         * ActionScheduler_Versions instance.
         *
         * @var ActionScheduler_Versions
         */
        private static $instance = \null;
        /**
         * Versions.
         *
         * @var array<string, callable>
         */
        private $versions = array();
        /**
         * Registered sources.
         *
         * @var array<string, string>
         */
        private $sources = array();
        /**
         * Register version's callback.
         *
         * @param string   $version_string          Action Scheduler version.
         * @param callable $initialization_callback Callback to initialize the version.
         */
        public function register($version_string, $initialization_callback)
        {
        }
        /**
         * Get all versions.
         */
        public function get_versions()
        {
        }
        /**
         * Get registered sources.
         *
         * Use with caution: this method is only available as of Action Scheduler's 3.9.1
         * release and, owing to the way Action Scheduler is loaded, it's possible that the
         * class definition used at runtime will belong to an earlier version.
         *
         * @since 3.9.1
         *
         * @return array<string, string>
         */
        public function get_sources()
        {
        }
        /**
         * Get latest version registered.
         */
        public function latest_version()
        {
        }
        /**
         * Get callback for latest registered version.
         */
        public function latest_version_callback()
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Versions
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public static function initialize_latest_version()
        {
        }
        /**
         * Returns information about the plugin or theme which contains the current active version
         * of Action Scheduler.
         *
         * If this cannot be determined, or if Action Scheduler is being loaded via some other
         * method, then it will return an empty array. Otherwise, if populated, the array will
         * look like the following:
         *
         *     [
         *         'type' => 'plugin', # or 'theme'
         *         'name' => 'Name',
         *     ]
         *
         * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source().
         *
         * @return array
         */
        public function active_source(): array
        {
        }
        /**
         * Returns the directory path for the currently active installation of Action Scheduler.
         *
         * @deprecated 3.9.2 Use ActionScheduler_SystemInformation::active_source_path().
         *
         * @return string
         */
        public function active_source_path(): string
        {
        }
    }
    /**
     * Class ActionScheduler_WPCommentCleaner
     *
     * @since 3.0.0
     */
    class ActionScheduler_WPCommentCleaner
    {
        /**
         * Post migration hook used to cleanup the WP comment table.
         *
         * @var string
         */
        protected static $cleanup_hook = 'action_scheduler/cleanup_wp_comment_logs';
        /**
         * An instance of the ActionScheduler_wpCommentLogger class to interact with the comments table.
         *
         * This instance should only be used as an interface. It should not be initialized.
         *
         * @var ActionScheduler_wpCommentLogger
         */
        protected static $wp_comment_logger = \null;
        /**
         * The key used to store the cached value of whether there are logs in the WP comment table.
         *
         * @var string
         */
        protected static $has_logs_option_key = 'as_has_wp_comment_logs';
        /**
         * Initialize the class and attach callbacks.
         */
        public static function init()
        {
        }
        /**
         * Determines if there are log entries in the wp comments table.
         *
         * Uses the flag set on migration completion set by @see self::maybe_schedule_cleanup().
         *
         * @return boolean Whether there are scheduled action comments in the comments table.
         */
        public static function has_logs()
        {
        }
        /**
         * Schedules the WP Post comment table cleanup to run in 6 months if it's not already scheduled.
         * Attached to the migration complete hook 'action_scheduler/migration_complete'.
         */
        public static function maybe_schedule_cleanup()
        {
        }
        /**
         * Delete all action comments from the WP Comments table.
         */
        public static function delete_all_action_comments()
        {
        }
        /**
         * Registers admin notices about the orphaned action logs.
         */
        public static function register_admin_notice()
        {
        }
        /**
         * Prints details about the orphaned action logs and includes information on where to learn more.
         */
        public static function print_admin_notice()
        {
        }
    }
    /**
     * Class ActionScheduler_wcSystemStatus
     */
    class ActionScheduler_wcSystemStatus
    {
        /**
         * The active data stores
         *
         * @var ActionScheduler_Store
         */
        protected $store;
        /**
         * Constructor method for ActionScheduler_wcSystemStatus.
         *
         * @param ActionScheduler_Store $store Active store object.
         *
         * @return void
         */
        public function __construct($store)
        {
        }
        /**
         * Display action data, including number of actions grouped by status and the oldest & newest action in each status.
         *
         * Helpful to identify issues, like a clogged queue.
         */
        public function render()
        {
        }
        /**
         * Get oldest and newest scheduled dates for a given set of statuses.
         *
         * @param array $status_keys Set of statuses to find oldest & newest action for.
         * @return array
         */
        protected function get_oldest_and_newest($status_keys)
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param string $status Action status label/name string.
         * @param string $date_type Oldest or Newest.
         * @return DateTime
         */
        protected function get_action_status_date($status, $date_type = 'oldest')
        {
        }
        /**
         * Get oldest or newest scheduled date for a given status.
         *
         * @param array $status_labels Set of statuses to find oldest & newest action for.
         * @param array $action_counts Number of actions grouped by status.
         * @param array $oldest_and_newest Date of the oldest and newest action with each status.
         */
        protected function get_template($status_labels, $action_counts, $oldest_and_newest)
        {
        }
        /**
         * Is triggered when invoking inaccessible methods in an object context.
         *
         * @param string $name Name of method called.
         * @param array  $arguments Parameters to invoke the method with.
         *
         * @return mixed
         * @link https://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
         */
        public function __call($name, $arguments)
        {
        }
    }
    /**
     * Class ActionScheduler
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler
    {
        /**
         * Plugin file path.
         *
         * @var string
         */
        private static $plugin_file = '';
        /**
         * ActionScheduler_ActionFactory instance.
         *
         * @var ActionScheduler_ActionFactory
         */
        private static $factory = \null;
        /**
         * Data store is initialized.
         *
         * @var bool
         */
        private static $data_store_initialized = \false;
        /**
         * Factory.
         */
        public static function factory()
        {
        }
        /**
         * Get Store instance.
         */
        public static function store()
        {
        }
        /**
         * Get Lock instance.
         */
        public static function lock()
        {
        }
        /**
         * Get Logger instance.
         */
        public static function logger()
        {
        }
        /**
         * Get QueueRunner instance.
         */
        public static function runner()
        {
        }
        /**
         * Get AdminView instance.
         */
        public static function admin_view()
        {
        }
        /**
         * Get the absolute system path to the plugin directory, or a file therein
         *
         * @static
         * @param string $path Path relative to plugin directory.
         * @return string
         */
        public static function plugin_path($path)
        {
        }
        /**
         * Get the absolute URL to the plugin directory, or a file therein
         *
         * @static
         * @param string $path Path relative to plugin directory.
         * @return string
         */
        public static function plugin_url($path)
        {
        }
        /**
         * Autoload.
         *
         * @param string $class Class name.
         */
        public static function autoload($class)
        {
        }
        /**
         * Initialize the plugin
         *
         * @static
         * @param string $plugin_file Plugin file path.
         */
        public static function init($plugin_file)
        {
        }
        /**
         * Check whether the AS data store has been initialized.
         *
         * @param string $function_name The name of the function being called. Optional. Default `null`.
         * @return bool
         */
        public static function is_initialized($function_name = \null)
        {
        }
        /**
         * Determine if the class is one of our abstract classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_abstract($class)
        {
        }
        /**
         * Determine if the class is one of our migration classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_migration($class)
        {
        }
        /**
         * Determine if the class is one of our WP CLI classes.
         *
         * @since 3.0.0
         *
         * @param string $class The class name.
         *
         * @return bool
         */
        protected static function is_class_cli($class)
        {
        }
        /**
         * Clone.
         */
        final public function __clone()
        {
        }
        /**
         * Wakeup.
         */
        final public function __wakeup()
        {
        }
        /**
         * Construct.
         */
        final private function __construct()
        {
        }
        /** Deprecated **/
        /**
         * Get DateTime object.
         *
         * @param null|string $when     Date/time string.
         * @param string      $timezone Timezone string.
         */
        public static function get_datetime_object($when = \null, $timezone = 'UTC')
        {
        }
        /**
         * Issue deprecated warning if an Action Scheduler function is called in the shutdown hook.
         *
         * @param string $function_name The name of the function being called.
         * @deprecated 3.1.6.
         */
        public static function check_shutdown_hook($function_name)
        {
        }
    }
    /**
     * Class ActionScheduler_Schedule
     */
    interface ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param null|DateTime $after Timestamp.
         * @return DateTime|null
         */
        public function next(?\DateTime $after = \null);
        /**
         * Identify the schedule as (not) recurring.
         *
         * @return bool
         */
        public function is_recurring();
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Schedule_Deprecated implements \ActionScheduler_Schedule
    {
        /**
         * Get the date & time this schedule was created to run, or calculate when it should be run
         * after a given date & time.
         *
         * @param DateTime $after DateTime to calculate against.
         *
         * @return DateTime|null
         */
        public function next(?\DateTime $after = \null)
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schedule
     */
    abstract class ActionScheduler_Abstract_Schedule extends \ActionScheduler_Schedule_Deprecated
    {
        /**
         * The date & time the schedule is set to run.
         *
         * @var DateTime
         */
        private $scheduled_date = \null;
        /**
         * Timestamp equivalent of @see $this->scheduled_date
         *
         * @var int
         */
        protected $scheduled_timestamp = \null;
        /**
         * Construct.
         *
         * @param DateTime $date The date & time to run the action.
         */
        public function __construct(\DateTime $date)
        {
        }
        /**
         * Check if a schedule should recur.
         *
         * @return bool
         */
        abstract public function is_recurring();
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after Start timestamp.
         * @return DateTime
         */
        abstract protected function calculate_next(\DateTime $after);
        /**
         * Get the next date & time when this schedule should run after a given date & time.
         *
         * @param DateTime $after Start timestamp.
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Get the date & time the schedule is set to run.
         *
         * @return DateTime|null
         */
        public function get_date()
        {
        }
        /**
         * For PHP 5.2 compat, because DateTime objects can't be serialized
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Wakeup.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_RecurringSchedule
     */
    abstract class ActionScheduler_Abstract_RecurringSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * The date & time the first instance of this schedule was setup to run (which may not be this instance).
         *
         * Schedule objects are attached to an action object. Each schedule stores the run date for that
         * object as the start date - @see $this->start - and logic to calculate the next run date after
         * that - @see $this->calculate_next(). The $first_date property also keeps a record of when the very
         * first instance of this chain of schedules ran.
         *
         * @var DateTime
         */
        private $first_date = \null;
        /**
         * Timestamp equivalent of @see $this->first_date
         *
         * @var int
         */
        protected $first_timestamp = \null;
        /**
         * The recurrence between each time an action is run using this schedule.
         * Used to calculate the start date & time. Can be a number of seconds, in the
         * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
         * case of ActionScheduler_CronSchedule. Or something else.
         *
         * @var mixed
         */
        protected $recurrence;
        /**
         * Construct.
         *
         * @param DateTime      $date The date & time to run the action.
         * @param mixed         $recurrence The data used to determine the schedule's recurrence.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $date, $recurrence, ?\DateTime $first = \null)
        {
        }
        /**
         * Schedule is recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Get the date & time of the first schedule in this recurring series.
         *
         * @return DateTime|null
         */
        public function get_first_date()
        {
        }
        /**
         * Get the schedule's recurrence.
         *
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. This was addressed in
         * Action Scheduler 3.0.0, where properties and property names were aligned for better
         * inheritance. To maintain backward compatibility with scheduled serialized and stored
         * prior to 3.0, we need to correctly map the old property names.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_Abstract_Schema
     *
     * @package Action_Scheduler
     *
     * @codeCoverageIgnore
     *
     * Utility class for creating/updating custom tables
     */
    abstract class ActionScheduler_Abstract_Schema
    {
        /**
         * Increment this value in derived class to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 1;
        /**
         * Schema version stored in database.
         *
         * @var string
         */
        protected $db_version;
        /**
         * Names of tables that will be registered by this class.
         *
         * @var array
         */
        protected $tables = array();
        /**
         * Can optionally be used by concrete classes to carry out additional initialization work
         * as needed.
         */
        public function init()
        {
        }
        /**
         * Register tables with WordPress, and create them if needed.
         *
         * @param bool $force_update Optional. Default false. Use true to always run the schema update.
         *
         * @return void
         */
        public function register_tables($force_update = \false)
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table The name of the table.
         *
         * @return string The CREATE TABLE statement, suitable for passing to dbDelta
         */
        abstract protected function get_table_definition($table);
        /**
         * Determine if the database schema is out of date
         * by comparing the integer found in $this->schema_version
         * with the option set in the WordPress options table
         *
         * @return bool
         */
        private function schema_update_required()
        {
        }
        /**
         * Update the option in WordPress to indicate that
         * our schema is now up to date
         *
         * @return void
         */
        private function mark_schema_update_complete()
        {
        }
        /**
         * Update the schema for the given table
         *
         * @param string $table The name of the table to update.
         *
         * @return void
         */
        private function update_table($table)
        {
        }
        /**
         * Get full table name.
         *
         * @param string $table Table name.
         *
         * @return string The full name of the table, including the
         *                table prefix for the current blog
         */
        protected function get_full_table_name($table)
        {
        }
        /**
         * Confirms that all of the tables registered by this schema class have been created.
         *
         * @return bool
         */
        public function tables_exist()
        {
        }
    }
    /**
     * Class ActionScheduler_Logger
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Logger
    {
        /**
         * Instance.
         *
         * @var null|self
         */
        private static $logger = \null;
        /**
         * Get instance.
         *
         * @return ActionScheduler_Logger
         */
        public static function instance()
        {
        }
        /**
         * Create log entry.
         *
         * @param string        $action_id Action ID.
         * @param string        $message   Log message.
         * @param DateTime|null $date      Log date.
         *
         * @return string The log entry ID
         */
        abstract public function log($action_id, $message, ?\DateTime $date = \null);
        /**
         * Get action's log entry.
         *
         * @param string $entry_id Entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        abstract public function get_entry($entry_id);
        /**
         * Get action's logs.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        abstract public function get_logs($action_id);
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Register callback for storing action.
         */
        public function hook_stored_action()
        {
        }
        /**
         * Unhook callback for storing action.
         */
        public function unhook_stored_action()
        {
        }
        /**
         * Log action stored.
         *
         * @param int $action_id Action ID.
         */
        public function log_stored_action($action_id)
        {
        }
        /**
         * Log action cancellation.
         *
         * @param int $action_id Action ID.
         */
        public function log_canceled_action($action_id)
        {
        }
        /**
         * Log action start.
         *
         * @param int    $action_id Action ID.
         * @param string $context Action execution context.
         */
        public function log_started_action($action_id, $context = '')
        {
        }
        /**
         * Log action completion.
         *
         * @param int                         $action_id Action ID.
         * @param null|ActionScheduler_Action $action Action.
         * @param string                      $context Action execution context.
         */
        public function log_completed_action($action_id, $action = \null, $context = '')
        {
        }
        /**
         * Log action failure.
         *
         * @param int       $action_id Action ID.
         * @param Exception $exception Exception.
         * @param string    $context Action execution context.
         */
        public function log_failed_action($action_id, \Exception $exception, $context = '')
        {
        }
        /**
         * Log action timeout.
         *
         * @param int    $action_id  Action ID.
         * @param string $timeout Timeout.
         */
        public function log_timed_out_action($action_id, $timeout)
        {
        }
        /**
         * Log unexpected shutdown.
         *
         * @param int     $action_id Action ID.
         * @param mixed[] $error     Error.
         */
        public function log_unexpected_shutdown($action_id, $error)
        {
        }
        /**
         * Log action reset.
         *
         * @param int $action_id Action ID.
         */
        public function log_reset_action($action_id)
        {
        }
        /**
         * Log ignored action.
         *
         * @param int    $action_id Action ID.
         * @param string $context Action execution context.
         */
        public function log_ignored_action($action_id, $context = '')
        {
        }
        /**
         * Log the failure of fetching the action.
         *
         * @param string         $action_id Action ID.
         * @param null|Exception $exception The exception which occurred when fetching the action. NULL by default for backward compatibility.
         */
        public function log_failed_fetch_action($action_id, ?\Exception $exception = \null)
        {
        }
        /**
         * Log the failure of scheduling the action's next instance.
         *
         * @param int       $action_id Action ID.
         * @param Exception $exception Exception object.
         */
        public function log_failed_schedule_next_instance($action_id, \Exception $exception)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * Implemented here for backward compatibility. Should be implemented in parent loggers
         * for more performant bulk logging.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_Store_Deprecated
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store_Deprecated
    {
        /**
         * Mark an action that failed to fetch correctly as failed.
         *
         * @since 2.2.6
         *
         * @param int $action_id The ID of the action.
         */
        public function mark_failed_fetch_action($action_id)
        {
        }
        /**
         * Add base hooks
         *
         * @since 2.2.6
         */
        protected static function hook()
        {
        }
        /**
         * Remove base hooks
         *
         * @since 2.2.6
         */
        protected static function unhook()
        {
        }
        /**
         * Get the site's local time.
         *
         * @deprecated 2.1.0
         * @return DateTimeZone
         */
        protected function get_local_timezone()
        {
        }
    }
    /**
     * Class ActionScheduler_Store
     *
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Store extends \ActionScheduler_Store_Deprecated
    {
        const STATUS_COMPLETE = 'complete';
        const STATUS_PENDING = 'pending';
        const STATUS_RUNNING = 'in-progress';
        const STATUS_FAILED = 'failed';
        const STATUS_CANCELED = 'canceled';
        const DEFAULT_CLASS = 'ActionScheduler_wpPostStore';
        /**
         * ActionScheduler_Store instance.
         *
         * @var ActionScheduler_Store
         */
        private static $store = \null;
        /**
         * Maximum length of args.
         *
         * @var int
         */
        protected static $max_args_length = 191;
        /**
         * Save action.
         *
         * @param ActionScheduler_Action $action Action to save.
         * @param null|DateTime          $scheduled_date Optional Date of the first instance
         *                                               to store. Otherwise uses the first date of the action's
         *                                               schedule.
         *
         * @return int The action ID
         */
        abstract public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null);
        /**
         * Get action.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        abstract public function fetch_action($action_id);
        /**
         * Find an action.
         *
         * Note: the query ordering changes based on the passed 'status' value.
         *
         * @param string $hook Action hook.
         * @param array  $params Parameters of the action to find.
         *
         * @return string|null ID of the next action matching the criteria or NULL if not found.
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query {
         *      Query filtering options.
         *
         *      @type string       $hook             The name of the actions. Optional.
         *      @type string|array $status           The status or statuses of the actions. Optional.
         *      @type array        $args             The args array of the actions. Optional.
         *      @type DateTime     $date             The scheduled date of the action. Used in UTC timezone. Optional.
         *      @type string       $date_compare     Operator for selecting by $date param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type DateTime     $modified         The last modified date of the action. Used in UTC timezone. Optional.
         *      @type string       $modified_compare Operator for comparing $modified param. Accepted values are '!=', '>', '>=', '<', '<=', '='. Defaults to '<='.
         *      @type string       $group            The group the action belongs to. Optional.
         *      @type bool|int     $claimed          TRUE to find claimed actions, FALSE to find unclaimed actions, an int to find a specific claim ID. Optional.
         *      @type int          $per_page         Number of results to return. Defaults to 5.
         *      @type int          $offset           The query pagination offset. Defaults to 0.
         *      @type int          $orderby          Accepted values are 'hook', 'group', 'modified', 'date' or 'none'. Defaults to 'date'.
         *      @type string       $order            Accepted values are 'ASC' or 'DESC'. Defaults to 'ASC'.
         * }
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        abstract public function query_actions($query = array(), $query_type = 'select');
        /**
         * Run query to get a single action ID.
         *
         * @since 3.3.0
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage but 'per_page' and 'offset' can't be used.
         *
         * @param array $query Query parameters.
         *
         * @return int|null
         */
        public function query_action($query)
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        abstract public function action_counts();
        /**
         * Get additional action counts.
         *
         * - add past-due actions
         *
         * @return array
         */
        public function extra_action_counts()
        {
        }
        /**
         * Cancel action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function cancel_action($action_id);
        /**
         * Delete action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function delete_action($action_id);
        /**
         * Get action's schedule or run timestamp.
         *
         * @param string $action_id Action ID.
         *
         * @return DateTime The date the action is schedule to run, or the date that it ran.
         */
        abstract public function get_date($action_id);
        /**
         * Make a claim.
         *
         * @param int           $max_actions Maximum number of actions to claim.
         * @param DateTime|null $before_date Claim only actions schedule before the given date. Defaults to now.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         */
        abstract public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '');
        /**
         * Get claim count.
         *
         * @return int
         */
        abstract public function get_claim_count();
        /**
         * Release the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        abstract public function release_claim(\ActionScheduler_ActionClaim $claim);
        /**
         * Un-claim the action.
         *
         * @param string $action_id Action ID.
         */
        abstract public function unclaim_action($action_id);
        /**
         * Mark action as failed.
         *
         * @param string $action_id Action ID.
         */
        abstract public function mark_failure($action_id);
        /**
         * Log action's execution.
         *
         * @param string $action_id Actoin ID.
         */
        abstract public function log_execution($action_id);
        /**
         * Mark action as complete.
         *
         * @param string $action_id Action ID.
         */
        abstract public function mark_complete($action_id);
        /**
         * Get action's status.
         *
         * @param string $action_id Action ID.
         * @return string
         */
        abstract public function get_status($action_id);
        /**
         * Get action's claim ID.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        abstract public function get_claim_id($action_id);
        /**
         * Find actions by claim ID.
         *
         * @param string $claim_id Claim ID.
         * @return array
         */
        abstract public function find_actions_by_claim_id($claim_id);
        /**
         * Validate SQL operator.
         *
         * @param string $comparison_operator Operator.
         * @return string
         */
        protected function validate_sql_comparator($comparison_operator)
        {
        }
        /**
         * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action Action.
         * @param null|DateTime          $scheduled_date Action's schedule date (optional).
         * @return string
         */
        protected function get_scheduled_date_string(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Get the time MySQL formatted date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action|null $action Action.
         * @param null|DateTime               $scheduled_date Action's scheduled date (optional).
         * @return string
         */
        protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Validate that we could decode action arguments.
         *
         * @param mixed $args      The decoded arguments.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the decoded arguments are invalid.
         */
        protected function validate_args($args, $action_id)
        {
        }
        /**
         * Validate a ActionScheduler_Schedule object.
         *
         * @param mixed $schedule  The unserialized ActionScheduler_Schedule object.
         * @param int   $action_id The action ID.
         *
         * @throws ActionScheduler_InvalidActionException When the schedule is invalid.
         */
        protected function validate_schedule($schedule, $action_id)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * with custom tables, we use an indexed VARCHAR column instead.
         *
         * @param  ActionScheduler_Action $action Action to be validated.
         * @throws InvalidArgumentException When json encoded args is too long.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @since 3.0.0
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Cancel a set of action IDs.
         *
         * @since 3.0.0
         *
         * @param int[] $action_ids List of action IDs.
         *
         * @return void
         */
        private function bulk_cancel_actions($action_ids)
        {
        }
        /**
         * Get status labels.
         *
         * @return array<string, string>
         */
        public function get_status_labels()
        {
        }
        /**
         * Check if there are any pending scheduled actions due to run.
         *
         * @return string
         */
        public function has_pending_actions_due()
        {
        }
        /**
         * Callable initialization function optionally overridden in derived classes.
         */
        public function init()
        {
        }
        /**
         * Callable function to mark an action as migrated optionally overridden in derived classes.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Get instance.
         *
         * @return ActionScheduler_Store
         */
        public static function instance()
        {
        }
    }
    /**
     * Class ActionScheduler_TimezoneHelper
     */
    abstract class ActionScheduler_TimezoneHelper
    {
        /**
         * DateTimeZone object.
         *
         * @var null|DateTimeZone
         */
        private static $local_timezone = \null;
        /**
         * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
         * if no timezone string is available.
         *
         * @since  2.1.0
         *
         * @param DateTime $date Timestamp.
         * @return ActionScheduler_DateTime
         */
        public static function set_local_timezone(\DateTime $date)
        {
        }
        /**
         * Helper to retrieve the timezone string for a site until a WP core method exists
         * (see https://core.trac.wordpress.org/ticket/24730).
         *
         * Adapted from wc_timezone_string() and https://secure.php.net/manual/en/function.timezone-name-from-abbr.php#89155.
         *
         * If no timezone string is set, and its not possible to match the UTC offset set for the site to a timezone
         * string, then an empty string will be returned, and the UTC offset should be used to set a DateTime's
         * timezone.
         *
         * @since 2.1.0
         * @param bool $reset Unused.
         * @return string PHP timezone string for the site or empty if no timezone string is available.
         */
        protected static function get_local_timezone_string($reset = \false)
        {
        }
        /**
         * Get timezone offset in seconds.
         *
         * @since  2.1.0
         * @return float
         */
        protected static function get_local_timezone_offset()
        {
        }
        /**
         * Get local timezone.
         *
         * @param bool $reset Toggle to discard stored value.
         * @deprecated 2.1.0
         */
        public static function get_local_timezone($reset = \false)
        {
        }
    }
    /**
     * Class ActionScheduler_Action
     */
    class ActionScheduler_Action
    {
        /**
         * Action's hook.
         *
         * @var string
         */
        protected $hook = '';
        /**
         * Action's args.
         *
         * @var array<string, mixed>
         */
        protected $args = array();
        /**
         * Action's schedule.
         *
         * @var ActionScheduler_Schedule
         */
        protected $schedule = \null;
        /**
         * Action's group.
         *
         * @var string
         */
        protected $group = '';
        /**
         * Priorities are conceptually similar to those used for regular WordPress actions.
         * Like those, a lower priority takes precedence over a higher priority and the default
         * is 10.
         *
         * Unlike regular WordPress actions, the priority of a scheduled action is strictly an
         * integer and should be kept within the bounds 0-255 (anything outside the bounds will
         * be brought back into the acceptable range).
         *
         * @var int
         */
        protected $priority = 10;
        /**
         * Construct.
         *
         * @param string                        $hook Action's hook.
         * @param mixed[]                       $args Action's arguments.
         * @param null|ActionScheduler_Schedule $schedule Action's schedule.
         * @param string                        $group Action's group.
         */
        public function __construct($hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
        /**
         * Executes the action.
         *
         * If no callbacks are registered, an exception will be thrown and the action will not be
         * fired. This is useful to help detect cases where the code responsible for setting up
         * a scheduled action no longer exists.
         *
         * @throws Exception If no callbacks are registered for this action.
         */
        public function execute()
        {
        }
        /**
         * Set action's hook.
         *
         * @param string $hook Action's hook.
         */
        protected function set_hook($hook)
        {
        }
        /**
         * Get action's hook.
         */
        public function get_hook()
        {
        }
        /**
         * Set action's schedule.
         *
         * @param ActionScheduler_Schedule $schedule Action's schedule.
         */
        protected function set_schedule(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Action's schedule.
         *
         * @return ActionScheduler_Schedule
         */
        public function get_schedule()
        {
        }
        /**
         * Set action's args.
         *
         * @param mixed[] $args Action's arguments.
         */
        protected function set_args(array $args)
        {
        }
        /**
         * Get action's args.
         */
        public function get_args()
        {
        }
        /**
         * Section action's group.
         *
         * @param string $group Action's group.
         */
        protected function set_group($group)
        {
        }
        /**
         * Action's group.
         *
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * Action has not finished.
         *
         * @return bool
         */
        public function is_finished()
        {
        }
        /**
         * Sets the priority of the action.
         *
         * @param int $priority Priority level (lower is higher priority). Should be in the range 0-255.
         *
         * @return void
         */
        public function set_priority($priority)
        {
        }
        /**
         * Gets the action priority.
         *
         * @return int
         */
        public function get_priority()
        {
        }
    }
    /**
     * Class ActionScheduler_FinishedAction
     */
    class ActionScheduler_FinishedAction extends \ActionScheduler_Action
    {
        /**
         * Execute action.
         */
        public function execute()
        {
        }
        /**
         * Get finished state.
         */
        public function is_finished()
        {
        }
    }
    /**
     * Class ActionScheduler_CanceledAction
     *
     * Stored action which was canceled and therefore acts like a finished action but should always return a null schedule,
     * regardless of schedule passed to its constructor.
     */
    class ActionScheduler_CanceledAction extends \ActionScheduler_FinishedAction
    {
        /**
         * Construct.
         *
         * @param string                        $hook Action's hook.
         * @param array                         $args Action's arguments.
         * @param null|ActionScheduler_Schedule $schedule Action's schedule.
         * @param string                        $group Action's group.
         */
        public function __construct($hook, array $args = array(), ?\ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
    }
    /**
     * Class ActionScheduler_NullAction
     */
    class ActionScheduler_NullAction extends \ActionScheduler_Action
    {
        /**
         * Construct.
         *
         * @param string                        $hook Action hook.
         * @param mixed[]                       $args Action arguments.
         * @param null|ActionScheduler_Schedule $schedule Action schedule.
         */
        public function __construct($hook = '', array $args = array(), ?\ActionScheduler_Schedule $schedule = \null)
        {
        }
        /**
         * Execute action.
         */
        public function execute()
        {
        }
    }
    /**
     * Class ActionScheduler_DBLogger
     *
     * Action logs data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBLogger extends \ActionScheduler_Logger
    {
        /**
         * Add a record to an action log.
         *
         * @param int           $action_id Action ID.
         * @param string        $message Message to be saved in the log entry.
         * @param DateTime|null $date Timestamp of the log entry.
         *
         * @return int     The log entry ID.
         */
        public function log($action_id, $message, ?\DateTime $date = \null)
        {
        }
        /**
         * Retrieve an action log entry.
         *
         * @param int $entry_id Log entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Create an action log entry from a database record.
         *
         * @param object $record Log entry database record object.
         *
         * @return ActionScheduler_LogEntry
         */
        private function create_entry_from_db_record($record)
        {
        }
        /**
         * Retrieve an action's log entries from the database.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Initialize the data store.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Delete the action logs for an action.
         *
         * @param int $action_id Action ID.
         */
        public function clear_deleted_action_logs($action_id)
        {
        }
        /**
         * Bulk add cancel action log entries.
         *
         * @param array $action_ids List of action ID.
         */
        public function bulk_log_cancel_actions($action_ids)
        {
        }
    }
    /**
     * Class ActionScheduler_DBStore
     *
     * Action data table data store.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStore extends \ActionScheduler_Store
    {
        /**
         * Used to share information about the before_date property of claims internally.
         *
         * This is used in preference to passing the same information as a method param
         * for backwards-compatibility reasons.
         *
         * @var DateTime|null
         */
        private $claim_before_date = \null;
        /**
         * Maximum length of args.
         *
         * @var int
         */
        protected static $max_args_length = 8000;
        /**
         * Maximum length of index.
         *
         * @var int
         */
        protected static $max_index_length = 191;
        /**
         * List of claim filters.
         *
         * @var array
         */
        protected $claim_filters = array('group' => '', 'hooks' => '', 'exclude-groups' => '');
        /**
         * Initialize the data store
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Save an action, checks if this is a unique action before actually saving.
         *
         * @param ActionScheduler_Action $action         Action object.
         * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
         *
         * @return int                  Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_unique_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save an action. Can save duplicate action as well, prefer using `save_unique_action` instead.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param DateTime|null          $scheduled_date Optional schedule date. Default null.
         *
         * @return int Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save an action.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param ?DateTime              $date Optional schedule date. Default null.
         * @param bool                   $unique Whether the action should be unique.
         *
         * @return int Action ID.
         * @throws \RuntimeException     Throws exception when saving the action fails.
         */
        private function save_action_to_db(\ActionScheduler_Action $action, ?\DateTime $date = \null, $unique = \false)
        {
        }
        /**
         * Helper function to build insert query.
         *
         * @param array $data Row data for action.
         * @param bool  $unique Whether the action should be unique.
         *
         * @return string Insert query.
         */
        private function build_insert_sql(array $data, $unique)
        {
        }
        /**
         * Helper method to build where clause for action insert statement.
         *
         * @param array  $data Row data for action.
         * @param string $table_name Action table name.
         * @param bool   $unique Where action should be unique.
         *
         * @return string Where clause to be used with insert.
         */
        private function build_where_clause_for_insert($data, $table_name, $unique)
        {
        }
        /**
         * Helper method to get $wpdb->prepare placeholder for a given column name.
         *
         * @param string $column_name Name of column in actions table.
         *
         * @return string Placeholder to use for given column.
         */
        private function get_placeholder_for_column($column_name)
        {
        }
        /**
         * Generate a hash from json_encoded $args using MD5 as this isn't for security.
         *
         * @param string $args JSON encoded action args.
         * @return string
         */
        protected function hash_args($args)
        {
        }
        /**
         * Get action args query param value from action args.
         *
         * @param array $args Action args.
         * @return string
         */
        protected function get_args_for_query($args)
        {
        }
        /**
         * Get a group's ID based on its name/slug.
         *
         * @param string|array $slugs                The string name of a group, or names for several groups.
         * @param bool         $create_if_not_exists Whether to create the group if it does not already exist. Default, true - create the group.
         *
         * @return array The group IDs, if they exist or were successfully created. May be empty.
         */
        protected function get_group_ids($slugs, $create_if_not_exists = \true)
        {
        }
        /**
         * Create an action group.
         *
         * @param string $slug Group slug.
         *
         * @return int Group ID.
         */
        protected function create_group($slug)
        {
        }
        /**
         * Retrieve an action.
         *
         * @param int $action_id Action ID.
         *
         * @return ActionScheduler_Action
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Create a null action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Create an action from a database record.
         *
         * @param object $data Action database record.
         *
         * @return ActionScheduler_Action|ActionScheduler_CanceledAction|ActionScheduler_FinishedAction
         */
        protected function make_action_from_db_record($data)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @param array  $query Filtering options.
         * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count.
         *
         * @return string SQL statement already properly escaped.
         * @throws \InvalidArgumentException If the query is invalid.
         * @throws \RuntimeException When "unknown partial args matching value".
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status.
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * Cancel an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws \InvalidArgumentException If the action update failed.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Cancel pending actions by hook.
         *
         * @since 3.0.0
         *
         * @param string $hook Hook name.
         *
         * @return void
         */
        public function cancel_actions_by_hook($hook)
        {
        }
        /**
         * Cancel pending actions by group.
         *
         * @param string $group Group slug.
         *
         * @return void
         */
        public function cancel_actions_by_group($group)
        {
        }
        /**
         * Bulk cancel actions.
         *
         * @since 3.0.0
         *
         * @param array $query_args Query parameters.
         */
        protected function bulk_cancel_actions($query_args)
        {
        }
        /**
         * Delete an action.
         *
         * @param int $action_id Action ID.
         * @throws \InvalidArgumentException If the action deletion failed.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date for an action.
         *
         * @param string $action_id Action ID.
         *
         * @return \DateTime The local date the action is scheduled to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get the GMT schedule date for an action.
         *
         * @param int $action_id Action ID.
         *
         * @throws \InvalidArgumentException If action cannot be identified.
         * @return \DateTime The GMT date the action is scheduled to run, or the date that it ran.
         */
        protected function get_date_gmt($action_id)
        {
        }
        /**
         * Stake a claim on actions.
         *
         * @param int           $max_actions Maximum number of action to include in claim.
         * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array         $hooks Hooks to filter for.
         * @param string        $group Group to filter for.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Generate a new action claim.
         *
         * @return int Claim ID.
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Set a claim filter.
         *
         * @param string $filter_name Claim filter name.
         * @param mixed  $filter_values Values to filter.
         * @return void
         */
        public function set_claim_filter($filter_name, $filter_values)
        {
        }
        /**
         * Get the claim filter value.
         *
         * @param string $filter_name Claim filter name.
         * @return mixed
         */
        public function get_claim_filter($filter_name)
        {
        }
        /**
         * Mark actions claimed.
         *
         * @param string        $claim_id Claim Id.
         * @param int           $limit Number of action to include in claim.
         * @param DateTime|null $before_date Should use UTC timezone.
         * @param array         $hooks Hooks to filter for.
         * @param string        $group Group to filter for.
         *
         * @return int The number of actions that were claimed.
         * @throws \InvalidArgumentException Throws InvalidArgumentException if group doesn't exist.
         * @throws \RuntimeException Throws RuntimeException if unable to claim action.
         */
        protected function claim_actions($claim_id, $limit, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get the number of active claims.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Return an action's claim ID, as stored in the claim_id column.
         *
         * @param string $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Retrieve the action IDs of action in a claim.
         *
         * @param  int $claim_id Claim ID.
         * @return int[]
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release actions from a claim and delete the claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         * @throws \RuntimeException When unable to release actions from claim.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Remove the claim from an action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark an action as failed.
         *
         * @param int $action_id Action ID.
         * @throws \InvalidArgumentException Throw an exception if action was not updated.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Add execution message to action log.
         *
         * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
         *
         * @param int $action_id Action ID.
         *
         * @return void
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an action as complete.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws \InvalidArgumentException Throw an exception if action was not updated.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an action's status.
         *
         * @param int $action_id Action ID.
         *
         * @return string
         * @throws \InvalidArgumentException Throw an exception if not status was found for action_id.
         * @throws \RuntimeException Throw an exception if action status could not be retrieved.
         */
        public function get_status($action_id)
        {
        }
    }
    /**
     * Class ActionScheduler_HybridStore
     *
     * A wrapper around multiple stores that fetches data from both.
     *
     * @since 3.0.0
     */
    class ActionScheduler_HybridStore extends \ActionScheduler_Store
    {
        const DEMARKATION_OPTION = 'action_scheduler_hybrid_store_demarkation';
        /**
         * Primary store instance.
         *
         * @var ActionScheduler_Store
         */
        private $primary_store;
        /**
         * Secondary store instance.
         *
         * @var ActionScheduler_Store
         */
        private $secondary_store;
        /**
         * Runner instance.
         *
         * @var Action_Scheduler\Migration\Runner
         */
        private $migration_runner;
        /**
         * The dividing line between IDs of actions created
         * by the primary and secondary stores.
         *
         * @var int
         *
         * Methods that accept an action ID will compare the ID against
         * this to determine which store will contain that ID. In almost
         * all cases, the ID should come from the primary store, but if
         * client code is bypassing the API functions and fetching IDs
         * from elsewhere, then there is a chance that an unmigrated ID
         * might be requested.
         */
        private $demarkation_id = 0;
        /**
         * ActionScheduler_HybridStore constructor.
         *
         * @param Config|null $config Migration config object.
         */
        public function __construct(?\Action_Scheduler\Migration\Config $config = \null)
        {
        }
        /**
         * Initialize the table data store tables.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * When the actions table is created, set its autoincrement
         * value to be one higher than the posts table to ensure that
         * there are no ID collisions.
         *
         * @param string $table_name Table name.
         * @param string $table_suffix Suffix of table name.
         *
         * @return void
         * @codeCoverageIgnore
         */
        public function set_autoincrement($table_name, $table_suffix)
        {
        }
        /**
         * Store the demarkation id in WP options.
         *
         * @param int $id The ID to set as the demarkation point between the two stores
         *                Leave null to use the next ID from the WP posts table.
         *
         * @return int The new ID.
         *
         * @codeCoverageIgnore
         */
        private function set_demarkation_id($id = \null)
        {
        }
        /**
         * Find the first matching action from the secondary store.
         * If it exists, migrate it to the primary store immediately.
         * After it migrates, the secondary store will logically contain
         * the next matching action, so return the result thence.
         *
         * @param string $hook Action's hook.
         * @param array  $params Action's arguments.
         *
         * @return string
         */
        public function find_action($hook, $params = array())
        {
        }
        /**
         * Find actions matching the query in the secondary source first.
         * If any are found, migrate them immediately. Then the secondary
         * store will contain the canonical results.
         *
         * @param array  $query Query arguments.
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return int[]
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array Set of 'status' => int $count pairs for statuses with 1 or more actions of that status.
         */
        public function action_counts()
        {
        }
        /**
         * If any actions would have been claimed by the secondary store,
         * migrate them immediately, then ask the primary store for the
         * canonical claim.
         *
         * @param int           $max_actions Maximum number of actions to claim.
         * @param null|DateTime $before_date Latest timestamp of actions to claim.
         * @param string[]      $hooks Hook of actions to claim.
         * @param string        $group Group of actions to claim.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Migrate a list of actions to the table data store.
         *
         * @param array $action_ids List of action IDs.
         */
        private function migrate($action_ids)
        {
        }
        /**
         * Save an action to the primary store.
         *
         * @param ActionScheduler_Action $action Action object to be saved.
         * @param DateTime|null          $date Optional. Schedule date. Default null.
         *
         * @return int The action ID
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $date = \null)
        {
        }
        /**
         * Retrieve an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Cancel an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get the schedule date an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Mark an existing action as failed whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Log the execution of an existing action whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Mark an existing action complete whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Get an existing action status whether migrated or not.
         *
         * @param int $action_id Action ID.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Return which store an action is stored in.
         *
         * @param int  $action_id ID of the action.
         * @param bool $primary_first Optional flag indicating search the primary store first.
         * @return ActionScheduler_Store
         */
        protected function get_store_from_action_id($action_id, $primary_first = \false)
        {
        }
        /**
         * * * * * * * * * * * * * * * * * * * * * * * * * * *
         * All claim-related functions should operate solely
         * on the primary store.
         * * * * * * * * * * * * * * * * * * * * * * * * * * *
         */
        /**
         * Get the claim count from the table data store.
         */
        public function get_claim_count()
        {
        }
        /**
         * Retrieve the claim ID for an action from the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Release a claim in the table data store.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Release claims on an action in the table data store.
         *
         * @param int $action_id Action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Retrieve a list of action IDs by claim.
         *
         * @param int $claim_id Claim ID.
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
    }
    /**
     * Class ActionScheduler_wpCommentLogger
     */
    class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
    {
        const AGENT = 'ActionScheduler';
        const TYPE = 'action_log';
        /**
         * Create log entry.
         *
         * @param string        $action_id Action ID.
         * @param string        $message   Action log's message.
         * @param DateTime|null $date      Action log's timestamp.
         *
         * @return string The log entry ID
         */
        public function log($action_id, $message, ?\DateTime $date = \null)
        {
        }
        /**
         * Create comment.
         *
         * @param int      $action_id Action ID.
         * @param string   $message Action log's message.
         * @param DateTime $date Action log entry's timestamp.
         */
        protected function create_wp_comment($action_id, $message, \DateTime $date)
        {
        }
        /**
         * Get single log entry for action.
         *
         * @param string $entry_id Entry ID.
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Get action's logs.
         *
         * @param string $action_id Action ID.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        /**
         * Get comment.
         *
         * @param int $comment_id Comment ID.
         */
        protected function get_comment($comment_id)
        {
        }
        /**
         * Filter comment queries.
         *
         * @param WP_Comment_Query $query Comment query object.
         */
        public function filter_comment_queries($query)
        {
        }
        /**
         * Filter comment queries.
         *
         * @param array            $clauses Query's clauses.
         * @param WP_Comment_Query $query Query object.
         *
         * @return array
         */
        public function filter_comment_query_clauses($clauses, $query)
        {
        }
        /**
         * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
         * the WP_Comment_Query class handled by @see self::filter_comment_queries().
         *
         * @param string   $where Query's `where` clause.
         * @param WP_Query $query Query object.
         *
         * @return string
         */
        public function filter_comment_feed($where, $query)
        {
        }
        /**
         * Return a SQL clause to exclude Action Scheduler comments.
         *
         * @return string
         */
        protected function get_where_clause()
        {
        }
        /**
         * Remove action log entries from wp_count_comments()
         *
         * @param array $stats   Comment count.
         * @param int   $post_id Post ID.
         *
         * @return object
         */
        public function filter_comment_count($stats, $post_id)
        {
        }
        /**
         * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
         *
         * @return object
         */
        protected function get_comment_count()
        {
        }
        /**
         * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
         * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
         */
        public function delete_comment_count_cache()
        {
        }
        /**
         * Initialize.
         *
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        /**
         * Defer comment counting.
         */
        public function disable_comment_counting()
        {
        }
        /**
         * Enable comment counting.
         */
        public function enable_comment_counting()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore
     */
    class ActionScheduler_wpPostStore extends \ActionScheduler_Store
    {
        const POST_TYPE = 'scheduled-action';
        const GROUP_TAXONOMY = 'action-group';
        const SCHEDULE_META_KEY = '_action_manager_schedule';
        const DEPENDENCIES_MET = 'as-post-store-dependencies-met';
        /**
         * Used to share information about the before_date property of claims internally.
         *
         * This is used in preference to passing the same information as a method param
         * for backwards-compatibility reasons.
         *
         * @var DateTime|null
         */
        private $claim_before_date = \null;
        /**
         * Local Timezone.
         *
         * @var DateTimeZone
         */
        protected $local_timezone = \null;
        /**
         * Save action.
         *
         * @param ActionScheduler_Action $action Scheduled Action.
         * @param DateTime|null          $scheduled_date Scheduled Date.
         *
         * @throws RuntimeException Throws an exception if the action could not be saved.
         * @return int
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Create post array.
         *
         * @param ActionScheduler_Action $action Scheduled Action.
         * @param DateTime|null          $scheduled_date Scheduled Date.
         *
         * @return array Returns an array of post data.
         */
        protected function create_post_array(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save post array.
         *
         * @param array $post_array Post array.
         * @return int Returns the post ID.
         * @throws RuntimeException Throws an exception if the action could not be saved.
         */
        protected function save_post_array($post_array)
        {
        }
        /**
         * Filter insert post data.
         *
         * @param array $postdata Post data to filter.
         *
         * @return array
         */
        public function filter_insert_post_data($postdata)
        {
        }
        /**
         * Create a (probably unique) post name for scheduled actions in a more performant manner than wp_unique_post_slug().
         *
         * When an action's post status is transitioned to something other than 'draft', 'pending' or 'auto-draft, like 'publish'
         * or 'failed' or 'trash', WordPress will find a unique slug (stored in post_name column) using the wp_unique_post_slug()
         * function. This is done to ensure URL uniqueness. The approach taken by wp_unique_post_slug() is to iterate over existing
         * post_name values that match, and append a number 1 greater than the largest. This makes sense when manually creating a
         * post from the Edit Post screen. It becomes a bottleneck when automatically processing thousands of actions, with a
         * database containing thousands of related post_name values.
         *
         * WordPress 5.1 introduces the 'pre_wp_unique_post_slug' filter for plugins to address this issue.
         *
         * We can short-circuit WordPress's wp_unique_post_slug() approach using the 'pre_wp_unique_post_slug' filter. This
         * method is available to be used as a callback on that filter. It provides a more scalable approach to generating a
         * post_name/slug that is probably unique. Because Action Scheduler never actually uses the post_name field, or an
         * action's slug, being probably unique is good enough.
         *
         * For more backstory on this issue, see:
         * - https://github.com/woocommerce/action-scheduler/issues/44 and
         * - https://core.trac.wordpress.org/ticket/21112
         *
         * @param string $override_slug Short-circuit return value.
         * @param string $slug          The desired slug (post_name).
         * @param int    $post_ID       Post ID.
         * @param string $post_status   The post status.
         * @param string $post_type     Post type.
         * @return string
         */
        public function set_unique_post_slug($override_slug, $slug, $post_ID, $post_status, $post_type)
        {
        }
        /**
         * Save post schedule.
         *
         * @param int    $post_id  Post ID of the scheduled action.
         * @param string $schedule Schedule to save.
         *
         * @return void
         */
        protected function save_post_schedule($post_id, $schedule)
        {
        }
        /**
         * Save action group.
         *
         * @param int    $post_id Post ID.
         * @param string $group   Group to save.
         * @return void
         */
        protected function save_action_group($post_id, $group)
        {
        }
        /**
         * Fetch actions.
         *
         * @param int $action_id Action ID.
         * @return object
         */
        public function fetch_action($action_id)
        {
        }
        /**
         * Get post.
         *
         * @param string $action_id - Action ID.
         * @return WP_Post|null
         */
        protected function get_post($action_id)
        {
        }
        /**
         * Get NULL action.
         *
         * @return ActionScheduler_NullAction
         */
        protected function get_null_action()
        {
        }
        /**
         * Make action from post.
         *
         * @param WP_Post $post Post object.
         * @return WP_Post
         */
        protected function make_action_from_post($post)
        {
        }
        /**
         * Get action status by post status.
         *
         * @param string $post_status Post status.
         *
         * @throws InvalidArgumentException Throw InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
         * @return string
         */
        protected function get_action_status_by_post_status($post_status)
        {
        }
        /**
         * Get post status by action status.
         *
         * @param string $action_status Action status.
         *
         * @throws InvalidArgumentException Throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels().
         * @return string
         */
        protected function get_post_status_by_action_status($action_status)
        {
        }
        /**
         * Returns the SQL statement to query (or count) actions.
         *
         * @param array  $query            - Filtering options.
         * @param string $select_or_count  - Whether the SQL should select and return the IDs or just the row count.
         *
         * @throws InvalidArgumentException - Throw InvalidArgumentException if $select_or_count not count or select.
         * @return string SQL statement. The returned SQL is already properly escaped.
         */
        protected function get_query_actions_sql(array $query, $select_or_count = 'select')
        {
        }
        /**
         * Query for action count or list of action IDs.
         *
         * @since 3.3.0 $query['status'] accepts array of statuses instead of a single status.
         *
         * @see ActionScheduler_Store::query_actions for $query arg usage.
         *
         * @param array  $query      Query filtering options.
         * @param string $query_type Whether to select or count the results. Defaults to select.
         *
         * @return string|array|null The IDs of actions matching the query. Null on failure.
         */
        public function query_actions($query = array(), $query_type = 'select')
        {
        }
        /**
         * Get a count of all actions in the store, grouped by status
         *
         * @return array
         */
        public function action_counts()
        {
        }
        /**
         * Cancel action.
         *
         * @param int $action_id Action ID.
         *
         * @throws InvalidArgumentException If $action_id is not identified.
         */
        public function cancel_action($action_id)
        {
        }
        /**
         * Delete action.
         *
         * @param int $action_id Action ID.
         * @return void
         * @throws InvalidArgumentException If action is not identified.
         */
        public function delete_action($action_id)
        {
        }
        /**
         * Get date for claim id.
         *
         * @param int $action_id Action ID.
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date($action_id)
        {
        }
        /**
         * Get Date GMT.
         *
         * @param int $action_id Action ID.
         *
         * @throws InvalidArgumentException If $action_id is not identified.
         * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
         */
        public function get_date_gmt($action_id)
        {
        }
        /**
         * Stake claim.
         *
         * @param int           $max_actions Maximum number of actions.
         * @param DateTime|null $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         * @throws RuntimeException When there is an error staking a claim.
         * @throws InvalidArgumentException When the given group is not valid.
         */
        public function stake_claim($max_actions = 10, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get claim count.
         *
         * @return int
         */
        public function get_claim_count()
        {
        }
        /**
         * Generate claim id.
         *
         * @return string
         */
        protected function generate_claim_id()
        {
        }
        /**
         * Claim actions.
         *
         * @param string        $claim_id    Claim ID.
         * @param int           $limit       Limit.
         * @param DateTime|null $before_date Should use UTC timezone.
         * @param array         $hooks       Claim only actions with a hook or hooks.
         * @param string        $group       Claim only actions in the given group.
         *
         * @return int The number of actions that were claimed.
         * @throws RuntimeException  When there is a database error.
         */
        protected function claim_actions($claim_id, $limit, ?\DateTime $before_date = \null, $hooks = array(), $group = '')
        {
        }
        /**
         * Get IDs of actions within a certain group and up to a certain date/time.
         *
         * @param string   $group The group to use in finding actions.
         * @param int      $limit The number of actions to retrieve.
         * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
         *                        up to and including this DateTime.
         *
         * @return array IDs of actions in the appropriate group and before the appropriate time.
         * @throws InvalidArgumentException When the group does not exist.
         */
        protected function get_actions_by_group($group, $limit, \DateTime $date)
        {
        }
        /**
         * Find actions by claim ID.
         *
         * @param string $claim_id Claim ID.
         * @return array
         */
        public function find_actions_by_claim_id($claim_id)
        {
        }
        /**
         * Release claim.
         *
         * @param ActionScheduler_ActionClaim $claim Claim object to release.
         * @return void
         * @throws RuntimeException When the claim is not unlocked.
         */
        public function release_claim(\ActionScheduler_ActionClaim $claim)
        {
        }
        /**
         * Unclaim action.
         *
         * @param string $action_id Action ID.
         * @throws RuntimeException When unable to unlock claim on action ID.
         */
        public function unclaim_action($action_id)
        {
        }
        /**
         * Mark failure on action.
         *
         * @param int $action_id Action ID.
         *
         * @return void
         * @throws RuntimeException When unable to mark failure on action ID.
         */
        public function mark_failure($action_id)
        {
        }
        /**
         * Return an action's claim ID, as stored in the post password column
         *
         * @param int $action_id Action ID.
         * @return mixed
         */
        public function get_claim_id($action_id)
        {
        }
        /**
         * Return an action's status, as stored in the post status column
         *
         * @param int $action_id Action ID.
         *
         * @return mixed
         * @throws InvalidArgumentException When the action ID is invalid.
         */
        public function get_status($action_id)
        {
        }
        /**
         * Get post column
         *
         * @param string $action_id Action ID.
         * @param string $column_name Column Name.
         *
         * @return string|null
         */
        private function get_post_column($action_id, $column_name)
        {
        }
        /**
         * Log Execution.
         *
         * @throws Exception If the action status cannot be updated to self::STATUS_RUNNING ('in-progress').
         *
         * @param string $action_id Action ID.
         */
        public function log_execution($action_id)
        {
        }
        /**
         * Record that an action was completed.
         *
         * @param string $action_id ID of the completed action.
         *
         * @throws InvalidArgumentException When the action ID is invalid.
         * @throws RuntimeException         When there was an error executing the action.
         */
        public function mark_complete($action_id)
        {
        }
        /**
         * Mark action as migrated when there is an error deleting the action.
         *
         * @param int $action_id Action ID.
         */
        public function mark_migrated($action_id)
        {
        }
        /**
         * Determine whether the post store can be migrated.
         *
         * @param [type] $setting - Setting value.
         * @return bool
         */
        public function migration_dependencies_met($setting)
        {
        }
        /**
         * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
         *
         * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
         * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
         * developers of this impending requirement.
         *
         * @param ActionScheduler_Action $action Action object.
         */
        protected function validate_action(\ActionScheduler_Action $action)
        {
        }
        /**
         * (@codeCoverageIgnore)
         */
        public function init()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostStatusRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostStatusRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_args()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_failed_labels()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_status_running_labels()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_PostTypeRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostTypeRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Build the args array for the post type definition
         *
         * @return array
         */
        protected function post_type_args()
        {
        }
    }
    /**
     * Class ActionScheduler_wpPostStore_TaxonomyRegistrar
     *
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_TaxonomyRegistrar
    {
        /**
         * Registrar.
         */
        public function register()
        {
        }
        /**
         * Get taxonomy arguments.
         */
        protected function taxonomy_args()
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class ActionMigrator
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination;
        /**
         * LogMigrator instance.
         *
         * @var LogMigrator
         */
        private $log_migrator;
        /**
         * ActionMigrator constructor.
         *
         * @param \ActionScheduler_Store $source_store Source store object.
         * @param \ActionScheduler_Store $destination_store Destination store object.
         * @param LogMigrator            $log_migrator Log migrator object.
         */
        public function __construct(\ActionScheduler_Store $source_store, \ActionScheduler_Store $destination_store, \Action_Scheduler\Migration\LogMigrator $log_migrator)
        {
        }
        /**
         * Migrate an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int 0|new action ID
         * @throws \RuntimeException When unable to delete action from the source store.
         */
        public function migrate($source_action_id)
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_DBStoreMigrator
     *
     * A class for direct saving of actions to the table data store during migration.
     *
     * @since 3.0.0
     */
    class ActionScheduler_DBStoreMigrator extends \ActionScheduler_DBStore
    {
        /**
         * Save an action with optional last attempt date.
         *
         * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
         * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
         * that when first saving the action.
         *
         * @param ActionScheduler_Action $action Action to migrate.
         * @param null|DateTime          $scheduled_date Optional date of the first instance to store.
         * @param null|DateTime          $last_attempt_date Optional date the action was last attempted.
         *
         * @return string The action ID
         * @throws \RuntimeException When the action is not saved.
         */
        public function save_action(\ActionScheduler_Action $action, ?\DateTime $scheduled_date = \null, ?\DateTime $last_attempt_date = \null)
        {
        }
    }
}
namespace Action_Scheduler\Migration {
    /**
     * Class BatchFetcher
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class BatchFetcher
    {
        /**
         * Store instance.
         *
         * @var ActionScheduler_Store
         */
        private $store;
        /**
         * BatchFetcher constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         */
        public function __construct(\ActionScheduler_Store $source_store)
        {
        }
        /**
         * Retrieve a list of actions.
         *
         * @param int $count The number of actions to retrieve.
         *
         * @return int[] A list of action IDs
         */
        public function fetch($count = 10)
        {
        }
        /**
         * Generate a list of prioritized of action search parameters.
         *
         * @param int $count Number of actions to find.
         *
         * @return array
         */
        private function get_query_strategies($count)
        {
        }
    }
    /**
     * Class Config
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * A config builder for the ActionScheduler\Migration\Runner class
     */
    class Config
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source_store;
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source_logger;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination_store;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination_logger;
        /**
         * Progress bar object.
         *
         * @var Action_Scheduler\WP_CLI\ProgressBar
         */
        private $progress_bar;
        /**
         * Flag indicating a dryrun.
         *
         * @var bool
         */
        private $dry_run = false;
        /**
         * Config constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the configured source store.
         *
         * @return ActionScheduler_Store
         * @throws \RuntimeException When source store is not configured.
         */
        public function get_source_store()
        {
        }
        /**
         * Set the configured source store.
         *
         * @param ActionScheduler_Store $store Source store object.
         */
        public function set_source_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured source logger.
         *
         * @return ActionScheduler_Logger
         * @throws \RuntimeException When source logger is not configured.
         */
        public function get_source_logger()
        {
        }
        /**
         * Set the configured source logger.
         *
         * @param ActionScheduler_Logger $logger Logger object.
         */
        public function set_source_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get the configured destination store.
         *
         * @return ActionScheduler_Store
         * @throws \RuntimeException When destination store is not configured.
         */
        public function get_destination_store()
        {
        }
        /**
         * Set the configured destination store.
         *
         * @param ActionScheduler_Store $store Action store object.
         */
        public function set_destination_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured destination logger.
         *
         * @return ActionScheduler_Logger
         * @throws \RuntimeException When destination logger is not configured.
         */
        public function get_destination_logger()
        {
        }
        /**
         * Set the configured destination logger.
         *
         * @param ActionScheduler_Logger $logger Logger object.
         */
        public function set_destination_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get flag indicating whether it's a dry run.
         *
         * @return bool
         */
        public function get_dry_run()
        {
        }
        /**
         * Set flag indicating whether it's a dry run.
         *
         * @param bool $dry_run Dry run toggle.
         */
        public function set_dry_run($dry_run)
        {
        }
        /**
         * Get progress bar object.
         *
         * @return ActionScheduler\WPCLI\ProgressBar
         */
        public function get_progress_bar()
        {
        }
        /**
         * Set progress bar object.
         *
         * @param ActionScheduler\WPCLI\ProgressBar $progress_bar Progress bar object.
         */
        public function set_progress_bar(\Action_Scheduler\WP_CLI\ProgressBar $progress_bar)
        {
        }
    }
    /**
     * Class Controller
     *
     * The main plugin/initialization class for migration to custom tables.
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Controller
    {
        /**
         * Instance.
         *
         * @var self
         */
        private static $instance;
        /**
         * Scheduler instance.
         *
         * @var Action_Scheduler\Migration\Scheduler
         */
        private $migration_scheduler;
        /**
         * Class name of the store object.
         *
         * @var string
         */
        private $store_classname;
        /**
         * Class name of the logger object.
         *
         * @var string
         */
        private $logger_classname;
        /**
         * Flag to indicate migrating custom store.
         *
         * @var bool
         */
        private $migrate_custom_store;
        /**
         * Controller constructor.
         *
         * @param Scheduler $migration_scheduler Migration scheduler object.
         */
        protected function __construct(\Action_Scheduler\Migration\Scheduler $migration_scheduler)
        {
        }
        /**
         * Set the action store class name.
         *
         * @param string $class Classname of the store class.
         *
         * @return string
         */
        public function get_store_class($class)
        {
        }
        /**
         * Set the action logger class name.
         *
         * @param string $class Classname of the logger class.
         *
         * @return string
         */
        public function get_logger_class($class)
        {
        }
        /**
         * Get flag indicating whether a custom datastore is in use.
         *
         * @return bool
         */
        public function has_custom_datastore()
        {
        }
        /**
         * Set up the background migration process.
         *
         * @return void
         */
        public function schedule_migration()
        {
        }
        /**
         * Get the default migration config object
         *
         * @return ActionScheduler\Migration\Config
         */
        public function get_migration_config_object()
        {
        }
        /**
         * Hook dashboard migration notice.
         */
        public function hook_admin_notices()
        {
        }
        /**
         * Show a dashboard notice that migration is in progress.
         */
        public function display_migration_notice()
        {
        }
        /**
         * Add store classes. Hook migration.
         */
        private function hook()
        {
        }
        /**
         * Possibly hook the migration scheduler action.
         */
        public function maybe_hook_migration()
        {
        }
        /**
         * Allow datastores to enable migration to AS tables.
         */
        public function allow_migration()
        {
        }
        /**
         * Proceed with the migration if the dependencies have been met.
         */
        public static function init()
        {
        }
        /**
         * Singleton factory.
         */
        public static function instance()
        {
        }
    }
    /**
     * Class DryRun_ActionMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class DryRun_ActionMigrator extends \Action_Scheduler\Migration\ActionMigrator
    {
        /**
         * Simulate migrating an action.
         *
         * @param int $source_action_id Action ID.
         *
         * @return int
         */
        public function migrate($source_action_id)
        {
        }
    }
    /**
     * Class LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class LogMigrator
    {
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Logger $source_logger Source logger object.
         * @param ActionScheduler_Logger $destination_logger Destination logger object.
         */
        public function __construct(\ActionScheduler_Logger $source_logger, \ActionScheduler_Logger $destination_logger)
        {
        }
        /**
         * Migrate an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class DryRun_LogMigrator
     *
     * @package Action_Scheduler\Migration
     *
     * @codeCoverageIgnore
     */
    class DryRun_LogMigrator extends \Action_Scheduler\Migration\LogMigrator
    {
        /**
         * Simulate migrating an action log.
         *
         * @param int $source_action_id Source logger object.
         * @param int $destination_action_id Destination logger object.
         */
        public function migrate($source_action_id, $destination_action_id)
        {
        }
    }
    /**
     * Class Runner
     *
     * @package Action_Scheduler\Migration
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Runner
    {
        /**
         * Source store instance.
         *
         * @var ActionScheduler_Store
         */
        private $source_store;
        /**
         * Destination store instance.
         *
         * @var ActionScheduler_Store
         */
        private $destination_store;
        /**
         * Source logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $source_logger;
        /**
         * Destination logger instance.
         *
         * @var ActionScheduler_Logger
         */
        private $destination_logger;
        /**
         * Batch fetcher instance.
         *
         * @var BatchFetcher
         */
        private $batch_fetcher;
        /**
         * Action migrator instance.
         *
         * @var ActionMigrator
         */
        private $action_migrator;
        /**
         * Log migrator instance.
         *
         * @var LogMigrator
         */
        private $log_migrator;
        /**
         * Progress bar instance.
         *
         * @var ProgressBar
         */
        private $progress_bar;
        /**
         * Runner constructor.
         *
         * @param Config $config Migration configuration object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config)
        {
        }
        /**
         * Run migration batch.
         *
         * @param int $batch_size Optional batch size. Default 10.
         *
         * @return int Size of batch processed.
         */
        public function run($batch_size = 10)
        {
        }
        /**
         * Migration a batch of actions.
         *
         * @param array $action_ids List of action IDs to migrate.
         */
        public function migrate_actions(array $action_ids)
        {
        }
        /**
         * Initialize destination store and logger.
         */
        public function init_destination()
        {
        }
    }
    /**
     * Class Scheduler
     *
     * @package Action_Scheduler\WP_CLI
     *
     * @since 3.0.0
     *
     * @codeCoverageIgnore
     */
    class Scheduler
    {
        /** Migration action hook. */
        const HOOK = 'action_scheduler/migration_hook';
        /** Migration action group. */
        const GROUP = 'action-scheduler-migration';
        /**
         * Set up the callback for the scheduled job.
         */
        public function hook()
        {
        }
        /**
         * Remove the callback for the scheduled job.
         */
        public function unhook()
        {
        }
        /**
         * The migration callback.
         */
        public function run_migration()
        {
        }
        /**
         * Mark the migration complete.
         */
        public function mark_complete()
        {
        }
        /**
         * Get a flag indicating whether the migration is scheduled.
         *
         * @return bool Whether there is a pending action in the store to handle the migration
         */
        public function is_migration_scheduled()
        {
        }
        /**
         * Schedule the migration.
         *
         * @param int $when Optional timestamp to run the next migration batch. Defaults to now.
         *
         * @return string The action ID
         */
        public function schedule_migration($when = 0)
        {
        }
        /**
         * Remove the scheduled migration action.
         */
        public function unschedule_migration()
        {
        }
        /**
         * Get migration batch schedule interval.
         *
         * @return int Seconds between migration runs. Defaults to 0 seconds to allow chaining migration via Async Runners.
         */
        private function get_schedule_interval()
        {
        }
        /**
         * Get migration batch size.
         *
         * @return int Number of actions to migrate in each batch. Defaults to 250.
         */
        private function get_batch_size()
        {
        }
        /**
         * Get migration runner object.
         *
         * @return Runner
         */
        private function get_migration_runner()
        {
        }
    }
}
namespace {
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_SimpleSchedule extends \ActionScheduler_Abstract_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null|DateTime
         */
        private $timestamp = \null;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after Timestamp.
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Schedule is not recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Serialize schedule with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * scheduled date for single actions always being seen as "now" if downgrading to
         * Action Scheduler < 3.0.0, we need to also store the data with the old property names
         * so if it's unserialized in AS < 3.0, the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_SimpleSchedule
     */
    class ActionScheduler_CanceledSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $timestamp = \null;
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after Timestamp.
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
         * Cancelled actions should never have a next schedule, even if get_next()
         * is called with $after < $this->scheduled_date.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
         * Action is not recurring.
         *
         * @return bool
         */
        public function is_recurring()
        {
        }
        /**
         * Unserialize recurring schedules serialized/stored prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, schedules used different property names to refer
         * to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To maintain backward
         * compatibility with schedules serialized and stored prior to 3.0, we need to correctly
         * map the old property names with matching visibility.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_CronSchedule
     */
    class ActionScheduler_CronSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $start_timestamp = \null;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $cron = \null;
        /**
         * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
         * objects $recurrence property.
         *
         * @param DateTime              $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
         * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
         * @param DateTime|null         $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $start, $recurrence, ?\DateTime $first = \null)
        {
        }
        /**
         * Calculate when an instance of this schedule would start based on a given
         * date & time using its the CronExpression.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * Get the schedule's recurrence.
         *
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * Serialize cron schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize cron schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_IntervalSchedule
     */
    class ActionScheduler_IntervalSchedule extends \ActionScheduler_Abstract_RecurringSchedule implements \ActionScheduler_Schedule
    {
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $start_timestamp = \null;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         *
         * @var null
         */
        private $interval_in_seconds = \null;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after Timestamp.
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * Schedule interval in seconds.
         *
         * @return int
         */
        public function interval_in_seconds()
        {
        }
        /**
         * Serialize interval schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, recurring schedules used different property names to
         * refer to equivalent data. For example, ActionScheduler_IntervalSchedule::start_timestamp
         * was the same as ActionScheduler_SimpleSchedule::timestamp. Action Scheduler 3.0.0
         * aligned properties and property names for better inheritance. To guard against the
         * possibility of infinite loops if downgrading to Action Scheduler < 3.0.0, we need to
         * also store the data with the old property names so if it's unserialized in AS < 3.0,
         * the schedule doesn't end up with a null/false/0 recurrence.
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Unserialize interval schedules serialized/stored prior to AS 3.0.0
         *
         * For more background, @see ActionScheduler_Abstract_RecurringSchedule::__wakeup().
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_NullSchedule
     */
    class ActionScheduler_NullSchedule extends \ActionScheduler_SimpleSchedule
    {
        /**
         * DateTime instance.
         *
         * @var DateTime|null
         */
        protected $scheduled_date;
        /**
         * Make the $date param optional and default to null.
         *
         * @param null|DateTime $date The date & time to run the action.
         */
        public function __construct(?\DateTime $date = \null)
        {
        }
        /**
         * This schedule has no scheduled DateTime, so we need to override the parent __sleep().
         *
         * @return array
         */
        public function __sleep()
        {
        }
        /**
         * Wakeup.
         */
        public function __wakeup()
        {
        }
    }
    /**
     * Class ActionScheduler_LoggerSchema
     *
     * @codeCoverageIgnore
     *
     * Creates a custom table for storing action logs
     */
    class ActionScheduler_LoggerSchema extends \ActionScheduler_Abstract_Schema
    {
        const LOG_TABLE = 'actionscheduler_logs';
        /**
         * Schema version.
         *
         * Increment this value to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 3;
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table Table name.
         */
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the logs table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_3_0($table, $db_version)
        {
        }
    }
    /**
     * Class ActionScheduler_StoreSchema
     *
     * @codeCoverageIgnore
     *
     * Creates custom tables for storing scheduled actions
     */
    class ActionScheduler_StoreSchema extends \ActionScheduler_Abstract_Schema
    {
        const ACTIONS_TABLE = 'actionscheduler_actions';
        const CLAIMS_TABLE = 'actionscheduler_claims';
        const GROUPS_TABLE = 'actionscheduler_groups';
        const DEFAULT_DATE = '0000-00-00 00:00:00';
        /**
         * Schema version.
         *
         * Increment this value to trigger a schema update.
         *
         * @var int
         */
        protected $schema_version = 7;
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
        /**
         * Get table definition.
         *
         * @param string $table Table name.
         */
        protected function get_table_definition($table)
        {
        }
        /**
         * Update the actions table schema, allowing datetime fields to be NULL.
         *
         * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
         * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
         *
         * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
         * that method relies on dbDelta() and this change is not possible when using that function.
         *
         * @param string $table Name of table being updated.
         * @param string $db_version The existing schema version of the table.
         */
        public function update_schema_5_0($table, $db_version)
        {
        }
    }
}
namespace {
    /**
     * Deprecated API functions for scheduling actions
     *
     * Functions with the wc prefix were deprecated to avoid confusion with
     * Action Scheduler being included in WooCommerce core, and it providing
     * a different set of APIs for working with the action queue.
     *
     * @package ActionScheduler
     */
    /**
     * Schedule an action to run one time.
     *
     * @param int    $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @return string The job ID
     */
    function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action.
     *
     * @param int    $timestamp When the first instance of the job will run.
     * @param int    $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int    $timestamp The schedule will start on or after this time.
     * @param string $schedule A cron-link schedule string.
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     *
     * @deprecated 2.1.0
     *
     * @return string The job ID
     */
    function wc_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel the next occurrence of a job.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group Action's group.
     *
     * @deprecated 2.1.0
     */
    function wc_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Get next scheduled action.
     *
     * @param string $hook Action's hook.
     * @param array  $args Action's args.
     * @param string $group Action's group.
     *
     * @deprecated 2.1.0
     *
     * @return int|bool The timestamp for the next occurrence, or false if nothing was found
     */
    function wc_next_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array  $args Possible arguments, with their default values:
     *        'hook' => '' - the name of the action that will be triggered
     *        'args' => NULL - the args array that will be passed with the action
     *        'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *        'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='
     *        'group' => '' - the group the action belongs to
     *        'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING
     *        'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID
     *        'per_page' => 5 - Number of results to return
     *        'offset' => 0
     *        'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', or 'date'
     *        'order' => 'ASC'.
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @deprecated 2.1.0
     *
     * @return array
     */
    function wc_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * General API functions for scheduling actions
     *
     * @package ActionScheduler.
     */
    /**
     * Enqueue an action to run one time, as soon as possible
     *
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_enqueue_async_action($hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule an action to run one time
     *
     * @param int    $timestamp When the job will run.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_single_action($timestamp, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int    $timestamp When the first instance of the job will run.
     * @param int    $interval_in_seconds How long to wait between runs.
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Schedule an action that recurs on a cron-like schedule.
     *
     * @param int    $timestamp The first instance of the action will be scheduled
     *           to run at a time calculated after this timestamp matching the cron
     *           expression. This can be used to delay the first instance of the action.
     * @param string $schedule A cron-link schedule string.
     * @see http://en.wikipedia.org/wiki/Cron
     *   *    *    *    *    *    *
     *   ┬    ┬    ┬    ┬    ┬    ┬
     *   |    |    |    |    |    |
     *   |    |    |    |    |    + year [optional]
     *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
     *   |    |    |    +---------- month (1 - 12)
     *   |    |    +--------------- day of month (1 - 31)
     *   |    +-------------------- hour (0 - 23)
     *   +------------------------- min (0 - 59)
     * @param string $hook The hook to trigger.
     * @param array  $args Arguments to pass when the hook triggers.
     * @param string $group The group to assign this job to.
     * @param bool   $unique Whether the action should be unique. It will not be scheduled if another pending or running action has the same hook and group parameters.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID. Zero if there was an error scheduling the action.
     */
    function as_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '', $unique = \false, $priority = 10)
    {
    }
    /**
     * Cancel the next occurrence of a scheduled action.
     *
     * While only the next instance of a recurring or cron action is unscheduled by this method, that will also prevent
     * all future instances of that recurring or cron action from being run. Recurring and cron actions are scheduled in
     * a sequence instead of all being scheduled at once. Each successive occurrence of a recurring action is scheduled
     * only after the former action is run. If the next instance is never run, because it's unscheduled by this function,
     * then the following instance will never be scheduled (or exist), which is effectively the same as being unscheduled
     * by this method also.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     *
     * @return int|null The scheduled action ID if a scheduled action was found, or null if no matching action found.
     */
    function as_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * Cancel all occurrences of a scheduled action.
     *
     * @param string $hook The hook that the job will trigger.
     * @param array  $args Args that would have been passed to the job.
     * @param string $group The group the job is assigned to.
     */
    function as_unschedule_all_actions($hook, $args = array(), $group = '')
    {
    }
    /**
     * Check if there is an existing action in the queue with a given hook, args and group combination.
     *
     * An action in the queue could be pending, in-progress or async. If the is pending for a time in
     * future, its scheduled date will be returned as a timestamp. If it is currently being run, or an
     * async action sitting in the queue waiting to be processed, in which case boolean true will be
     * returned. Or there may be no async, in-progress or pending action for this hook, in which case,
     * boolean false will be the return value.
     *
     * @param string $hook Name of the hook to search for.
     * @param array  $args Arguments of the action to be searched.
     * @param string $group Group of the action to be searched.
     *
     * @return int|bool The timestamp for the next occurrence of a pending scheduled action, true for an async or in-progress action or false if there is no matching action.
     */
    function as_next_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Check if there is a scheduled action in the queue but more efficiently than as_next_scheduled_action().
     *
     * It's recommended to use this function when you need to know whether a specific action is currently scheduled
     * (pending or in-progress).
     *
     * @since 3.3.0
     *
     * @param string $hook  The hook of the action.
     * @param array  $args  Args that have been passed to the action. Null will matches any args.
     * @param string $group The group the job is assigned to.
     *
     * @return bool True if a matching action is pending or in-progress, false otherwise.
     */
    function as_has_scheduled_action($hook, $args = \null, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array  $args Possible arguments, with their default values.
     *         'hook' => '' - the name of the action that will be triggered.
     *         'args' => NULL - the args array that will be passed with the action.
     *         'date' => NULL - the scheduled date of the action. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *         'date_compare' => '<=' - operator for testing "date". accepted values are '!=', '>', '>=', '<', '<=', '='.
     *         'modified' => NULL - the date the action was last updated. Expects a DateTime object, a unix timestamp, or a string that can parsed with strtotime(). Used in UTC timezone.
     *         'modified_compare' => '<=' - operator for testing "modified". accepted values are '!=', '>', '>=', '<', '<=', '='.
     *         'group' => '' - the group the action belongs to.
     *         'status' => '' - ActionScheduler_Store::STATUS_COMPLETE or ActionScheduler_Store::STATUS_PENDING.
     *         'claimed' => NULL - TRUE to find claimed actions, FALSE to find unclaimed actions, a string to find a specific claim ID.
     *         'per_page' => 5 - Number of results to return.
     *         'offset' => 0.
     *         'orderby' => 'date' - accepted values are 'hook', 'group', 'modified', 'date' or 'none'.
     *         'order' => 'ASC'.
     *
     * @param string $return_format OBJECT, ARRAY_A, or ids.
     *
     * @return array
     */
    function as_get_scheduled_actions($args = array(), $return_format = \OBJECT)
    {
    }
    /**
     * Helper function to create an instance of DateTime based on a given
     * string and timezone. By default, will return the current date/time
     * in the UTC timezone.
     *
     * Needed because new DateTime() called without an explicit timezone
     * will create a date/time in PHP's timezone, but we need to have
     * assurance that a date/time uses the right timezone (which we almost
     * always want to be UTC), which means we need to always include the
     * timezone when instantiating datetimes rather than leaving it up to
     * the PHP default.
     *
     * @param mixed  $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php.
     * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php.
     *
     * @return ActionScheduler_DateTime
     */
    function as_get_datetime_object($date_string = \null, $timezone = 'UTC')
    {
    }
}