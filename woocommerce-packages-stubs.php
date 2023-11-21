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
        private $id = '';
        private $action_ids = array();
        public function __construct($id, array $action_ids)
        {
        }
        public function get_id()
        {
        }
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
         * @param string                   $status The action's status in the data store.
         * @param string                   $hook The hook to trigger when this action runs.
         * @param array                    $args Args to pass to callbacks when the hook is triggered.
         * @param ActionScheduler_Schedule $schedule The action's schedule.
         * @param string                   $group A group to put the action in.
         * @param int                      $priority The action priority.
         *
         * @return ActionScheduler_Action An instance of the stored action.
         */
        public function get_stored_action($status, $hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
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
         * @internal Not intended for public use, should not be overriden by subclasses.
         * @throws   Exception May be thrown if invalid options are passed.
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
         * @return int
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
         * @param int $post_id The ID of the 'scheduled-action' post for which this row relates.
         */
        public static function list_table_column_content($column_name, $post_id)
        {
        }
        /**
         * Hide the inline "Edit" action for all 'scheduled-action' posts.
         *
         * Hooked to the 'post_row_actions' filter.
         *
         * @param array $actions An associative array of actions which can be performed on the 'scheduled-action' post type.
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
         * even if an action is 1 day and 11 hours away, it will display "1 day". This funciton goes one step
         * further to display two degrees of accuracy.
         *
         * Based on Crontrol::interval() function by Edward Dale: https://wordpress.org/plugins/wp-crontrol/
         *
         * @param int $interval A interval in seconds.
         * @return string A human friendly string representation of the interval.
         */
        public static function admin_notices()
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $orderby MySQL orderby string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL orderby string.
         */
        public function custom_orderby($orderby, $query)
        {
        }
        /**
         * Filter search queries to allow searching by Claim ID (i.e. post_password).
         *
         * @param string $search MySQL search string.
         * @param WP_Query $query Instance of a WP_Query object
         * @return string MySQL search string.
         */
        public function search_post_password($search, $query)
        {
        }
        /**
         * Change messages when a scheduled action is updated.
         *
         * @param  array $messages
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
    }
    /**
     * Class ActionScheduler_AdminView
     * @codeCoverageIgnore
     */
    class ActionScheduler_AdminView extends \ActionScheduler_AdminView_Deprecated
    {
        private static $admin_view = \NULL;
        private static $screen_id = 'tools_page_action-scheduler';
        /** @var ActionScheduler_ListTable */
        protected $list_table;
        /**
         * @return ActionScheduler_AdminView
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
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
         *
         * @todo update $link_url to "Past-due" filter when released (see issue #510, PR #511)
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
         * @access protected
         */
        protected $store;
        /**
         * Prefix for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'as';
        /**
         * Action for ajax hooks
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request_queue_runner';
        /**
         * Initiate new async request
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
        /** @var ActionScheduler_DataController */
        private static $instance;
        /** @var int */
        private static $sleep_time = 0;
        /** @var int */
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
         * @param $offset
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
         * @param DateTimeZone $timezone
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
        /** @var ActionScheduler_ActionClaim */
        private $claim = \NULL;
        /** @var ActionScheduler_Store */
        private $store = \NULL;
        private $action_id = 0;
        public function __construct(\ActionScheduler_Store $store)
        {
        }
        public function attach(\ActionScheduler_ActionClaim $claim)
        {
        }
        public function detach()
        {
        }
        public function track_current_action($action_id)
        {
        }
        public function untrack_action()
        {
        }
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
         * @return static
         */
        public static function from_schedule($action_id, $schedule)
        {
        }
        /**
         * Create a new exception when the action's args cannot be decoded to an array.
         *
         * @author Jeremy Pry
         *
         * @param string $action_id The action ID with bad args.
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
         * This has the core for selecting, sorting and filting data. To keep the code simple
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
         * are serialized). This can be override in child classes for futher data transformation.
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
         * Default column formatting, it will escape everythig for security.
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
         * Bulk actions. The key of the array is the method name of the implementation:
         *
         *     bulk_<key>(array $ids, string $sql_in).
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
         * @param ActionScheduler_Store $store
         * @param ActionScheduler_Logger $logger
         * @param ActionScheduler_QueueRunner $runner
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
         * @param ActionScheduler_Action $action
         *
         * @return string
         */
        protected function get_recurrence($action)
        {
        }
        /**
         * Serializes the argument of an action to render it in a human friendly format.
         *
         * @param array $row The array representation of the current row of the table
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
         * @param ActionScheduler_LogEntry $log_entry
         * @param DateTimezone $timezone
         * @return string
         */
        protected function get_log_entry_html(\ActionScheduler_LogEntry $log_entry, \DateTimezone $timezone)
        {
        }
        /**
         * Only display row actions for pending actions.
         *
         * @param array  $row         Row to render
         * @param string $column_name Current row
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
         * @param array $row The array representation of the current row of the table
         *
         * @return string
         */
        public function column_schedule($row)
        {
        }
        /**
         * Get the scheduled date in a human friendly format.
         *
         * @param ActionScheduler_Schedule $schedule
         * @return string
         */
        protected function get_schedule_display_string(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * Bulk delete
         *
         * Deletes actions based on their ID. This is the handler for the bulk delete. It assumes the data
         * properly validated by the callee and it will delete the actions without any extra validation.
         *
         * @param array $ids
         * @param string $ids_sql Inherited and unused
         */
        protected function bulk_delete(array $ids, $ids_sql)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
         */
        protected function row_action_cancel($action_id)
        {
        }
        /**
         * Implements the logic behind running an action. ActionScheduler_Abstract_ListTable validates the request and their
         * parameters are valid.
         *
         * @param int $action_id
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
         * @param int $action_id
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
         * @var int $action_id
         */
        protected $action_id = '';
        /**
         * @var string $message
         */
        protected $message = '';
        /**
         * @var Datetime $date
         */
        protected $date;
        /**
         * Constructor
         *
         * @param mixed  $action_id Action ID
         * @param string $message   Message
         * @param Datetime $date    Datetime object with the time when this log entry was created. If this parameter is
         *                          not provided a new Datetime object (with current time) will be created.
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
        public function get_action_id()
        {
        }
        public function get_message()
        {
        }
    }
    /**
     * Class ActionScheduler_NullLogEntry
     */
    class ActionScheduler_NullLogEntry extends \ActionScheduler_LogEntry
    {
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
        /** @var ActionScheduler_Lock */
        private static $locker = \NULL;
        /** @var int */
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
        public abstract function set($lock_type);
        /**
         * If a lock is set, return the timestamp it was set to expiry.
         *
         * @param string $lock_type A string to identify different lock types.
         * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
         */
        public abstract function get_expiration($lock_type);
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
        /** @var int */
        protected $batch_size;
        /** @var ActionScheduler_Store */
        private $store = \null;
        /**
         * 31 days in seconds.
         *
         * @var int
         */
        private $month_in_seconds = 2678400;
        /**
         * @var string[] Default list of statuses purged by the cleaner process.
         */
        private $default_statuses_to_purge = [\ActionScheduler_Store::STATUS_COMPLETE, \ActionScheduler_Store::STATUS_CANCELED];
        /**
         * ActionScheduler_QueueCleaner constructor.
         *
         * @param ActionScheduler_Store $store      The store instance.
         * @param int                   $batch_size The batch size.
         */
        public function __construct(\ActionScheduler_Store $store = \null, $batch_size = 20)
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
         * @param string $context Calling process context. Defaults to `old`.
         * @return array Actions deleted.
         */
        public function clean_actions(array $statuses_to_purge, \DateTime $cutoff_date, $batch_size = \null, $context = 'old')
        {
        }
        /**
         * @param int[] $actions_to_delete List of action IDs to delete.
         * @param int $lifespan Minimum scheduled age in seconds of the actions being deleted.
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
         * the assumption some uncatachable and unloggable fatal error occurred during processing.
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
         * @author Jeremy Pry
         */
        public function clean($time_limit = 300)
        {
        }
        /**
         * Get the batch size for cleaning the queue.
         *
         * @author Jeremy Pry
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
        /** @var ActionScheduler_QueueCleaner */
        protected $cleaner;
        /** @var ActionScheduler_FatalErrorMonitor */
        protected $monitor;
        /** @var ActionScheduler_Store */
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
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
        {
        }
        /**
         * Process an individual action.
         *
         * @param int $action_id The action ID to process.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
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
         * @param ActionScheduler_Action $action
         * @param int $action_id
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
         *
         * @author Jeremy Pry
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
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
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
         * @param int $processed_actions The number of actions processed so far - used to determine the likelihood of exceeding the time limit if processing another action
         * @return bool
         */
        protected function batch_limits_exceeded($processed_actions)
        {
        }
        /**
         * Process actions in the queue.
         *
         * @author Jeremy Pry
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
         * @return int The number of actions processed.
         */
        public abstract function run($context = '');
    }
    /**
     * Class ActionScheduler_QueueRunner
     */
    class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
    {
        const WP_CRON_HOOK = 'action_scheduler_run_queue';
        const WP_CRON_SCHEDULE = 'every_minute';
        /** @var ActionScheduler_AsyncRequest_QueueRunner */
        protected $async_request;
        /** @var ActionScheduler_QueueRunner  */
        private static $runner = \null;
        /** @var int  */
        private $processed_actions_count = 0;
        /**
         * @return ActionScheduler_QueueRunner
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * ActionScheduler_QueueRunner constructor.
         *
         * @param ActionScheduler_Store             $store
         * @param ActionScheduler_FatalErrorMonitor $monitor
         * @param ActionScheduler_QueueCleaner      $cleaner
         */
        public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null, \ActionScheduler_AsyncRequest_QueueRunner $async_request = \null)
        {
        }
        /**
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
         * @see ActionScheduler_AsyncRequest_QueueRunner::handle()
         *
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
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
         * @param int $size The maximum number of actions to process in the batch.
         * @param string $context Optional identifer for the context in which this action is being processed, e.g. 'WP CLI' or 'WP Cron'
         *        Generally, this should be capitalised and not localised as it's a proper noun.
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
        public function add_wp_cron_schedule($schedules)
        {
        }
    }
    /**
     * Class ActionScheduler_Versions
     */
    class ActionScheduler_Versions
    {
        /**
         * @var ActionScheduler_Versions
         */
        private static $instance = \NULL;
        private $versions = array();
        public function register($version_string, $initialization_callback)
        {
        }
        public function get_versions()
        {
        }
        public function latest_version()
        {
        }
        public function latest_version_callback()
        {
        }
        /**
         * @return ActionScheduler_Versions
         * @codeCoverageIgnore
         */
        public static function instance()
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public static function initialize_latest_version()
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
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler
    {
        private static $plugin_file = '';
        /** @var ActionScheduler_ActionFactory */
        private static $factory = \NULL;
        /** @var bool */
        private static $data_store_initialized = \false;
        public static function factory()
        {
        }
        public static function store()
        {
        }
        public static function lock()
        {
        }
        public static function logger()
        {
        }
        public static function runner()
        {
        }
        public static function admin_view()
        {
        }
        /**
         * Get the absolute system path to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_path($path)
        {
        }
        /**
         * Get the absolute URL to the plugin directory, or a file therein
         * @static
         * @param string $path
         * @return string
         */
        public static function plugin_url($path)
        {
        }
        public static function autoload($class)
        {
        }
        /**
         * Initialize the plugin
         *
         * @static
         * @param string $plugin_file
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
        public final function __clone()
        {
        }
        public final function __wakeup()
        {
        }
        private final function __construct()
        {
        }
        /** Deprecated **/
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
         * @param DateTime $after
         * @return DateTime|null
         */
        public function next(\DateTime $after = \NULL);
        /**
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
        public function next(\DateTime $after = \null)
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
        private $scheduled_date = \NULL;
        /**
         * Timestamp equivalent of @see $this->scheduled_date
         *
         * @var int
         */
        protected $scheduled_timestamp = \NULL;
        /**
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
        public abstract function is_recurring();
        /**
         * Calculate when the next instance of this schedule would run based on a given date & time.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected abstract function calculate_next(\DateTime $after);
        /**
         * Get the next date & time when this schedule should run after a given date & time.
         *
         * @param DateTime $after
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
         * For PHP 5.2 compat, since DateTime objects can't be serialized
         * @return array
         */
        public function __sleep()
        {
        }
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
        private $first_date = \NULL;
        /**
         * Timestamp equivalent of @see $this->first_date
         *
         * @var int
         */
        protected $first_timestamp = \NULL;
        /**
         * The recurrance between each time an action is run using this schedule.
         * Used to calculate the start date & time. Can be a number of seconds, in the
         * case of ActionScheduler_IntervalSchedule, or a cron expression, as in the
         * case of ActionScheduler_CronSchedule. Or something else.
         *
         * @var mixed
         */
        protected $recurrence;
        /**
         * @param DateTime $date The date & time to run the action.
         * @param mixed $recurrence The data used to determine the schedule's recurrance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $date, $recurrence, \DateTime $first = \null)
        {
        }
        /**
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
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * For PHP 5.2 compat, since DateTime objects can't be serialized
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
         * @var int Increment this value in derived class to trigger a schema update.
         */
        protected $schema_version = 1;
        /**
         * @var string Schema version stored in database.
         */
        protected $db_version;
        /**
         * @var array Names of tables that will be registered by this class.
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
         * @param string $table The name of the table
         *
         * @return string The CREATE TABLE statement, suitable for passing to dbDelta
         */
        protected abstract function get_table_definition($table);
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
         * @param string $table The name of the table to update
         *
         * @return void
         */
        private function update_table($table)
        {
        }
        /**
         * @param string $table
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
     * @codeCoverageIgnore
     */
    abstract class ActionScheduler_Logger
    {
        private static $logger = \NULL;
        /**
         * @return ActionScheduler_Logger
         */
        public static function instance()
        {
        }
        /**
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public abstract function log($action_id, $message, \DateTime $date = \NULL);
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public abstract function get_entry($entry_id);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public abstract function get_logs($action_id);
        /**
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function hook_stored_action()
        {
        }
        public function unhook_stored_action()
        {
        }
        public function log_stored_action($action_id)
        {
        }
        public function log_canceled_action($action_id)
        {
        }
        public function log_started_action($action_id, $context = '')
        {
        }
        public function log_completed_action($action_id, $action = \NULL, $context = '')
        {
        }
        public function log_failed_action($action_id, \Exception $exception, $context = '')
        {
        }
        public function log_timed_out_action($action_id, $timeout)
        {
        }
        public function log_unexpected_shutdown($action_id, $error)
        {
        }
        public function log_reset_action($action_id)
        {
        }
        public function log_ignored_action($action_id, $context = '')
        {
        }
        /**
         * @param string $action_id
         * @param Exception|NULL $exception The exception which occured when fetching the action. NULL by default for backward compatibility.
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function log_failed_fetch_action($action_id, \Exception $exception = \NULL)
        {
        }
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
        /** @var ActionScheduler_Store */
        private static $store = \NULL;
        /** @var int */
        protected static $max_args_length = 191;
        /**
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date Optional Date of the first instance
         *        to store. Otherwise uses the first date of the action's
         *        schedule.
         *
         * @return int The action ID
         */
        public abstract function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL);
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_Action
         */
        public abstract function fetch_action($action_id);
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
        public abstract function query_actions($query = array(), $query_type = 'select');
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
        public abstract function action_counts();
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
         * @param string $action_id
         */
        public abstract function cancel_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function delete_action($action_id);
        /**
         * @param string $action_id
         *
         * @return DateTime The date the action is schedule to run, or the date that it ran.
         */
        public abstract function get_date($action_id);
        /**
         * @param int      $max_actions
         * @param DateTime $before_date Claim only actions schedule before the given date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         */
        public abstract function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '');
        /**
         * @return int
         */
        public abstract function get_claim_count();
        /**
         * @param ActionScheduler_ActionClaim $claim
         */
        public abstract function release_claim(\ActionScheduler_ActionClaim $claim);
        /**
         * @param string $action_id
         */
        public abstract function unclaim_action($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_failure($action_id);
        /**
         * @param string $action_id
         */
        public abstract function log_execution($action_id);
        /**
         * @param string $action_id
         */
        public abstract function mark_complete($action_id);
        /**
         * @param string $action_id
         *
         * @return string
         */
        public abstract function get_status($action_id);
        /**
         * @param string $action_id
         * @return mixed
         */
        public abstract function get_claim_id($action_id);
        /**
         * @param string $claim_id
         * @return array
         */
        public abstract function find_actions_by_claim_id($claim_id);
        /**
         * @param string $comparison_operator
         * @return string
         */
        protected function validate_sql_comparator($comparison_operator)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
        {
        }
        /**
         * Get the time MySQL formated date/time string for an action's (next) scheduled date.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
         * @return string
         */
        protected function get_scheduled_date_string_local(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
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
         * @param array $action_ids List of action IDs.
         *
         * @return void
         */
        private function bulk_cancel_actions($action_ids)
        {
        }
        /**
         * @return array
         */
        public function get_status_labels()
        {
        }
        /**
         * Check if there are any pending scheduled actions due to run.
         *
         * @param ActionScheduler_Action $action
         * @param DateTime $scheduled_date (optional)
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
         */
        public function mark_migrated($action_id)
        {
        }
        /**
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
        private static $local_timezone = \NULL;
        /**
         * Set a DateTime's timezone to the WordPress site's timezone, or a UTC offset
         * if no timezone string is available.
         *
         * @since  2.1.0
         *
         * @param DateTime $date
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
         * @deprecated 2.1.0
         */
        public static function get_local_timezone($reset = \FALSE)
        {
        }
    }
    /**
     * Class ActionScheduler_Action
     */
    class ActionScheduler_Action
    {
        protected $hook = '';
        protected $args = array();
        /** @var ActionScheduler_Schedule */
        protected $schedule = \NULL;
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
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \NULL, $group = '')
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
         * @param string $hook
         */
        protected function set_hook($hook)
        {
        }
        public function get_hook()
        {
        }
        protected function set_schedule(\ActionScheduler_Schedule $schedule)
        {
        }
        /**
         * @return ActionScheduler_Schedule
         */
        public function get_schedule()
        {
        }
        protected function set_args(array $args)
        {
        }
        public function get_args()
        {
        }
        /**
         * @param string $group
         */
        protected function set_group($group)
        {
        }
        /**
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * @return bool If the action has been finished
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
        public function execute()
        {
        }
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
         * @param string $hook
         * @param array $args
         * @param ActionScheduler_Schedule $schedule
         * @param string $group
         */
        public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
        {
        }
    }
    /**
     * Class ActionScheduler_NullAction
     */
    class ActionScheduler_NullAction extends \ActionScheduler_Action
    {
        public function __construct($hook = '', array $args = array(), \ActionScheduler_Schedule $schedule = \NULL)
        {
        }
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
         * @param int      $action_id Action ID.
         * @param string   $message Message to be saved in the log entry.
         * @param DateTime $date Timestamp of the log entry.
         *
         * @return int     The log entry ID.
         */
        public function log($action_id, $message, \DateTime $date = \null)
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
         * Retrieve the an action's log entries from the database.
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
        /** @var int */
        protected static $max_args_length = 8000;
        /** @var int */
        protected static $max_index_length = 191;
        /** @var array List of claim filters. */
        protected $claim_filters = ['group' => '', 'hooks' => '', 'exclude-groups' => ''];
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
         * @param \DateTime              $scheduled_date Optional schedule date. Default null.
         *
         * @return int                  Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_unique_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null)
        {
        }
        /**
         * Save an action. Can save duplicate action as well, prefer using `save_unique_action` instead.
         *
         * @param ActionScheduler_Action $action Action object.
         * @param \DateTime              $scheduled_date Optional schedule date. Default null.
         *
         * @return int Action ID.
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null)
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
         * @throws RuntimeException     Throws exception when saving the action fails.
         */
        private function save_action_to_db(\ActionScheduler_Action $action, \DateTime $date = \null, $unique = \false)
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
         * @throws InvalidArgumentException If the query is invalid.
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
         * @param int       $max_actions Maximum number of action to include in claim.
         * @param \DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array     $hooks Hooks to filter for.
         * @param string    $group Group to filter for.
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
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
         * @param mixed $filter_values Values to filter.
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
         * @param string    $claim_id Claim Id.
         * @param int       $limit Number of action to include in claim.
         * @param \DateTime $before_date Should use UTC timezone.
         * @param array     $hooks Hooks to filter for.
         * @param string    $group Group to filter for.
         *
         * @return int The number of actions that were claimed.
         * @throws \InvalidArgumentException Throws InvalidArgumentException if group doesn't exist.
         * @throws \RuntimeException Throws RuntimeException if unable to claim action.
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
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
        private $primary_store;
        private $secondary_store;
        private $migration_runner;
        /**
         * @var int The dividing line between IDs of actions created
         *          by the primary and secondary stores.
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
         * @param Config $config Migration config object.
         */
        public function __construct(\Action_Scheduler\Migration\Config $config = \null)
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
         * @param string $table_name
         * @param string $table_suffix
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
         * @param string $hook
         * @param array  $params
         *
         * @return string
         */
        public function find_action($hook, $params = [])
        {
        }
        /**
         * Find actions matching the query in the secondary source first.
         * If any are found, migrate them immediately. Then the secondary
         * store will contain the canonical results.
         *
         * @param array $query
         * @param string $query_type Whether to select or count the results. Default, select.
         *
         * @return int[]
         */
        public function query_actions($query = [], $query_type = 'select')
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
         * @param int           $max_actions
         * @param DateTime|null $before_date
         *
         * @return ActionScheduler_ActionClaim
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
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
         * @param DateTime               $date Optional. Schedule date. Default null.
         *
         * @return int The action ID
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $date = \null)
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
        /* * * * * * * * * * * * * * * * * * * * * * * * * * *
         * All claim-related functions should operate solely
         * on the primary store.
         * * * * * * * * * * * * * * * * * * * * * * * * * * */
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
         * @param string $action_id
         * @param string $message
         * @param DateTime $date
         *
         * @return string The log entry ID
         */
        public function log($action_id, $message, \DateTime $date = \NULL)
        {
        }
        protected function create_wp_comment($action_id, $message, \DateTime $date)
        {
        }
        /**
         * @param string $entry_id
         *
         * @return ActionScheduler_LogEntry
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * @param string $action_id
         *
         * @return ActionScheduler_LogEntry[]
         */
        public function get_logs($action_id)
        {
        }
        protected function get_comment($comment_id)
        {
        }
        /**
         * @param WP_Comment_Query $query
         */
        public function filter_comment_queries($query)
        {
        }
        /**
         * @param array $clauses
         * @param WP_Comment_Query $query
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
         * @param string $where
         * @param WP_Query $query
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
         * @param array $stats
         * @param int $post_id
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
         * @codeCoverageIgnore
         */
        public function init()
        {
        }
        public function disable_comment_counting()
        {
        }
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
         * @param DateTime               $scheduled_date Scheduled Date.
         *
         * @throws RuntimeException Throws an exception if the action could not be saved.
         * @return int
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null)
        {
        }
        /**
         * Create post array.
         *
         * @param ActionScheduler_Action $action Scheduled Action.
         * @param DateTime               $scheduled_date Scheduled Date.
         *
         * @return array Returns an array of post data.
         */
        protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null)
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
         * @param int      $max_actions Maximum number of actions.
         * @param DateTime $before_date Jobs must be schedule before this date. Defaults to now.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return ActionScheduler_ActionClaim
         * @throws RuntimeException When there is an error staking a claim.
         * @throws InvalidArgumentException When the given group is not valid.
         */
        public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
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
         * @param string   $claim_id    Claim ID.
         * @param int      $limit       Limit.
         * @param DateTime $before_date Should use UTC timezone.
         * @param array    $hooks       Claim only actions with a hook or hooks.
         * @param string   $group       Claim only actions in the given group.
         *
         * @return int The number of actions that were claimed.
         * @throws RuntimeException  When there is a database error.
         */
        protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
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
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostStatusRegistrar
    {
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
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_PostTypeRegistrar
    {
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
     * @codeCoverageIgnore
     */
    class ActionScheduler_wpPostStore_TaxonomyRegistrar
    {
        public function register()
        {
        }
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
        /** var ActionScheduler_Store */
        private $source;
        /** var ActionScheduler_Store */
        private $destination;
        /** var LogMigrator */
        private $log_migrator;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Store $source_store Source store object.
         * @param ActionScheduler_Store $destination_store Destination store object.
         * @param LogMigrator           $log_migrator Log migrator object.
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
     * A  class for direct saving of actions to the table data store during migration.
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
         * @param ActionScheduler_Action $action
         * @param \DateTime $scheduled_date Optional date of the first instance to store.
         * @param \DateTime $last_attempt_date Optional date the action was last attempted.
         *
         * @return string The action ID
         * @throws \RuntimeException When the action is not saved.
         */
        public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \null, \DateTime $last_attempt_date = \null)
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
        /** var ActionScheduler_Store */
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
         * @param int $count The number of actions to retrieve
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
        /** @var ActionScheduler_Store */
        private $source_store;
        /** @var ActionScheduler_Logger */
        private $source_logger;
        /** @var ActionScheduler_Store */
        private $destination_store;
        /** @var ActionScheduler_Logger */
        private $destination_logger;
        /** @var Progress bar */
        private $progress_bar;
        /** @var bool */
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
         * Get the configured source loger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_source_logger()
        {
        }
        /**
         * Set the configured source logger.
         *
         * @param ActionScheduler_Logger $logger
         */
        public function set_source_logger(\ActionScheduler_Logger $logger)
        {
        }
        /**
         * Get the configured destination store.
         *
         * @return ActionScheduler_Store
         */
        public function get_destination_store()
        {
        }
        /**
         * Set the configured destination store.
         *
         * @param ActionScheduler_Store $store
         */
        public function set_destination_store(\ActionScheduler_Store $store)
        {
        }
        /**
         * Get the configured destination logger.
         *
         * @return ActionScheduler_Logger
         */
        public function get_destination_logger()
        {
        }
        /**
         * Set the configured destination logger.
         *
         * @param ActionScheduler_Logger $logger
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
         * @param bool $dry_run
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
         * @param ActionScheduler\WPCLI\ProgressBar $progress_bar
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
        private static $instance;
        /** @var Action_Scheduler\Migration\Scheduler */
        private $migration_scheduler;
        /** @var string */
        private $store_classname;
        /** @var string */
        private $logger_classname;
        /** @var bool */
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
         *
         * @author Jeremy Pry
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
        /** @var ActionScheduler_Logger */
        private $source;
        /** @var ActionScheduler_Logger */
        private $destination;
        /**
         * ActionMigrator constructor.
         *
         * @param ActionScheduler_Logger $source_logger Source logger object.
         * @param ActionScheduler_Logger $destination_Logger Destination logger object.
         */
        public function __construct(\ActionScheduler_Logger $source_logger, \ActionScheduler_Logger $destination_Logger)
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
        /** @var ActionScheduler_Store */
        private $source_store;
        /** @var ActionScheduler_Store */
        private $destination_store;
        /** @var ActionScheduler_Logger */
        private $source_logger;
        /** @var ActionScheduler_Logger */
        private $destination_logger;
        /** @var BatchFetcher */
        private $batch_fetcher;
        /** @var ActionMigrator */
        private $action_migrator;
        /** @var LogMigrator */
        private $log_migrator;
        /** @var ProgressBar */
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
         **/
        private $timestamp = \NULL;
        /**
         * @param DateTime $after
         *
         * @return DateTime|null
         */
        public function calculate_next(\DateTime $after)
        {
        }
        /**
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
         **/
        private $timestamp = \NULL;
        /**
         * @param DateTime $after
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
         * @param DateTime $after
         * @return DateTime|null
         */
        public function get_next(\DateTime $after)
        {
        }
        /**
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
         **/
        private $start_timestamp = \NULL;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $cron = \NULL;
        /**
         * Wrapper for parent constructor to accept a cron expression string and map it to a CronExpression for this
         * objects $recurrence property.
         *
         * @param DateTime $start The date & time to run the action at or after. If $start aligns with the CronSchedule passed via $recurrence, it will be used. If it does not align, the first matching date after it will be used.
         * @param CronExpression|string $recurrence The CronExpression used to calculate the schedule's next instance.
         * @param DateTime|null $first (Optional) The date & time the first instance of this interval schedule ran. Default null, meaning this is the first instance.
         */
        public function __construct(\DateTime $start, $recurrence, \DateTime $first = \null)
        {
        }
        /**
         * Calculate when an instance of this schedule would start based on a given
         * date & time using its the CronExpression.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return string
         */
        public function get_recurrence()
        {
        }
        /**
         * Serialize cron schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
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
         **/
        private $start_timestamp = \NULL;
        /**
         * Deprecated property @see $this->__wakeup() for details.
         **/
        private $interval_in_seconds = \NULL;
        /**
         * Calculate when this schedule should start after a given date & time using
         * the number of seconds between recurrences.
         *
         * @param DateTime $after
         * @return DateTime
         */
        protected function calculate_next(\DateTime $after)
        {
        }
        /**
         * @return int
         */
        public function interval_in_seconds()
        {
        }
        /**
         * Serialize interval schedules with data required prior to AS 3.0.0
         *
         * Prior to Action Scheduler 3.0.0, reccuring schedules used different property names to
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
        /** @var DateTime|null */
        protected $scheduled_date;
        /**
         * Make the $date param optional and default to null.
         *
         * @param null $date The date & time to run the action.
         */
        public function __construct(\DateTime $date = \null)
        {
        }
        /**
         * This schedule has no scheduled DateTime, so we need to override the parent __sleep()
         * @return array
         */
        public function __sleep()
        {
        }
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
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 3;
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
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
         * @var int Increment this value to trigger a schema update.
         */
        protected $schema_version = 7;
        public function __construct()
        {
        }
        /**
         * Performs additional setup work required to support this schema.
         */
        public function init()
        {
        }
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
namespace Automattic\WooCommerce\Blocks\AI {
    /**
     * Class Configuration
     */
    class Configuration
    {
        /**
         * The name of the option that stores the site owner's consent to connect to the AI API.
         *
         * @var string
         */
        private $consent_option_name = 'woocommerce_blocks_allow_ai_connection';
        /**
         * The Jetpack connection manager.
         *
         * @var Manager
         */
        private $manager;
        /**
         * The Jetpack configuration.
         *
         * @var Config
         */
        private $config;
        /**
         * Configuration constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize the site and user connection and registration.
         *
         * @return bool|\WP_Error
         */
        public function init()
        {
        }
        /**
         * Verify if the site should connect to Jetpack.
         *
         * @return bool
         */
        private function should_connect()
        {
        }
        /**
         * Initialize Jetpack's connection feature within the WooCommerce Blocks plugin.
         *
         * @return void
         */
        private function enable_connection_feature()
        {
        }
        /**
         * Register the site with Jetpack.
         *
         * @return bool|\WP_Error
         */
        private function register_and_connect()
        {
        }
        /**
         * Unregister the site with Jetpack.
         *
         * @return void
         */
        private function unregister_site()
        {
        }
    }
    /**
     * Class Connection
     */
    class Connection
    {
        const TEXT_COMPLETION_API_URL = 'https://public-api.wordpress.com/wpcom/v2/text-completion';
        /**
         * The post request.
         *
         * @param string $token The JWT token.
         * @param string $prompt The prompt to send to the API.
         * @param int    $timeout The timeout for the request.
         *
         * @return mixed
         */
        public function fetch_ai_response($token, $prompt, $timeout = 15)
        {
        }
        /**
         * Fetch the AI responses in parallel using the given token and prompts.
         *
         * @param string $token The JWT token.
         * @param array  $prompts The prompts to send to the API.
         * @param int    $timeout The timeout for the request.
         *
         * @return array|WP_Error The responses or a WP_Error object.
         */
        public function fetch_ai_responses($token, array $prompts, $timeout = 15)
        {
        }
        /**
         * Return the site ID.
         *
         * @return integer|\WP_Error The site ID or a WP_Error object.
         */
        public function get_site_id()
        {
        }
        /**
         * Fetch the JWT token.
         *
         * @param integer $site_id The site ID.
         *
         * @return string|\WP_Error The JWT token or a WP_Error object.
         */
        public function get_jwt_token($site_id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Assets class.
     *
     * @deprecated 5.0.0 This class will be removed in a future release. This has been replaced by AssetsController.
     * @internal
     */
    class Assets
    {
        /**
         * Initialize class features on init.
         *
         * @since 2.5.0
         * @deprecated 5.0.0
         */
        public static function init()
        {
        }
        /**
         * Register block scripts & styles.
         *
         * @since 2.5.0
         * @deprecated 5.0.0
         */
        public static function register_assets()
        {
        }
        /**
         * Register the vendors style file. We need to do it after the other files
         * because we need to check if `wp-edit-post` has been enqueued.
         *
         * @deprecated 5.0.0
         */
        public static function enqueue_scripts()
        {
        }
        /**
         * Add body classes.
         *
         * @deprecated 5.0.0
         * @param array $classes Array of CSS classnames.
         * @return array Modified array of CSS classnames.
         */
        public static function add_theme_body_class($classes = [])
        {
        }
        /**
         * Add theme class to admin body.
         *
         * @deprecated 5.0.0
         * @param array $classes String with the CSS classnames.
         * @return array Modified string of CSS classnames.
         */
        public static function add_theme_admin_body_class($classes = '')
        {
        }
        /**
         * Adds a redirect field to the login form so blocks can redirect users after login.
         *
         * @deprecated 5.0.0
         */
        public static function redirect_to_field()
        {
        }
        /**
         * Queues a block script in the frontend.
         *
         * @since 2.3.0
         * @since 2.6.0 Changed $name to $script_name and added $handle argument.
         * @since 2.9.0 Made it so scripts are not loaded in admin pages.
         * @deprecated 4.5.0 Block types register the scripts themselves.
         *
         * @param string $script_name  Name of the script used to identify the file inside build folder.
         * @param string $handle       Optional. Provided if the handle should be different than the script name. `wc-` prefix automatically added.
         * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
         */
        public static function register_block_script($script_name, $handle = '', $dependencies = [])
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Assets {
    /**
     * The Api class provides an interface to various asset registration helpers.
     *
     * Contains asset api methods
     *
     * @since 2.5.0
     */
    class Api
    {
        /**
         * Stores inline scripts already enqueued.
         *
         * @var array
         */
        private $inline_scripts = [];
        /**
         * Determines if caching is enabled for script data.
         *
         * @var boolean
         */
        private $disable_cache = false;
        /**
         * Stores loaded script data for the current request
         *
         * @var array|null
         */
        private $script_data = null;
        /**
         * Stores the hash for the script data, made up of the site url, plugin version and package path.
         *
         * @var string
         */
        private $script_data_hash;
        /**
         * Stores the transient key used to cache the script data. This will change if the site is accessed via HTTPS or HTTP.
         *
         * @var string
         */
        private $script_data_transient_key = 'woocommerce_blocks_asset_api_script_data';
        /**
         * Reference to the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor for class
         *
         * @param Package $package An instance of Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file (relative to the plugin
         *                     directory).
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version($file)
        {
        }
        /**
         * Retrieve the url to an asset for this plugin.
         *
         * @param string $relative_path An optional relative path appended to the
         *                              returned url.
         *
         * @return string
         */
        protected function get_asset_url($relative_path = '')
        {
        }
        /**
         * Get the path to a block's metadata
         *
         * @param string $block_name The block to get metadata for.
         * @param string $path Optional. The path to the metadata file inside the 'build' folder.
         *
         * @return string|boolean False if metadata file is not found for the block.
         */
        public function get_block_metadata_path($block_name, $path = '')
        {
        }
        /**
         * Generates a hash containing the site url, plugin version and package path.
         *
         * Moving the plugin, changing the version, or changing the site url will result in a new hash and the cache will be invalidated.
         *
         * @return string The generated hash.
         */
        private function get_script_data_hash()
        {
        }
        /**
         * Initialize and load cached script data from the transient cache.
         *
         * @return array
         */
        private function get_cached_script_data()
        {
        }
        /**
         * Store all cached script data in the transient cache.
         */
        public function update_script_data_cache()
        {
        }
        /**
         * Get src, version and dependencies given a script relative src.
         *
         * @param string $relative_src Relative src to the script.
         * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
         *
         * @return array src, version and dependencies of the script.
         */
        public function get_script_data($relative_src, $dependencies = [])
        {
        }
        /**
         * Registers a script according to `wp_register_script`, adding the correct prefix, and additionally loading translations.
         *
         * When creating script assets, the following rules should be followed:
         *   1. All asset handles should have a `wc-` prefix.
         *   2. If the asset handle is for a Block (in editor context) use the `-block` suffix.
         *   3. If the asset handle is for a Block (in frontend context) use the `-block-frontend` suffix.
         *   4. If the asset is for any other script being consumed or enqueued by the blocks plugin, use the `wc-blocks-` prefix.
         *
         * @since 2.5.0
         * @throws Exception If the registered script has a dependency on itself.
         *
         * @param string $handle        Unique name of the script.
         * @param string $relative_src  Relative url for the script to the path from plugin root.
         * @param array  $dependencies  Optional. An array of registered script handles this script depends on. Default empty array.
         * @param bool   $has_i18n      Optional. Whether to add a script translation call to this file. Default: true.
         */
        public function register_script($handle, $relative_src, $dependencies = [], $has_i18n = true)
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.5.0
         * @since 2.6.0 Change src to be relative source.
         *
         * @param string  $handle       Name of the stylesheet. Should be unique.
         * @param string  $relative_src Relative source of the stylesheet to the plugin path.
         * @param array   $deps         Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string  $media        Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                              'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         * @param boolean $rtl   Optional. Whether or not to register RTL styles.
         */
        public function register_style($handle, $relative_src, $deps = [], $media = 'all', $rtl = false)
        {
        }
        /**
         * Returns the appropriate asset path for current builds.
         *
         * @param   string $filename  Filename for asset path (without extension).
         * @param   string $type      File type (.css or .js).
         * @return  string             The generated path.
         */
        public function get_block_asset_build_path($filename, $type = 'js')
        {
        }
        /**
         * Adds an inline script, once.
         *
         * @param string $handle Script handle.
         * @param string $script Script contents.
         */
        public function add_inline_script($handle, $script)
        {
        }
    }
    /**
     * Class instance for registering data used on the current view session by
     * assets.
     *
     * Holds data registered for output on the current view session when
     * `wc-settings` is enqueued( directly or via dependency )
     *
     * @since 2.5.0
     */
    class AssetDataRegistry
    {
        /**
         * Contains registered data.
         *
         * @var array
         */
        private $data = [];
        /**
         * Contains preloaded API data.
         *
         * @var array
         */
        private $preloaded_api_requests = [];
        /**
         * Lazy data is an array of closures that will be invoked just before
         * asset data is generated for the enqueued script.
         *
         * @var array
         */
        private $lazy_data = [];
        /**
         * Asset handle for registered data.
         *
         * @var string
         */
        private $handle = 'wc-settings';
        /**
         * Asset API interface for various asset registration.
         *
         * @var API
         */
        private $api;
        /**
         * Constructor
         *
         * @param Api $asset_api  Asset API interface for various asset registration.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Hook into WP asset registration for enqueueing asset data.
         */
        protected function init()
        {
        }
        /**
         * Exposes core data via the wcSettings global. This data is shared throughout the client.
         *
         * Settings that are used by various components or multiple blocks should be added here. Note, that settings here are
         * global so be sure not to add anything heavy if possible.
         *
         * @return array  An array containing core data.
         */
        protected function get_core_data()
        {
        }
        /**
         * Get currency data to include in settings.
         *
         * @return array
         */
        protected function get_currency_data()
        {
        }
        /**
         * Get locale data to include in settings.
         *
         * @return array
         */
        protected function get_locale_data()
        {
        }
        /**
         * Get store pages to include in settings.
         *
         * @return array
         */
        protected function get_store_pages()
        {
        }
        /**
         * Get product related settings.
         *
         * Note: For the time being we are exposing only the settings that are used by blocks.
         *
         * @return array
         */
        protected function get_products_settings()
        {
        }
        /**
         * Format a page object into a standard array of data.
         *
         * @param WP_Post|int $page Page object or ID.
         * @return array
         */
        protected function format_page_resource($page)
        {
        }
        /**
         * Returns block-related data for enqueued wc-settings script.
         * Format order statuses by removing a leading 'wc-' if present.
         *
         * @return array formatted statuses.
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Used for on demand initialization of asset data and registering it with
         * the internal data registry.
         *
         * Note: core data will overwrite any externally registered data via the api.
         */
        protected function initialize_core_data()
        {
        }
        /**
         * Loops through each registered lazy data callback and adds the returned
         * value to the data array.
         *
         * This method is executed right before preparing the data for printing to
         * the rendered screen.
         *
         * @return void
         */
        protected function execute_lazy_data()
        {
        }
        /**
         * Exposes private registered data to child classes.
         *
         * @return array  The registered data on the private data property
         */
        protected function get()
        {
        }
        /**
         * Allows checking whether a key exists.
         *
         * @param string $key  The key to check if exists.
         * @return bool  Whether the key exists in the current data registry.
         */
        public function exists($key)
        {
        }
        /**
         * Interface for adding data to the registry.
         *
         * You can only register data that is not already in the registry identified by the given key. If there is a
         * duplicate found, unless $ignore_duplicates is true, an exception will be thrown.
         *
         * @param string  $key              The key used to reference the data being registered. This should use camelCase.
         * @param mixed   $data             If not a function, registered to the registry as is. If a function, then the
         *                                  callback is invoked right before output to the screen.
         * @param boolean $check_key_exists If set to true, duplicate data will be ignored if the key exists.
         *                                  If false, duplicate data will cause an exception.
         *
         * @throws InvalidArgumentException  Only throws when site is in debug mode. Always logs the error.
         */
        public function add($key, $data, $check_key_exists = false)
        {
        }
        /**
         * Hydrate from the API.
         *
         * @param string $path REST API path to preload.
         */
        public function hydrate_api_request($path)
        {
        }
        /**
         * Hydrate some data from the API.
         *
         * @param string  $key  The key used to reference the data being registered.
         * @param string  $path REST API path to preload.
         * @param boolean $check_key_exists If set to true, duplicate data will be ignored if the key exists.
         *                                  If false, duplicate data will cause an exception.
         *
         * @throws InvalidArgumentException  Only throws when site is in debug mode. Always logs the error.
         */
        public function hydrate_data_from_api_request($key, $path, $check_key_exists = false)
        {
        }
        /**
         * Adds a page permalink to the data registry.
         *
         * @param integer $page_id Page ID to add to the registry.
         */
        public function register_page_id($page_id)
        {
        }
        /**
         * Callback for registering the data script via WordPress API.
         *
         * @return void
         */
        public function register_data_script()
        {
        }
        /**
         * Callback for enqueuing asset data via the WP api.
         *
         * Note: while this is hooked into print/admin_print_scripts, it still only
         * happens if the script attached to `wc-settings` handle is enqueued. This
         * is done to allow for any potentially expensive data generation to only
         * happen for routes that need it.
         */
        public function enqueue_asset_data()
        {
        }
        /**
         * See self::add() for docs.
         *
         * @param   string $key   Key for the data.
         * @param   mixed  $data  Value for the data.
         *
         * @throws InvalidArgumentException  If key is not a string or already
         *                                   exists in internal data cache.
         */
        protected function add_data($key, $data)
        {
        }
        /**
         * Exposes whether the current site is in debug mode or not.
         *
         * @return boolean  True means the site is in debug mode.
         */
        protected function debug()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * AssetsController class.
     *
     * @since 5.0.0
     * @internal
     */
    final class AssetsController
    {
        /**
         * Asset API interface for various asset registration.
         *
         * @var AssetApi
         */
        private $api;
        /**
         * Constructor.
         *
         * @param AssetApi $asset_api  Asset API interface for various asset registration.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initialize class features.
         */
        protected function init()
        {
        }
        /**
         * Register block scripts & styles.
         */
        public function register_assets()
        {
        }
        /**
         * Register and enqueue assets for exclusive usage within the Site Editor.
         */
        public function register_and_enqueue_site_editor_assets()
        {
        }
        /**
         * Defines resource hints to help speed up the loading of some critical blocks.
         *
         * These will not impact page loading times negatively because they are loaded once the current page is idle.
         *
         * @param array  $urls          URLs to print for resource hints. Each URL is an array of resource attributes, or a URL string.
         * @param string $relation_type The relation type the URLs are printed. Possible values: preconnect, dns-prefetch, prefetch, prerender.
         * @return array URLs to print for resource hints.
         */
        public function add_resource_hints($urls, $relation_type)
        {
        }
        /**
         * Get resource hints during prefetch requests.
         *
         * @return array Array of URLs.
         */
        private function get_prefetch_resource_hints()
        {
        }
        /**
         * Get resource hints during prerender requests.
         *
         * @return array Array of URLs.
         */
        private function get_prerender_resource_hints()
        {
        }
        /**
         * Get resource hint for a block by name.
         *
         * @param string $filename Block filename.
         * @return array
         */
        private function get_block_asset_resource_hints($filename = '')
        {
        }
        /**
         * Get the src of all script dependencies (handles).
         *
         * @param array $dependencies Array of dependency handles.
         * @return string[] Array of src strings.
         */
        private function get_script_dependency_src_array(array $dependencies)
        {
        }
        /**
         * Returns an absolute url to relative links for WordPress core scripts.
         *
         * @param string $src Original src that can be relative.
         * @return string Correct full path string.
         */
        private function get_absolute_url($src)
        {
        }
        /**
         * Add body classes to the frontend and within admin.
         *
         * @param string|array $classes Array or string of CSS classnames.
         * @return string|array Modified classnames.
         */
        public function add_theme_body_class($classes)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version($file)
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @param string  $handle Name of the stylesheet. Should be unique.
         * @param string  $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
         * @param array   $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string  $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                        'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         * @param boolean $rtl   Optional. Whether or not to register RTL styles.
         */
        protected function register_style($handle, $src, $deps = [], $media = 'all', $rtl = false)
        {
        }
        /**
         * Update block style dependencies after they have been registered.
         */
        public function update_block_style_dependencies()
        {
        }
        /**
         * Fix scripts with wc-settings dependency.
         *
         * The wc-settings script only works correctly when enqueued in the footer. This is to give blocks etc time to
         * register their settings data before it's printed.
         *
         * This code will look at registered scripts, and if they have a wc-settings dependency, force them to print in the
         * footer instead of the header.
         *
         * This only supports packages known to require wc-settings!
         *
         * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/5052
         */
        public function update_block_settings_dependencies()
        {
        }
    }
    /**
     * Registers patterns under the `./patterns/` directory and updates their content.
     * Each pattern is defined as a PHP file and defines its metadata using plugin-style headers.
     * The minimum required definition is:
     *
     *     /**
     *      * Title: My Pattern
     *      * Slug: my-theme/my-pattern
     *      *
     *
     * The output of the PHP source corresponds to the content of the pattern, e.g.:
     *
     *     <main><p><?php echo "Hello"; ?></p></main>
     *
     * Other settable fields include:
     *
     *   - Description
     *   - Viewport Width
     *   - Categories       (comma-separated values)
     *   - Keywords         (comma-separated values)
     *   - Block Types      (comma-separated values)
     *   - Inserter         (yes/no)
     *
     * @internal
     */
    class BlockPatterns
    {
        const SLUG_REGEX = '/^[A-z0-9\\/_-]+$/';
        const COMMA_SEPARATED_REGEX = '/[\\s,]+/';
        /**
         * Path to the patterns directory.
         *
         * @var string $patterns_path
         */
        private $patterns_path;
        /**
         * Constructor for class
         *
         * @param Package $package An instance of Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Make sure the 'woocommerce_blocks_allow_ai_connection' option is set to true if the site is connected to AI.
         *
         * @param string $option The option name.
         * @param string $value The option value.
         *
         * @return bool
         */
        public function update_ai_connection_allowed_option($option, $value) : bool
        {
        }
        /**
         * Registers the block patterns and categories under `./patterns/`.
         */
        public function register_block_patterns()
        {
        }
        /**
         * Update the patterns content when the store description is changed.
         *
         * @param string $option The option name.
         * @param string $value The option value.
         */
        public function schedule_on_option_update($option, $value)
        {
        }
        /**
         * Update the patterns content when the WooCommerce Blocks plugin is updated.
         *
         * @param \WP_Upgrader $upgrader_object  WP_Upgrader instance.
         * @param array        $options  Array of bulk item update data.
         */
        public function schedule_on_plugin_update($upgrader_object, $options)
        {
        }
        /**
         * Update the patterns content when the store description is changed.
         *
         * @param string $business_description The business description.
         */
        public function schedule_patterns_content_update($business_description)
        {
        }
        /**
         * Update the patterns content.
         *
         * @param string $value The new value saved for the add_option_woo_ai_describe_store_description option.
         *
         * @return bool|string|\WP_Error
         */
        public function update_patterns_content($value)
        {
        }
    }
    /**
     * BlockTypesController class.
     *
     * @internal
     */
    class BlockTemplatesController
    {
        /**
         * Directory which contains all templates
         *
         * @var string
         */
        const TEMPLATES_ROOT_DIR = 'templates';
        /**
         * Package instance.
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor.
         *
         * @param Package $package An instance of Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * Add Mini-Cart to the default template part areas.
         *
         * @param array $default_area_definitions An array of supported area objects.
         * @return array The supported template part areas including the Mini-Cart one.
         */
        public function register_mini_cart_template_part_area($default_area_definitions)
        {
        }
        /**
         * Renders the `core/template-part` block on the server.
         *
         * @param array $attributes The block attributes.
         * @return string The render.
         */
        public function render_woocommerce_template_part($attributes)
        {
        }
        /**
         * This function is used on the `pre_get_block_template` hook to return the fallback template from the db in case
         * the template is eligible for it.
         *
         * @param \WP_Block_Template|null $template Block template object to short-circuit the default query,
         *                                          or null to allow WP to run its normal queries.
         * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
         * @param string                  $template_type wp_template or wp_template_part.
         *
         * @return object|null
         */
        public function get_block_template_fallback($template, $id, $template_type)
        {
        }
        /**
         * Adds the `archive-product` template to the `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-attribute`
         * templates to be able to fall back to it.
         *
         * @param array $template_hierarchy A list of template candidates, in descending order of priority.
         */
        public function add_archive_product_to_eligible_for_fallback_templates($template_hierarchy)
        {
        }
        /**
         * Checks the old and current themes and determines if the "wc_blocks_use_blockified_product_grid_block_as_template"
         * option need to be updated accordingly.
         *
         * @param string    $old_name Old theme name.
         * @param \WP_Theme $old_theme Instance of the old theme.
         * @return void
         */
        public function check_should_use_blockified_product_grid_templates($old_name, $old_theme)
        {
        }
        /**
         * This function checks if there's a block template file in `woo-gutenberg-products-block/templates/templates/`
         * to return to pre_get_posts short-circuiting the query in Gutenberg.
         *
         * @param \WP_Block_Template|null $template Return a block template object to short-circuit the default query,
         *                                               or null to allow WP to run its normal queries.
         * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
         * @param string                  $template_type wp_template or wp_template_part.
         *
         * @return mixed|\WP_Block_Template|\WP_Error
         */
        public function get_block_file_template($template, $id, $template_type)
        {
        }
        /**
         * Add the block template objects to be used.
         *
         * @param array  $query_result Array of template objects.
         * @param array  $query Optional. Arguments to retrieve templates.
         * @param string $template_type wp_template or wp_template_part.
         * @return array
         */
        public function add_block_templates($query_result, $query, $template_type)
        {
        }
        /**
         * Gets the templates saved in the database.
         *
         * @param array  $slugs An array of slugs to retrieve templates for.
         * @param string $template_type wp_template or wp_template_part.
         *
         * @return int[]|\WP_Post[] An array of found templates.
         */
        public function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
        {
        }
        /**
         * Gets the templates from the WooCommerce blocks directory, skipping those for which a template already exists
         * in the theme directory.
         *
         * @param string[] $slugs An array of slugs to filter templates by. Templates whose slug does not match will not be returned.
         * @param array    $already_found_templates Templates that have already been found, these are customised templates that are loaded from the database.
         * @param string   $template_type wp_template or wp_template_part.
         *
         * @return array Templates from the WooCommerce blocks plugin directory.
         */
        public function get_block_templates_from_woocommerce($slugs, $already_found_templates, $template_type = 'wp_template')
        {
        }
        /**
         * Get and build the block template objects from the block template files.
         *
         * @param array  $slugs An array of slugs to retrieve templates for.
         * @param string $template_type wp_template or wp_template_part.
         *
         * @return array WP_Block_Template[] An array of block template objects.
         */
        public function get_block_templates($slugs = array(), $template_type = 'wp_template')
        {
        }
        /**
         * Returns the path of a template on the Blocks template folder.
         *
         * @param string $template_slug Block template slug e.g. single-product.
         * @param string $template_type wp_template or wp_template_part.
         *
         * @return string
         */
        public function get_template_path_from_woocommerce($template_slug, $template_type = 'wp_template')
        {
        }
        /**
         * Checks whether a block template with that name exists in Woo Blocks
         *
         * @param string $template_name Template to check.
         * @param array  $template_type wp_template or wp_template_part.
         *
         * @return boolean
         */
        public function block_template_is_available($template_name, $template_type = 'wp_template')
        {
        }
        /**
         * Renders the default block template from Woo Blocks if no theme templates exist.
         */
        public function render_block_template()
        {
        }
        /**
         * Remove the template panel from the Sidebar of the Shop page because
         * the Site Editor handles it.
         *
         * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/6278
         *
         * @param bool $is_support Whether the active theme supports block templates.
         *
         * @return bool
         */
        public function remove_block_template_support_for_shop_page($is_support)
        {
        }
        /**
         * Update the product archive title to "Shop".
         *
         * @param string $post_type_name Post type 'name' label.
         * @param string $post_type      Post type.
         *
         * @return string
         */
        public function update_product_archive_title($post_type_name, $post_type)
        {
        }
        /**
         * Migrates page content to templates if needed.
         */
        public function maybe_migrate_content()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\BlockTypes {
    /**
     * AbstractBlock class.
     */
    abstract class AbstractBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block name within this namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Tracks if assets have been enqueued.
         *
         * @var boolean
         */
        protected $enqueued_assets = false;
        /**
         * Instance of the asset API.
         *
         * @var AssetApi
         */
        protected $asset_api;
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Instance of the integration registry.
         *
         * @var IntegrationRegistry
         */
        protected $integration_registry;
        /**
         * Constructor.
         *
         * @param AssetApi            $asset_api Instance of the asset API.
         * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
         * @param IntegrationRegistry $integration_registry Instance of the integration registry.
         * @param string              $block_name Optionally set block name during construct.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry, $block_name = '')
        {
        }
        /**
         * The default render_callback for all blocks. This will ensure assets are enqueued just in time, then render
         * the block (if applicable).
         *
         * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @param string         $content    Block content. Default empty string.
         * @param WP_Block|null  $block      Block instance.
         * @return string Rendered block type output.
         */
        public function render_callback($attributes = [], $content = '', $block = null)
        {
        }
        /**
         * Enqueue assets used for rendering the block in editor context.
         *
         * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
         */
        public function enqueue_editor_assets()
        {
        }
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Injects Chunk Translations into the page so translations work for lazy loaded components.
         *
         * The chunk names are defined when creating lazy loaded components using webpackChunkName.
         *
         * @param string[] $chunks Array of chunk names.
         */
        protected function register_chunk_translations($chunks)
        {
        }
        /**
         * Generate an array of chunks paths for loading translation.
         *
         * @param string $chunks_folder The folder to iterate over.
         * @return string[] $chunks list of chunks to load.
         */
        protected function get_chunks_paths($chunks_folder)
        {
        }
        /**
         * Registers the block type with WordPress.
         *
         * @return string[] Chunks paths.
         */
        protected function register_block_type()
        {
        }
        /**
         * Get the block type.
         *
         * @return string
         */
        protected function get_block_type()
        {
        }
        /**
         * Get the render callback for this block type.
         *
         * Dynamic blocks should return a callback, for example, `return [ $this, 'render' ];`
         *
         * @see $this->register_block_type()
         * @return callable|null;
         */
        protected function get_block_type_render_callback()
        {
        }
        /**
         * Get the editor script data for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the editor style handle for this block type.
         *
         * @see $this->register_block_type()
         * @return string|null
         */
        protected function get_block_type_editor_style()
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string|null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]|null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Get the supports array for this block type.
         *
         * @see $this->register_block_type()
         * @return string;
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Get block attributes.
         *
         * @return array;
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Get block usesContext.
         *
         * @return array;
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Parses block attributes from the render_callback.
         *
         * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
         * @return array
         */
        protected function parse_render_callback_attributes($attributes)
        {
        }
        /**
         * Render the block. Extended by children.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @internal This prevents the block script being enqueued on all pages. It is only enqueued as needed. Note that
         * we intentionally do not pass 'script' to register_block_type.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Get routes from a REST API namespace.
         *
         * @param string $namespace Namespace to retrieve.
         * @return array
         */
        protected function get_routes_from_namespace($namespace)
        {
        }
        /**
         * Register/enqueue scripts used for this block on the frontend, during render.
         *
         * @param array $attributes Any attributes that currently are available from the block.
         */
        protected function enqueue_scripts(array $attributes = [])
        {
        }
    }
    /**
     * AbstractDynamicBlock class.
     */
    abstract class AbstractDynamicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Get the schema for the alignment property.
         *
         * @return array Property definition for align.
         */
        protected function get_schema_align()
        {
        }
        /**
         * Get the schema for a list of IDs.
         *
         * @return array Property definition for a list of numeric ids.
         */
        protected function get_schema_list_ids()
        {
        }
        /**
         * Get the schema for a boolean value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_boolean($default = true)
        {
        }
        /**
         * Get the schema for a numeric value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_number($default)
        {
        }
        /**
         * Get the schema for a string value.
         *
         * @param  string $default  The default value.
         * @return array Property definition.
         */
        protected function get_schema_string($default = '')
        {
        }
    }
    /**
     * AbstractInnerBlock class.
     */
    abstract class AbstractInnerBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Is this inner block lazy loaded? this helps us know if we should load its frontend script ot not.
         *
         * @var boolean
         */
        protected $is_lazy_loaded = true;
        /**
         * Registers the block type with WordPress using the metadata file.
         *
         * The registration using metadata is now recommended. And it's required for "Inner Blocks" to
         * fix the issue of missing translations in the inspector (in the Editor mode)
         */
        protected function register_block_type()
        {
        }
        /**
         * For lazy loaded inner blocks, we don't want to enqueue the script but rather leave it for webpack to do that.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string|null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * AbstractProductGrid class.
     */
    abstract class AbstractProductGrid extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Attributes.
         *
         * @var array
         */
        protected $attributes = array();
        /**
         * InnerBlocks content.
         *
         * @var string
         */
        protected $content = '';
        /**
         * Query args.
         *
         * @var array
         */
        protected $query_args = array();
        /**
         * Meta query args.
         *
         * @var array
         */
        protected $meta_query = array();
        /**
         * Get a set of attributes shared across most of the grid blocks.
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Include and render the dynamic block.
         *
         * @param array         $attributes Block attributes. Default empty array.
         * @param string        $content    Block content. Default empty string.
         * @param WP_Block|null $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes = array(), $content = '', $block = null)
        {
        }
        /**
         * Get the schema for the contentVisibility attribute
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_schema_content_visibility()
        {
        }
        /**
         * Get the schema for the orderby attribute.
         *
         * @return array Property definition of `orderby` attribute.
         */
        protected function get_schema_orderby()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        protected function parse_attributes($attributes)
        {
        }
        /**
         * Parse query args.
         *
         * @return array
         */
        protected function parse_query_args()
        {
        }
        /**
         * Parse query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_ordering_query_args(&$query_args)
        {
        }
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected abstract function set_block_query_args(&$query_args);
        /**
         * Set categories query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_categories_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Set which stock status to use when displaying products.
         *
         * @param array $query_args Query args.
         * @return void
         */
        protected function set_stock_status_query_args(&$query_args)
        {
        }
        /**
         * Works out the item limit based on rows and columns, or returns default.
         *
         * @return int
         */
        protected function get_products_limit()
        {
        }
        /**
         * Run the query and return an array of product IDs
         *
         * @return array List of product IDs
         */
        protected function get_products()
        {
        }
        /**
         * Retrieve IDs that are not already present in the cache.
         *
         * Based on WordPress function: _get_non_cached_ids
         *
         * @param int[]  $product_ids Array of IDs.
         * @param string $cache_key  The cache bucket to check against.
         * @return int[] Array of IDs not present in the cache.
         */
        protected function get_non_cached_ids($product_ids, $cache_key)
        {
        }
        /**
         * Prime query cache of product variation meta data.
         *
         * Prepares values in the product_ID_variation_meta_data cache for later use in the ProductSchema::get_variations()
         * method. Doing so here reduces the total number of queries needed.
         *
         * @param int[] $product_ids Product ids to prime variation cache for.
         */
        protected function prime_product_variations($product_ids)
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @return string space-separated list of classes.
         */
        protected function get_container_classes()
        {
        }
        /**
         * Render a single products.
         *
         * @param \WC_Product $product Product object.
         * @return string Rendered product output.
         */
        protected function render_product($product)
        {
        }
        /**
         * Get the product image.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_image_html($product)
        {
        }
        /**
         * Get the product title.
         *
         * @param \WC_Product $product Product.
         * @return string
         */
        protected function get_title_html($product)
        {
        }
        /**
         * Render the rating icons.
         *
         * @param WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_rating_html($product)
        {
        }
        /**
         * Get the price.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_price_html($product)
        {
        }
        /**
         * Get the sale badge.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_sale_badge_html($product)
        {
        }
        /**
         * Get the button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_button_html($product)
        {
        }
        /**
         * Get the "add to cart" button.
         *
         * @param \WC_Product $product Product.
         * @return string Rendered product output.
         */
        protected function get_add_to_cart($product)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * ActiveFilters class.
     */
    class ActiveFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'active-filters';
    }
    /**
     * CatalogSorting class.
     */
    class AddToCartForm extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'add-to-cart-form';
        /**
         * Initializes the AddToCartForm block and hooks into the `wc_add_to_cart_message_html` filter
         * to prevent displaying the Cart Notice when the block is inside the Single Product block
         * and the Add to Cart button is clicked.
         *
         * It also hooks into the `woocommerce_add_to_cart_redirect` filter to prevent redirecting
         * to another page when the block is inside the Single Product block and the Add to Cart button
         * is clicked.
         *
         * @return void
         */
        protected function initialize()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        private function parse_attributes($attributes)
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Add a hidden input to the Add to Cart form to indicate that it is a descendent of a Single Product block.
         *
         * @param string $product The Add to Cart Form HTML.
         * @param string $is_descendent_of_single_product_block Indicates if block is descendent of Single Product block.
         *
         * @return string The Add to Cart Form HTML with the hidden input.
         */
        protected function add_is_descendent_of_single_product_block_hidden_input_to_product_form($product, $is_descendent_of_single_product_block)
        {
        }
        /**
         * Filter the add to cart message to prevent the Notice from being displayed when the Add to Cart form is a descendent of a Single Product block
         * and the Add to Cart button is clicked.
         *
         * @param string $message Message to be displayed when product is added to the cart.
         */
        public function add_to_cart_message_html_filter($message)
        {
        }
        /**
         * Hooks into the `woocommerce_add_to_cart_redirect` filter to prevent redirecting
         * to another page when the block is inside the Single Product block and the Add to Cart button
         * is clicked.
         *
         * @param string $url The URL to redirect to after the product is added to the cart.
         * @return string The filtered redirect URL.
         */
        public function add_to_cart_redirect_filter($url)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
    }
    /**
     * AllProducts class.
     */
    class AllProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-products';
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * It is necessary to register and enqueue assets during the render phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
    }
    /**
     * AllReviews class.
     */
    class AllReviews extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-reviews';
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * AtomicBlock class.
     *
     * @internal
     */
    class AtomicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Get the editor script data for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return null
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the editor style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_editor_style()
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * AttributeFilter class.
     */
    class AttributeFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'attribute-filter';
        const FILTER_QUERY_VAR_PREFIX = 'filter_';
        const QUERY_TYPE_QUERY_VAR_PREFIX = 'query_type_';
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * CatalogSorting class.
     */
    class Breadcrumbs extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'breadcrumbs';
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
    }
    /**
     * Cart class.
     *
     * @internal
     */
    class Cart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart';
        /**
         * Chunks build folder.
         *
         * @var string
         */
        protected $chunks_folder = 'cart-blocks';
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Dequeues the scripts added by WC Core to the Cart page.
         *
         * @return void
         */
        public function dequeue_woocommerce_core_scripts()
        {
        }
        /**
         * Register block pattern for Empty Cart Message to make it translatable.
         */
        public function register_patterns()
        {
        }
        /**
         * Get the editor script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return array|string;
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Append frontend scripts when rendering the Cart block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get list of Cart block & its inner-block types.
         *
         * @return array;
         */
        public static function get_cart_block_types()
        {
        }
    }
    /**
     * CartAcceptedPaymentMethodsBlock class.
     */
    class CartAcceptedPaymentMethodsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-accepted-payment-methods-block';
    }
    /**
     * CartCrossSellsBlock class.
     */
    class CartCrossSellsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-cross-sells-block';
    }
    /**
     * CartCrossSellsProductsBlock class.
     */
    class CartCrossSellsProductsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-cross-sells-products-block';
    }
    /**
     * CartExpressPaymentBlock class.
     */
    class CartExpressPaymentBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-express-payment-block';
    }
    /**
     * CartItemsBlock class.
     */
    class CartItemsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-items-block';
    }
    /**
     * CartLineItemsBlock class.
     */
    class CartLineItemsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-line-items-block';
    }
    /**
     * CartOrderSummaryBlock class.
     */
    class CartOrderSummaryBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-block';
    }
    /**
     * CartOrderSummaryCouponFormBlock class.
     */
    class CartOrderSummaryCouponFormBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-coupon-form-block';
    }
    /**
     * CartOrderSummaryDiscountBlock class.
     */
    class CartOrderSummaryDiscountBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-discount-block';
    }
    /**
     * CartOrderSummaryFeeBlock class.
     */
    class CartOrderSummaryFeeBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-fee-block';
    }
    /**
     * CartOrderSummaryHeadingBlock class.
     */
    class CartOrderSummaryHeadingBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-heading-block';
    }
    /**
     * CartOrderSummaryShippingBlock class.
     */
    class CartOrderSummaryShippingBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-shipping-block';
    }
    /**
     * CartOrderSummarySubtotalBlock class.
     */
    class CartOrderSummarySubtotalBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-subtotal-block';
    }
    /**
     * CartOrderSummaryTaxesBlock class.
     */
    class CartOrderSummaryTaxesBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-order-summary-taxes-block';
    }
    /**
     * CartTotalsBlock class.
     */
    class CartTotalsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'cart-totals-block';
    }
    /**
     * CatalogSorting class.
     */
    class CatalogSorting extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'catalog-sorting';
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
    }
    /**
     * Checkout class.
     *
     * @internal
     */
    class Checkout extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout';
        /**
         * Chunks build folder.
         *
         * @var string
         */
        protected $chunks_folder = 'checkout-blocks';
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Dequeues the scripts added by WC Core to the Checkout page.
         *
         * @return void
         */
        public function dequeue_woocommerce_core_scripts()
        {
        }
        /**
         * Register block pattern for Empty Cart Message to make it translatable.
         */
        public function register_patterns()
        {
        }
        /**
         * Get the editor script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return array|string;
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Append frontend scripts when rendering the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Check if we're viewing a checkout page endpoint, rather than the main checkout page itself.
         *
         * @return boolean
         */
        protected function is_checkout_endpoint()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Get payment methods that are enabled in settings.
         *
         * @return array
         */
        protected function get_enabled_payment_gateways()
        {
        }
        /**
         * Are we currently on the admin block editor screen?
         */
        protected function is_block_editor()
        {
        }
        /**
         * Get saved customer payment methods for use in checkout.
         */
        protected function hydrate_customer_payment_methods()
        {
        }
        /**
         * Callback for woocommerce_payment_methods_list_item filter to add token id
         * to the generated list.
         *
         * @param array     $list_item The current list item for the saved payment method.
         * @param \WC_Token $token     The token for the current list item.
         *
         * @return array The list item with the token id added.
         */
        public static function include_token_id_with_payment_methods($list_item, $token)
        {
        }
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get list of Checkout block & its inner-block types.
         *
         * @return array;
         */
        public static function get_checkout_block_types()
        {
        }
    }
    /**
     * CheckoutActionsBlock class.
     */
    class CheckoutActionsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-actions-block';
    }
    /**
     * CheckoutBillingAddressBlock class.
     */
    class CheckoutBillingAddressBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-billing-address-block';
    }
    /**
     * CheckoutContactInformationBlock class.
     */
    class CheckoutContactInformationBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-contact-information-block';
    }
    /**
     * CheckoutExpressPaymentBlock class.
     */
    class CheckoutExpressPaymentBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-express-payment-block';
    }
    /**
     * CheckoutFieldsBlock class.
     */
    class CheckoutFieldsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-fields-block';
    }
    /**
     * CheckoutOrderNoteBlock class.
     */
    class CheckoutOrderNoteBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-note-block';
    }
    /**
     * CheckoutOrderSummaryBlock class.
     */
    class CheckoutOrderSummaryBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-block';
    }
    /**
     * CheckoutOrderSummaryCartItemsBlock class.
     */
    class CheckoutOrderSummaryCartItemsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-cart-items-block';
    }
    /**
     * CheckoutOrderSummaryCouponFormBlock class.
     */
    class CheckoutOrderSummaryCouponFormBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-coupon-form-block';
    }
    /**
     * CheckoutOrderSummaryDiscountBlock class.
     */
    class CheckoutOrderSummaryDiscountBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-discount-block';
    }
    /**
     * CheckoutOrderSummaryFeeBlock class.
     */
    class CheckoutOrderSummaryFeeBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-fee-block';
    }
    /**
     * CheckoutOrderSummaryShippingBlock class.
     */
    class CheckoutOrderSummaryShippingBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-shipping-block';
    }
    /**
     * CheckoutOrderSummarySubtotalBlock class.
     */
    class CheckoutOrderSummarySubtotalBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-subtotal-block';
    }
    /**
     * CheckoutOrderSummaryTaxesBlock class.
     */
    class CheckoutOrderSummaryTaxesBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-order-summary-taxes-block';
    }
    /**
     * CheckoutPaymentBlock class.
     */
    class CheckoutPaymentBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-payment-block';
    }
    /**
     * CheckoutPickupOptionsBlock class.
     */
    class CheckoutPickupOptionsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-pickup-options-block';
    }
    /**
     * CheckoutShippingAddressBlock class.
     */
    class CheckoutShippingAddressBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-shipping-address-block';
    }
    /**
     * CheckoutShippingMethodBlock class.
     */
    class CheckoutShippingMethodBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-shipping-method-block';
    }
    /**
     * CheckoutShippingMethodsBlock class.
     */
    class CheckoutShippingMethodsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-shipping-methods-block';
    }
    /**
     * CheckoutTermsBlock class.
     */
    class CheckoutTermsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-terms-block';
    }
    /**
     * CheckoutTotalsBlock class.
     */
    class CheckoutTotalsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'checkout-totals-block';
    }
    /**
     * Classic Shortcode class
     *
     * @internal
     */
    class ClassicShortcode extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'classic-shortcode';
        /**
         * API version.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Render method for the Classic Template block. This method will determine which template to render.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string | void Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string space-separated list of classes.
         */
        protected function get_container_classes($attributes = array())
        {
        }
        /**
         * Render method for rendering the cart shortcode.
         *
         * @param array $attributes Block attributes.
         * @return string Rendered block type output.
         */
        protected function render_cart($attributes)
        {
        }
        /**
         * Render method for rendering the checkout shortcode.
         *
         * @param array $attributes Block attributes.
         * @return string Rendered block type output.
         */
        protected function render_checkout($attributes)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * Classic Template class
     *
     * @internal
     */
    class ClassicTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'legacy-template';
        /**
         * API version.
         *
         * @var string
         */
        protected $api_version = '2';
        const FILTER_PRODUCTS_BY_STOCK_QUERY_PARAM = 'filter_stock_status';
        /**
         * Initialize this block.
         */
        protected function initialize()
        {
        }
        /**
         * Enqueue assets used for rendering the block in editor context.
         *
         * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
         */
        public function enqueue_block_assets()
        {
        }
        /**
         * Render method for the Classic Template block. This method will determine which template to render.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string | void Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Render method for rendering the order confirmation template.
         *
         * @return string Rendered block type output.
         */
        protected function render_order_received()
        {
        }
        /**
         * Render method for the single product template and parts.
         *
         * @return string Rendered block type output.
         */
        protected function render_single_product()
        {
        }
        /**
         * Render method for the archive product template and parts.
         *
         * @return string Rendered block type output.
         */
        protected function render_archive_product()
        {
        }
        /**
         * Get HTML markup with the right classes by attributes.
         * This function appends the classname at the first element that have the class attribute.
         * Based on the experience, all the wrapper elements have a class attribute.
         *
         * @param string $content Block content.
         * @param array  $block Parsed block data.
         * @return string Rendered block type output.
         */
        public function add_alignment_class_to_wrapper(string $content, array $block)
        {
        }
        /**
         * Filter products by stock status when as query param there is "filter_stock_status"
         *
         * @param array $meta_query Meta query.
         * @return array
         */
        public function filter_products_by_stock($meta_query)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * CollectionFilters class.
     */
    final class CollectionFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'collection-filters';
        /**
         * Mapping inner blocks to CollectionData API parameters.
         *
         * @var array
         */
        protected $collection_data_params_mapping = array('calculate_price_range' => 'woocommerce/collection-price-filter', 'calculate_stock_status_counts' => 'woocommerce/collection-stock-filter', 'calculate_attribute_counts' => 'woocommerce/collection-attribute-filter', 'calculate_rating_counts' => 'woocommerce/collection-rating-filter');
        /**
         * Cache the current response from the API.
         *
         * @var array
         */
        private $current_response = null;
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         *
         * @return null This block has no frontend script.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Modify the context of inner blocks.
         *
         * @param array    $context The block context.
         * @param array    $parsed_block The parsed block.
         * @param WP_Block $parent_block The parent block.
         * @return array
         */
        public function modify_inner_blocks_context($context, $parsed_block, $parent_block)
        {
        }
        /**
         * Get the aggregated collection data from the API.
         * Loop through inner blocks and build a query string to pass to the API.
         *
         * @param WP_Block $block The block instance.
         * @return array
         */
        private function get_aggregated_collection_data($block)
        {
        }
        /**
         * Get all inner blocks recursively.
         *
         * @param WP_Block_List $inner_blocks The block to get inner blocks from.
         * @param array         $results      The results array.
         *
         * @return array
         */
        private function get_inner_blocks_recursive($inner_blocks, &$results = array())
        {
        }
        /**
         * Get formatted products params for ProductCollectionData route from the
         * query context.
         *
         * @param array $query The query context.
         * @return array
         */
        private function get_formatted_products_params($query)
        {
        }
    }
    /**
     * CollectionPriceFilter class.
     */
    final class CollectionPriceFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'collection-price-filter';
        const MIN_PRICE_QUERY_VAR = 'min_price';
        const MAX_PRICE_QUERY_VAR = 'max_price';
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the price slider HTML.
         *
         * @param array $store_data The data passing to Interactivity Store.
         * @param array $attributes Block attributes.
         */
        private function get_price_slider($store_data, $attributes)
        {
        }
    }
    /**
     * CustomerAccount class.
     */
    class CustomerAccount extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        const TEXT_ONLY = 'text_only';
        const ICON_ONLY = 'icon_only';
        const DISPLAY_ALT = 'alt';
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'customer-account';
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Gets the icon to render depending on the iconStyle and displayStyle.
         *
         * @param array $attributes Block attributes.
         *
         * @return string Label to render on the block
         */
        private function render_icon($attributes)
        {
        }
        /**
         * Gets the label to render depending on the displayStyle.
         *
         * @param array $attributes Block attributes.
         *
         * @return string Label to render on the block.
         */
        private function render_label($attributes)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         *
         * @return null This block has no frontend script.
         */
        protected function get_block_type_script($key = null)
        {
        }
    }
    /**
     * EmptyCartBlock class.
     */
    class EmptyCartBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'empty-cart-block';
    }
    /**
     * EmptyMiniCartContentsBlock class.
     */
    class EmptyMiniCartContentsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'empty-mini-cart-contents-block';
    }
    /**
     * FeaturedItem class.
     */
    abstract class FeaturedItem extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name;
        /**
         * Default attribute values.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none');
        /**
         * Global style enabled for this block.
         *
         * @var array
         */
        protected $global_style_wrapper = array('background_color', 'border_color', 'border_radius', 'border_width', 'font_size', 'padding', 'text_color');
        /**
         * Returns the featured item.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return \WP_Term|\WC_Product|null
         */
        protected abstract function get_item($attributes);
        /**
         * Returns the name of the featured item.
         *
         * @param \WP_Term|\WC_Product $item Item object.
         * @return string
         */
        protected abstract function get_item_title($item);
        /**
         * Returns the featured item image URL.
         *
         * @param \WP_Term|\WC_Product $item Item object.
         * @param string               $size Image size, defaults to 'full'.
         * @return string
         */
        protected abstract function get_item_image($item, $size = 'full');
        /**
         * Renders the featured item attributes.
         *
         * @param \WP_Term|\WC_Product $item       Item object.
         * @param array                $attributes Block attributes. Default empty array.
         * @return string
         */
        protected abstract function render_attributes($item, $attributes);
        /**
         * Render the featured item block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Returns the url the item's image
         *
         * @param array                $attributes Block attributes. Default empty array.
         * @param \WP_Term|\WC_Product $item       Item object.
         *
         * @return string
         */
        private function get_image_url($attributes, $item)
        {
        }
        /**
         * Renders the featured image as a div background.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $image_url  Item image url.
         *
         * @return string
         */
        private function render_bg_image($attributes, $image_url)
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $image_url  Item image url.
         *
         * @return string
         */
        public function get_bg_styles($attributes, $image_url)
        {
        }
        /**
         * Renders the featured image
         *
         * @param array                $attributes Block attributes. Default empty array.
         * @param \WC_Product|\WP_Term $item       Item object.
         * @param string               $image_url  Item image url.
         *
         * @return string
         */
        private function render_image($attributes, $item, string $image_url)
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_styles($attributes)
        {
        }
        /**
         * Get class names for the block container.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string
         */
        public function get_classes($attributes)
        {
        }
        /**
         * Renders the block overlay
         *
         * @param array $attributes Block attributes. Default empty array.
         *
         * @return string
         */
        private function render_overlay($attributes)
        {
        }
        /**
         * Returns whether the focal point is defined for the block.
         *
         * @param array $attributes Block attributes. Default empty array.
         *
         * @return bool
         */
        private function hasFocalPoint($attributes) : bool
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * FeaturedCategory class.
     */
    class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\FeaturedItem
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-category';
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Returns the featured category.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return \WP_Term|null
         */
        protected function get_item($attributes)
        {
        }
        /**
         * Returns the name of the featured category.
         *
         * @param \WP_Term $category Featured category.
         * @return string
         */
        protected function get_item_title($category)
        {
        }
        /**
         * Returns the featured category image URL.
         *
         * @param \WP_Term $category Term object.
         * @param string   $size Image size, defaults to 'full'.
         * @return string
         */
        protected function get_item_image($category, $size = 'full')
        {
        }
        /**
         * Renders the featured category attributes.
         *
         * @param \WP_Term $category Term object.
         * @param array    $attributes Block attributes. Default empty array.
         * @return string
         */
        protected function render_attributes($category, $attributes)
        {
        }
    }
    /**
     * FeaturedProduct class.
     */
    class FeaturedProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\FeaturedItem
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-product';
        /**
         * Returns the featured product.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return \WP_Term|null
         */
        protected function get_item($attributes)
        {
        }
        /**
         * Returns the name of the featured product.
         *
         * @param \WC_Product $product Product object.
         * @return string
         */
        protected function get_item_title($product)
        {
        }
        /**
         * Returns the featured product image URL.
         *
         * @param \WC_Product $product Product object.
         * @param string      $size    Image size, defaults to 'full'.
         * @return string
         */
        protected function get_item_image($product, $size = 'full')
        {
        }
        /**
         * Renders the featured product attributes.
         *
         * @param \WC_Product $product Product object.
         * @param array       $attributes Block attributes. Default empty array.
         * @return string
         */
        protected function render_attributes($product, $attributes)
        {
        }
    }
    /**
     * FilledCartBlock class.
     */
    class FilledCartBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'filled-cart-block';
    }
    /**
     * FilledMiniCartContentsBlock class.
     */
    class FilledMiniCartContentsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'filled-mini-cart-contents-block';
    }
    /**
     * FilledCartBlock class.
     */
    class FilterWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'filter-wrapper';
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * HandpickedProducts class.
     */
    class HandpickedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'handpicked-products';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Set visibility query args. Handpicked products will show hidden products if chosen.
         *
         * @param array $query_args Query args.
         */
        protected function set_visibility_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
    }
    /**
     * Mini-Cart class.
     *
     * @internal
     */
    class MiniCart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart';
        /**
         * Chunks build folder.
         *
         * @var string
         */
        protected $chunks_folder = 'mini-cart-contents-block';
        /**
         * Array of scripts that will be lazy loaded when interacting with the block.
         *
         * @var string[]
         */
        protected $scripts_to_lazy_load = array();
        /**
         *  Inc Tax label.
         *
         * @var string
         */
        protected $tax_label = '';
        /**
         *  Visibility of price including tax.
         *
         * @var string
         */
        protected $display_cart_prices_including_tax = false;
        /**
         * Constructor.
         *
         * @param AssetApi            $asset_api Instance of the asset API.
         * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
         * @param IntegrationRegistry $integration_registry Instance of the integration registry.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry)
        {
        }
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Get the editor script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return array|string;
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Prints the variable containing information about the scripts to lazy load.
         */
        public function print_lazy_load_scripts()
        {
        }
        /**
         * Returns the script data given its handle.
         *
         * @param string $handle Handle of the script.
         *
         * @return \_WP_Dependency|null Object containing the script data if found, or null.
         */
        protected function get_script_from_handle($handle)
        {
        }
        /**
         * Recursively appends a scripts and its dependencies into the scripts_to_lazy_load array.
         *
         * @param \_WP_Dependency $script Object containing script data.
         */
        protected function append_script_and_deps_src($script)
        {
        }
        /**
         * Returns the markup for the cart price.
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         */
        protected function get_cart_price_markup($attributes)
        {
        }
        /**
         * Returns the markup for render the tax label.
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         */
        protected function get_include_tax_label_markup($attributes)
        {
        }
        /**
         * Append frontend scripts when rendering the Mini-Cart block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Render the markup for the Mini-Cart block.
         *
         * @param array $attributes Block attributes.
         *
         * @return string The HTML markup.
         */
        protected function get_markup($attributes)
        {
        }
        /**
         * Return the main instance of WC_Cart class.
         *
         * @return \WC_Cart CartController class instance.
         */
        protected function get_cart_instance()
        {
        }
        /**
         * Get array with data for handle the tax label.
         * the entire logic of this function is was taken from:
         * https://github.com/woocommerce/woocommerce/blob/e730f7463c25b50258e97bf56e31e9d7d3bc7ae7/includes/class-wc-cart.php#L1582
         *
         * @return array;
         */
        protected function get_tax_label()
        {
        }
        /**
         * Prepare translations for inner blocks and dependencies.
         */
        protected function get_inner_blocks_translations()
        {
        }
        /**
         * Register block pattern for Empty Cart Message to make it translatable.
         */
        public function register_empty_cart_message_block_pattern()
        {
        }
        /**
         * Returns whether the Mini-Cart should be rendered or not.
         *
         * @param array $attributes Block attributes.
         *
         * @return bool
         */
        public function should_not_render_mini_cart(array $attributes)
        {
        }
    }
    /**
     * MiniCartCartButtonBlock class.
     */
    class MiniCartCartButtonBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-cart-button-block';
    }
    /**
     * MiniCartCheckoutButtonBlock class.
     */
    class MiniCartCheckoutButtonBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-checkout-button-block';
    }
    /**
     * Mini-Cart Contents class.
     *
     * @internal
     */
    class MiniCartContents extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-contents';
        /**
         * Get the editor script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         *
         * @return array|string;
         */
        protected function get_block_type_editor_script($key = null)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         *
         * @return null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Render the markup for the Mini-Cart Contents block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Get list of Mini-Cart Contents block & its inner-block types.
         *
         * @return array;
         */
        public static function get_mini_cart_block_types()
        {
        }
    }
    /**
     * MiniCartFooterBlock class.
     */
    class MiniCartFooterBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-footer-block';
    }
    /**
     * MiniCartItemsBlock class.
     */
    class MiniCartItemsBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-items-block';
    }
    /**
     * MiniCartProductsTableBlock class.
     */
    class MiniCartProductsTableBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-products-table-block';
    }
    /**
     * MiniCartShoppingButtonBlock class.
     */
    class MiniCartShoppingButtonBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-shopping-button-block';
    }
    /**
     * MiniCartTitleBlock class.
     */
    class MiniCartTitleBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-title-block';
    }
    /**
     * MiniCartTitleItemsCounterBlock class.
     */
    class MiniCartTitleItemsCounterBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-title-items-counter-block';
    }
    /**
     * MiniCartTitleLabelBlock class.
     */
    class MiniCartTitleLabelBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'mini-cart-title-label-block';
    }
}
namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation {
    /**
     * AbstractOrderConfirmationBlock class.
     */
    abstract class AbstractOrderConfirmationBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         */
        protected function initialize()
        {
        }
        /**
         * Get the content from a hook and return it.
         *
         * @param string $hook Hook name.
         * @param array  $args Array of args to pass to the hook.
         * @return string
         */
        protected function get_hook_content($hook, $args)
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * This renders the content of the block within the wrapper. The permission determines what data can be shown under
         * the given context.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected abstract function render_content($order, $permission = false, $attributes = [], $content = '');
        /**
         * This is what gets rendered when the order does not exist. Renders nothing by default, but can be overridden by
         * child classes.
         *
         * @return string
         */
        protected function render_content_fallback()
        {
        }
        /**
         * Get current order.
         *
         * @return \WC_Order|null
         */
        protected function get_order()
        {
        }
        /**
         * View mode for order details based on the order, current user, and settings.
         *
         * Possible values are:
         * - "full" user can view all order details.
         * - "limited" user can view some order details, but no PII. This may happen for example, if the user checked out as a guest.
         * - false user cannot view order details.
         *
         * @param \WC_Order|null $order Order object.
         * @return "full"|"limited"|false
         */
        protected function get_view_order_permissions($order)
        {
        }
        /**
         * See if guest checkout is enabled.
         *
         * @return boolean
         */
        protected function allow_guest_checkout()
        {
        }
        /**
         * Guest users without an active session can provide their email address to view order details. This however can only
         * be permitted if the user also provided the correct order key, and guest checkout is actually enabled.
         *
         * @param \WC_Order $order Order object.
         * @return boolean
         */
        protected function email_verification_permitted($order)
        {
        }
        /**
         * See if we need to verify the email address before showing the order details.
         *
         * @param \WC_Order $order Order object.
         * @return boolean
         */
        protected function email_verification_required($order)
        {
        }
        /**
         * See if the order key is valid.
         *
         * @param \WC_Order $order Order object.
         * @return boolean
         */
        protected function has_valid_order_key($order)
        {
        }
        /**
         * See if the current order came from a guest or a logged in customer.
         *
         * @param \WC_Order $order Order object.
         * @return boolean
         */
        protected function is_customer_order($order)
        {
        }
        /**
         * See if the current logged in user ID matches the given order customer ID.
         *
         * Returns false for logged-out customers.
         *
         * @param \WC_Order $order Order object.
         * @return boolean
         */
        protected function is_current_customer_order($order)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Register block pattern for Order Confirmation to make it translatable.
         */
        public function register_patterns()
        {
        }
    }
    /**
     * AdditionalInformation class.
     */
    class AdditionalInformation extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-additional-information';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Remove core hooks from the thankyou page.
         */
        protected function remove_core_hooks()
        {
        }
        /**
         * Restore core hooks from the thankyou page.
         */
        protected function restore_core_hooks()
        {
        }
    }
    /**
     * BillingAddress class.
     */
    class BillingAddress extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-billing-address';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
    }
    /**
     * BillingWrapper class.
     */
    class BillingWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-billing-wrapper';
        /**
         * This renders the content of the billing wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * Downloads class.
     */
    class Downloads extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-downloads';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         * @return string
         */
        protected function get_inline_styles(array $attributes)
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array     $attributes  Any attributes that currently are available from the block.
         * @param string    $content    The block content.
         * @param \WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Render column headers for downloads table.
         *
         * @return string
         */
        protected function render_order_downloads_column_headers()
        {
        }
        /**
         * Render downloads.
         *
         * @param \WC_Order $order Order object.
         * @param array     $downloads Array of downloads.
         * @return string
         */
        protected function render_order_downloads($order, $downloads)
        {
        }
        /**
         * Render a download row in the table.
         *
         * @param array $download Download data.
         * @return string
         */
        protected function render_order_download_row($download)
        {
        }
    }
    /**
     * DownloadsWrapper class.
     */
    class DownloadsWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-downloads-wrapper';
        /**
         * See if the store has a downloadable product. This controls if we bother to show a preview in the editor.
         *
         * @return boolean
         */
        protected function store_has_downloadable_products()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * This renders the content of the downloads wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * ShippingAddress class.
     */
    class ShippingAddress extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-shipping-address';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
    }
    /**
     * ShippingWrapper class.
     */
    class ShippingWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-shipping-wrapper';
        /**
         * This renders the content of the shipping wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * Status class.
     */
    class Status extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-status';
        /**
         * This block uses a custom render method so that the email verification form can be appended to the block. This does
         * not inherit styles from the parent block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * This is what gets rendered when the order does not exist.
         *
         * @return string
         */
        protected function render_content_fallback()
        {
        }
        /**
         * If the order is invalid or there is no permission to view the details, tell the user to check email or log-in.
         *
         * @param \WC_Order|null $order Order object.
         * @return string
         */
        protected function render_confirmation_notice($order = null)
        {
        }
        /**
         * Email verification for guest users.
         *
         * @return string
         */
        protected function render_verification_form()
        {
        }
    }
    /**
     * Summary class.
     */
    class Summary extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-summary';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Render row in the order summary.
         *
         * @param string $name name of row.
         * @param string $value value of row.
         * @return string
         */
        protected function render_summary_row($name, $value)
        {
        }
    }
    /**
     * Totals class.
     */
    class Totals extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-totals';
        /**
         * This renders the content of the block within the wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         * @return string
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         * @return string
         */
        protected function get_inline_styles(array $attributes)
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array     $attributes  Any attributes that currently are available from the block.
         * @param string    $content    The block content.
         * @param \WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Render order details table items.
         *
         * Loosely based on the templates order-details.php and order-details-item.php from core.
         *
         * @param \WC_Order $order Order object.
         * @return string
         */
        protected function render_order_details_table_items($order)
        {
        }
        /**
         * Render an item in the order details table.
         *
         * @param \WC_Order         $order Order object.
         * @param integer           $item_id Item ID.
         * @param \WC_Order_Item    $item Item object.
         * @param \WC_Product|false $product Product object if it exists.
         * @return string
         */
        protected function render_order_details_table_item($order, $item_id, $item, $product)
        {
        }
        /**
         * Render an item purchase note.
         *
         * @param \WC_Order         $order Order object.
         * @param \WC_Product|false $product Product object if it exists.
         * @return string
         */
        protected function render_order_details_table_item_purchase_note($order, $product)
        {
        }
        /**
         * Render order details table totals.
         *
         * @param \WC_Order $order Order object.
         * @return string
         */
        protected function render_order_details_table_totals($order)
        {
        }
        /**
         * Render customer note.
         *
         * @param \WC_Order $order Order object.
         * @return string
         */
        protected function render_order_details_table_customer_note($order)
        {
        }
    }
    /**
     * TotalsWrapper class.
     */
    class TotalsWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'order-confirmation-totals-wrapper';
        /**
         * This renders the content of the totals wrapper.
         *
         * @param \WC_Order $order Order object.
         * @param string    $permission Permission level for viewing order details.
         * @param array     $attributes Block attributes.
         * @param string    $content Original block content.
         */
        protected function render_content($order, $permission = false, $attributes = [], $content = '')
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\BlockTypes {
    /**
     * Used in templates to wrap page content. Allows content to be populated at template level.
     *
     * @internal
     */
    class PageContentWrapper extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'page-content-wrapper';
        /**
         * It isn't necessary to register block assets.
         *
         * @param string $key Data to get, or default to everything.
         * @return array|string|null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * PriceFilter class.
     */
    class PriceFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'price-filter';
        const MIN_PRICE_QUERY_VAR = 'min_price';
        const MAX_PRICE_QUERY_VAR = 'max_price';
    }
    /**
     * ProceedToCheckoutBlock class.
     */
    class ProceedToCheckoutBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractInnerBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'proceed-to-checkout-block';
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * ProductAddToCart class.
     */
    class ProductAddToCart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-add-to-cart';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
    }
    /**
     * ProductAverageRating class.
     */
    class ProductAverageRating extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-average-rating';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductBestSellers class.
     */
    class ProductBestSellers extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-best-sellers';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductButton class.
     */
    class ProductButton extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-button';
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Dequeue the add-to-cart script.
         * The block uses Interactivity API, it isn't necessary enqueue the add-to-cart script.
         */
        public function dequeue_add_to_cart_scripts()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the number of items in the cart for a given product id.
         *
         * @param number $product_id The product id.
         * @return number The number of items in the cart.
         */
        private function get_cart_item_quantities_by_product_id($product_id)
        {
        }
        /**
         * Prevent caching on certain pages
         */
        private function prevent_cache()
        {
        }
        /**
         * Get the view cart link html.
         *
         * @return string The view cart html.
         */
        private function get_view_cart_html()
        {
        }
    }
    /**
     * ProductCategories class.
     */
    class ProductCategories extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-categories';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('hasCount' => true, 'hasImage' => false, 'hasEmpty' => false, 'isDropdown' => false, 'isHierarchical' => true, 'showChildrenOnly' => false);
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Render the Product Categories List block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the list of classes to apply to this block.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return string space-separated list of classes.
         */
        protected function get_container_classes($attributes = array())
        {
        }
        /**
         * Get categories (terms) from the db.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array
         */
        protected function get_categories($attributes)
        {
        }
        /**
         * Build hierarchical tree of categories.
         *
         * @param array $categories List of terms.
         * @param bool  $children_only Is the block rendering only the children of the current category.
         * @return array
         */
        protected function build_category_tree($categories, $children_only)
        {
        }
        /**
         * Build hierarchical tree of categories by appending children in the tree.
         *
         * @param array $categories List of terms.
         * @param array $categories_by_parent List of terms grouped by parent.
         * @return array
         */
        protected function fill_category_children($categories, $categories_by_parent)
        {
        }
        /**
         * Render the category list as a dropdown.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @return string Rendered output.
         */
        protected function renderDropdown($categories, $attributes, $uid)
        {
        }
        /**
         * Render dropdown options list.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderDropdownOptions($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Render the category list as a list.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderList($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Render a list of terms.
         *
         * @param array $categories List of terms.
         * @param array $attributes Block attributes. Default empty array.
         * @param int   $uid Unique ID for the rendered block, used for HTML IDs.
         * @param int   $depth Current depth.
         * @return string Rendered output.
         */
        protected function renderListItems($categories, $attributes, $uid, $depth = 0)
        {
        }
        /**
         * Returns the category image html
         *
         * @param \WP_Term $category Term object.
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $size Image size, defaults to 'woocommerce_thumbnail'.
         * @return string
         */
        public function get_image_html($category, $attributes, $size = 'woocommerce_thumbnail')
        {
        }
        /**
         * Get the count, if displaying.
         *
         * @param object $category Term object.
         * @param array  $attributes Block attributes. Default empty array.
         * @return string
         */
        protected function getCount($category, $attributes)
        {
        }
    }
    /**
     * ProductCategory class.
     */
    class ProductCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-category';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
    }
    /**
     * ProductCollection class.
     */
    class ProductCollection extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-collection';
        /**
         * The Block with its attributes before it gets rendered
         *
         * @var array
         */
        protected $parsed_block;
        /**
         * All query args from WP_Query.
         *
         * @var array
         */
        protected $valid_query_vars;
        /**
         * All the query args related to the filter by attributes block.
         *
         * @var array
         */
        protected $attributes_filter_query_args = array();
        /**
         * Orderby options not natively supported by WordPress REST API
         *
         * @var array
         */
        protected $custom_order_opts = array('popularity', 'rating');
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         * - Hook into pre_render_block to update the query.
         */
        protected function initialize()
        {
        }
        /**
         * Mark the Product Collection as an interactive region so it can be updated
         * during client-side navigation.
         *
         * @param string    $block_content The block content.
         * @param array     $block         The full block, including name and attributes.
         * @param \WP_Block $instance      The block instance.
         */
        public function add_navigation_id_directive($block_content, $block, $instance)
        {
        }
        /**
         * Add interactive links to all anchors inside the Query Pagination block.
         *
         * @param string    $block_content The block content.
         * @param array     $block         The full block, including name and attributes.
         * @param \WP_Block $instance      The block instance.
         */
        public function add_navigation_link_directives($block_content, $block, $instance)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Update the query for the product query block in Editor.
         *
         * @param array           $args    Query args.
         * @param WP_REST_Request $request Request.
         */
        public function update_rest_query_in_editor($args, $request) : array
        {
        }
        /**
         * Add support for filter blocks:
         * - Price filter block
         * - Attributes filter block
         * - Rating filter block
         * - In stock filter block etc.
         *
         * @param array $pre_render   The pre-rendered block.
         * @param array $parsed_block The parsed block.
         */
        public function add_support_for_filter_blocks($pre_render, $parsed_block)
        {
        }
        /**
         * Return a custom query based on attributes, filters and global WP_Query.
         *
         * @param WP_Query $query The WordPress Query.
         * @param WP_Block $block The block being rendered.
         * @param int      $page  The page number.
         *
         * @return array
         */
        public function build_frontend_query($query, $block, $page)
        {
        }
        /**
         * Get the final query arguments for the frontend.
         *
         * @param array $query The query arguments.
         * @param int   $page  The page number.
         * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
         */
        private function get_final_frontend_query($query, $page = 1, $is_exclude_applied_filters = false)
        {
        }
        /**
         * Get final query args based on provided values
         *
         * @param array $common_query_values Common query values.
         * @param array $query               Query from block context.
         * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
         */
        private function get_final_query_args($common_query_values, $query, $is_exclude_applied_filters = false)
        {
        }
        /**
         * Extends allowed `collection_params` for the REST API
         *
         * By itself, the REST API doesn't accept custom `orderby` values,
         * even if they are supported by a custom post type.
         *
         * @param array $params  A list of allowed `orderby` values.
         *
         * @return array
         */
        public function extend_rest_query_allowed_params($params)
        {
        }
        /**
         * Merge in the first parameter the keys "post_in", "meta_query" and "tax_query" of the second parameter.
         *
         * @param array[] ...$queries Query arrays to be merged.
         * @return array
         */
        private function merge_queries(...$queries)
        {
        }
        /**
         * Return query params to support custom sort values
         *
         * @param string $orderby  Sort order option.
         *
         * @return array
         */
        private function get_custom_orderby_query($orderby)
        {
        }
        /**
         * Return a query for on sale products.
         *
         * @param bool $is_on_sale Whether to query for on sale products.
         *
         * @return array
         */
        private function get_on_sale_products_query($is_on_sale)
        {
        }
        /**
         * Return or initialize $valid_query_vars.
         *
         * @return array
         */
        private function get_valid_query_vars()
        {
        }
        /**
         * Merge two array recursively but replace the non-array values instead of
         * merging them. The merging strategy:
         *
         * - If keys from merge array doesn't exist in the base array, create them.
         * - For array items with numeric keys, we merge them as normal.
         * - For array items with string keys:
         *
         *   - If the value isn't array, we'll use the value comming from the merge array.
         *     $base = ['orderby' => 'date']
         *     $new  = ['orderby' => 'meta_value_num']
         *     Result: ['orderby' => 'meta_value_num']
         *
         *   - If the value is array, we'll use recursion to merge each key.
         *     $base = ['meta_query' => [
         *       [
         *         'key'     => '_stock_status',
         *         'compare' => 'IN'
         *         'value'   =>  ['instock', 'onbackorder']
         *       ]
         *     ]]
         *     $new  = ['meta_query' => [
         *       [
         *         'relation' => 'AND',
         *         [...<max_price_query>],
         *         [...<min_price_query>],
         *       ]
         *     ]]
         *     Result: ['meta_query' => [
         *       [
         *         'key'     => '_stock_status',
         *         'compare' => 'IN'
         *         'value'   =>  ['instock', 'onbackorder']
         *       ],
         *       [
         *         'relation' => 'AND',
         *         [...<max_price_query>],
         *         [...<min_price_query>],
         *       ]
         *     ]]
         *
         *     $base = ['post__in' => [1, 2, 3, 4, 5]]
         *     $new  = ['post__in' => [3, 4, 5, 6, 7]]
         *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
         *
         * @param array $base First array.
         * @param array $new  Second array.
         */
        private function array_merge_recursive_replace_non_array_properties($base, $new)
        {
        }
        /**
         * Return a query for products depending on their stock status.
         *
         * @param array $stock_statuses An array of acceptable stock statuses.
         * @return array
         */
        private function get_stock_status_query($stock_statuses)
        {
        }
        /**
         * Return a query for product visibility depending on their stock status.
         *
         * @param array $stock_query Stock status query.
         *
         * @return array Tax query for product visibility.
         */
        private function get_product_visibility_query($stock_query)
        {
        }
        /**
         * Merge tax_queries from various queries.
         *
         * @param array ...$queries Query arrays to be merged.
         * @return array
         */
        private function merge_tax_queries(...$queries)
        {
        }
        /**
         * Return the `tax_query` for the requested attributes
         *
         * @param array $attributes  Attributes and their terms.
         *
         * @return array
         */
        private function get_product_attributes_query($attributes = array())
        {
        }
        /**
         * Return a query to filter products by taxonomies (product categories, product tags, etc.)
         *
         * For example:
         * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
         * We use this function to extract its query from $tax_query.
         *
         * For example, this is how the query for product categories will look like in $tax_query array:
         * Array
         *    (
         *        [taxonomy] => product_cat
         *        [terms] => Array
         *            (
         *                [0] => 36
         *            )
         *    )
         *
         * For product tags, taxonomy would be "product_tag"
         *
         * @param array $tax_query Query to filter products by taxonomies.
         * @return array Query to filter products by taxonomies.
         */
        private function get_filter_by_taxonomies_query($tax_query) : array
        {
        }
        /**
         * Apply the query only to a subset of products
         *
         * @param array $query  The query.
         * @param array $ids  Array of selected product ids.
         *
         * @return array
         */
        private function filter_query_to_only_include_ids($query, $ids)
        {
        }
        /**
         * Return queries that are generated by query args.
         *
         * @return array
         */
        private function get_queries_by_applied_filters()
        {
        }
        /**
         * Return a query that filters products by price.
         *
         * @return array
         */
        private function get_filter_by_price_query()
        {
        }
        /**
         * Return a query that filters products by attributes.
         *
         * @return array
         */
        private function get_filter_by_attributes_query()
        {
        }
        /**
         * Get all the query args related to the filter by attributes block.
         *
         * @return array
         * [color] => Array
         *   (
         *        [filter] => filter_color
         *        [query_type] => query_type_color
         *    )
         *
         * [size] => Array
         *    (
         *        [filter] => filter_size
         *        [query_type] => query_type_size
         *    )
         * )
         */
        private function get_filter_by_attributes_query_vars()
        {
        }
        /**
         * Return a query that filters products by stock status.
         *
         * @return array
         */
        private function get_filter_by_stock_status_query()
        {
        }
        /**
         * Return a query that filters products by rating.
         *
         * @return array
         */
        private function get_filter_by_rating_query()
        {
        }
    }
    /**
     * ProductDetails class.
     */
    class ProductDetails extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-details';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Gets the tabs with their content to be rendered by the block.
         *
         * @return string The tabs html to be rendered by the block
         */
        protected function render_tabs()
        {
        }
    }
    /**
     * ProductGallery class.
     */
    class ProductGallery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-gallery';
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Inject dialog into the product gallery HTML.
         *
         * @param string $gallery_html The gallery HTML.
         * @param string $dialog_html  The dialog HTML.
         *
         * @return string
         */
        protected function inject_dialog($gallery_html, $dialog_html)
        {
        }
        /**
         * Return the dialog content.
         *
         * @return string
         */
        protected function render_dialog()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductGalleryLargeImage class.
     */
    class ProductGalleryLargeImage extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-gallery-large-image';
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Enqueue frontend assets for this block, just in time for rendering.
         *
         * @param array    $attributes  Any attributes that currently are available from the block.
         * @param string   $content    The block content.
         * @param WP_Block $block    The block object.
         */
        protected function enqueue_assets(array $attributes, $content, $block)
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the main images html code. The first element of the array contains the HTML of the first image that is visible, the second element contains the HTML of the other images that are hidden.
         *
         * @param array $context The block context.
         * @param int   $product_id The product id.
         *
         * @return array
         */
        private function get_main_images_html($context, $product_id)
        {
        }
        /**
         * Get directives for the block.
         *
         * @param array $block_context The block context.
         *
         * @return array
         */
        private function get_directives($block_context)
        {
        }
        /**
         * Get directives for zoom.
         *
         * @param array $block_context The block context.
         *
         * @return array
         */
        private function get_zoom_directives($block_context)
        {
        }
        /**
         * Get directives for opening the dialog.
         *
         * @param array $block_context The block context.
         *
         * @return array
         */
        private function get_open_dialog_directives($block_context)
        {
        }
    }
    /**
     * ProductGalleryLargeImage class.
     */
    class ProductGalleryLargeImageNextPrevious extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-gallery-large-image-next-previous';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         *  Return class suffix
         *
         * @param array $context Block context.
         * @return string
         */
        private function get_class_suffix($context)
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Generates the HTML for a next or previous button for the product gallery large image.
         *
         * @param string $button_type The type of button to generate. Either 'previous' or 'next'.
         * @param string $context     The block context.
         * @return string The HTML for the generated button.
         */
        protected function get_button($button_type, $context)
        {
        }
        /**
         * Returns an HTML button element with an SVG icon for the previous or next button when the buttons are inside the image.
         *
         * @param string $button_type The type of button to return. Either "previous" or "next".
         * @param string $context The context in which the button is being used.
         * @return string The HTML for the button element.
         */
        protected function get_inside_button($button_type, $context)
        {
        }
        /**
         * Returns an HTML button element with an SVG icon for the previous or next button when the buttons are outside the image.
         *
         * @param string $button_type The type of button to return. Either "previous" or "next".
         * @param string $context The context in which the button is being used.
         * @return string The HTML for the button element.
         */
        protected function get_outside_button($button_type, $context)
        {
        }
    }
    /**
     * ProductGalleryPager class.
     */
    class ProductGalleryPager extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-gallery-pager';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Renders the pager for the product gallery.
         *
         * @param  array  $product_gallery_images_ids An array of image IDs for the product gallery.
         * @param  string $pager_display_mode         The display mode for the pager.
         * @param  int    $number_of_thumbnails       The number of thumbnails to display in the pager.
         * @return string|null The rendered pager HTML, or null if the pager should not be displayed.
         */
        private function render_pager($product_gallery_images_ids, $pager_display_mode, $number_of_thumbnails)
        {
        }
        /**
         * Renders the pager pages for the product gallery.
         *
         * @param  array  $product_gallery_images_ids An array of image IDs for the product gallery.
         * @param  int    $number_of_thumbnails The number of thumbnails to display in the pager.
         * @param  string $pager_display_mode The display mode for the pager. Defaults to 'dots'.
         * @return string The rendered pager pages HTML.
         */
        private function render_pager_pages($product_gallery_images_ids, $number_of_thumbnails, $pager_display_mode = 'dots')
        {
        }
        /**
         * Generates an SVG dot icon with the specified opacity.
         *
         * @param bool $is_active Whether the dot icon should be in active state. Defaults to false.
         * @return string The SVG dot icon HTML.
         */
        private function get_dot_icon($is_active = false)
        {
        }
    }
    /**
     * ProductGalleryThumbnails class.
     */
    class ProductGalleryThumbnails extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-gallery-thumbnails';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductImage class.
     */
    class ProductImage extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-image';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * It is necessary to register and enqueues assets during the render phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        private function parse_attributes($attributes)
        {
        }
        /**
         * Render on Sale Badge.
         *
         * @param \WC_Product $product Product object.
         * @param array       $attributes Attributes.
         * @return string
         */
        private function render_on_sale_badge($product, $attributes)
        {
        }
        /**
         * Render anchor.
         *
         * @param \WC_Product $product       Product object.
         * @param string      $on_sale_badge Return value from $render_image.
         * @param string      $product_image Return value from $render_on_sale_badge.
         * @param array       $attributes    Attributes.
         * @return string
         */
        private function render_anchor($product, $on_sale_badge, $product_image, $attributes)
        {
        }
        /**
         * Render Image.
         *
         * @param \WC_Product $product Product object.
         * @param array       $attributes Parsed attributes.
         * @return string
         */
        private function render_image($product, $attributes)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Include and render the block
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductImageGallery class.
     */
    class ProductImageGallery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-image-gallery';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         *  Register the context
         *
         * @return string[]
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductNew class.
     */
    class ProductNew extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-new';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductOnSale class.
     */
    class ProductOnSale extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-on-sale';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
    }
    /**
     * ProductPrice class.
     */
    class ProductPrice extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-price';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    // phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_tax_query
    // phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_query
    // phpcs:disable WordPress.DB.SlowDBQuery.slow_db_query_meta_key
    /**
     * ProductQuery class.
     */
    class ProductQuery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-query';
        /**
         * The Block with its attributes before it gets rendered
         *
         * @var array
         */
        protected $parsed_block;
        /**
         * Orderby options not natively supported by WordPress REST API
         *
         * @var array
         */
        protected $custom_order_opts = array('popularity', 'rating');
        /**
         * All the query args related to the filter by attributes block.
         *
         * @var array
         */
        protected $attributes_filter_query_args = array();
        /** This is a feature flag to enable the custom inherit Global Query implementation.
         * This is not intended to be a permanent feature flag, but rather a temporary.
         * It is also necessary to enable this feature flag on the PHP side: `assets/js/blocks/product-query/utils.tsx:83`.
         * https://github.com/woocommerce/woocommerce-blocks/pull/7382
         *
         * @var boolean
         */
        protected $is_custom_inherit_global_query_implementation_enabled = false;
        /**
         * All query args from WP_Query.
         *
         * @var array
         */
        protected $valid_query_vars;
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         * - Hook into pre_render_block to update the query.
         */
        protected function initialize()
        {
        }
        /**
         * Post Template support for grid view was introduced in Gutenberg 16 / WordPress 6.3
         * Fixed in:
         * - https://github.com/woocommerce/woocommerce-blocks/pull/9916
         * - https://github.com/woocommerce/woocommerce-blocks/pull/10360
         */
        private function check_if_post_template_has_support_for_grid_view()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
        /**
         * Check if a given block
         *
         * @param array $parsed_block The block being rendered.
         * @return boolean
         */
        public static function is_woocommerce_variation($parsed_block)
        {
        }
        /**
         * Enqueues the variation styles when rendering the Product Query variation.
         *
         * @param string $block_content The block content.
         * @param array  $block         The full block, including name and attributes.
         *
         * @return string The block content.
         */
        public function enqueue_styles(string $block_content, array $block)
        {
        }
        /**
         * Update the query for the product query block.
         *
         * @param string|null $pre_render   The pre-rendered content. Default null.
         * @param array       $parsed_block The block being rendered.
         */
        public function update_query($pre_render, $parsed_block)
        {
        }
        /**
         * Merge tax_queries from various queries.
         *
         * @param array ...$queries Query arrays to be merged.
         * @return array
         */
        private function merge_tax_queries(...$queries)
        {
        }
        /**
         * Update the query for the product query block in Editor.
         *
         * @param array           $args    Query args.
         * @param WP_REST_Request $request Request.
         */
        public function update_rest_query($args, $request) : array
        {
        }
        /**
         * Return a custom query based on attributes, filters and global WP_Query.
         *
         * @param WP_Query $query The WordPress Query.
         * @return array
         */
        public function build_query($query)
        {
        }
        /**
         * Merge in the first parameter the keys "post_in", "meta_query" and "tax_query" of the second parameter.
         *
         * @param array[] ...$queries Query arrays to be merged.
         * @return array
         */
        private function merge_queries(...$queries)
        {
        }
        /**
         * Extends allowed `collection_params` for the REST API
         *
         * By itself, the REST API doesn't accept custom `orderby` values,
         * even if they are supported by a custom post type.
         *
         * @param array $params  A list of allowed `orderby` values.
         *
         * @return array
         */
        public function extend_rest_query_allowed_params($params)
        {
        }
        /**
         * Return a query for on sale products.
         *
         * @return array
         */
        private function get_on_sale_products_query()
        {
        }
        /**
         * Return query params to support custom sort values
         *
         * @param string $orderby  Sort order option.
         *
         * @return array
         */
        private function get_custom_orderby_query($orderby)
        {
        }
        /**
         * Apply the query only to a subset of products
         *
         * @param array $query  The query.
         * @param array $ids  Array of selected product ids.
         *
         * @return array
         */
        private function filter_query_to_only_include_ids($query, $ids)
        {
        }
        /**
         * Return the `tax_query` for the requested attributes
         *
         * @param array $attributes  Attributes and their terms.
         *
         * @return array
         */
        private function get_product_attributes_query($attributes = array())
        {
        }
        /**
         * Return a query for products depending on their stock status.
         *
         * @param array $stock_statii An array of acceptable stock statii.
         * @return array
         */
        private function get_stock_status_query($stock_statii)
        {
        }
        /**
         * Return a query for product visibility depending on their stock status.
         *
         * @param array $stock_query Stock status query.
         *
         * @return array Tax query for product visibility.
         */
        private function get_product_visibility_query($stock_query)
        {
        }
        /**
         * Set the query vars that are used by filter blocks.
         *
         * @return array
         */
        private function get_query_vars_from_filter_blocks()
        {
        }
        /**
         * Set the query vars that are used by filter blocks.
         *
         * @param array $public_query_vars Public query vars.
         * @return array
         */
        public function set_query_vars($public_query_vars)
        {
        }
        /**
         * Get all the query args related to the filter by attributes block.
         *
         * @return array
         * [color] => Array
         *   (
         *        [filter] => filter_color
         *        [query_type] => query_type_color
         *    )
         *
         * [size] => Array
         *    (
         *        [filter] => filter_size
         *        [query_type] => query_type_size
         *    )
         * )
         */
        private function get_filter_by_attributes_query_vars()
        {
        }
        /**
         * Return queries that are generated by query args.
         *
         * @return array
         */
        private function get_queries_by_applied_filters()
        {
        }
        /**
         * Return queries that are generated by attributes
         *
         * @param array $parsed_block The Product Query that being rendered.
         * @return array
         */
        private function get_queries_by_custom_attributes($parsed_block)
        {
        }
        /**
         * Return a query that filters products by price.
         *
         * @return array
         */
        private function get_filter_by_price_query()
        {
        }
        /**
         * Return a query that filters products by attributes.
         *
         * @return array
         */
        private function get_filter_by_attributes_query()
        {
        }
        /**
         * Return a query that filters products by stock status.
         *
         * @return array
         */
        private function get_filter_by_stock_status_query()
        {
        }
        /**
         * Return or initialize $valid_query_vars.
         *
         * @return array
         */
        private function get_valid_query_vars()
        {
        }
        /**
         * Merge two array recursively but replace the non-array values instead of
         * merging them. The merging strategy:
         *
         * - If keys from merge array doesn't exist in the base array, create them.
         * - For array items with numeric keys, we merge them as normal.
         * - For array items with string keys:
         *
         *   - If the value isn't array, we'll use the value comming from the merge array.
         *     $base = ['orderby' => 'date']
         *     $new  = ['orderby' => 'meta_value_num']
         *     Result: ['orderby' => 'meta_value_num']
         *
         *   - If the value is array, we'll use recursion to merge each key.
         *     $base = ['meta_query' => [
         *       [
         *         'key'     => '_stock_status',
         *         'compare' => 'IN'
         *         'value'   =>  ['instock', 'onbackorder']
         *       ]
         *     ]]
         *     $new  = ['meta_query' => [
         *       [
         *         'relation' => 'AND',
         *         [...<max_price_query>],
         *         [...<min_price_query>],
         *       ]
         *     ]]
         *     Result: ['meta_query' => [
         *       [
         *         'key'     => '_stock_status',
         *         'compare' => 'IN'
         *         'value'   =>  ['instock', 'onbackorder']
         *       ],
         *       [
         *         'relation' => 'AND',
         *         [...<max_price_query>],
         *         [...<min_price_query>],
         *       ]
         *     ]]
         *
         *     $base = ['post__in' => [1, 2, 3, 4, 5]]
         *     $new  = ['post__in' => [3, 4, 5, 6, 7]]
         *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
         *
         * @param array $base First array.
         * @param array $new  Second array.
         */
        private function array_merge_recursive_replace_non_array_properties($base, $new)
        {
        }
        /**
         * Get product-related query variables from the global query.
         *
         * @param array $parsed_block The Product Query that being rendered.
         *
         * @return array
         */
        private function get_global_query($parsed_block)
        {
        }
        /**
         * Return a query that filters products by rating.
         *
         * @return array
         */
        private function get_filter_by_rating_query()
        {
        }
        /**
         * Return a query to filter products by taxonomies (product categories, product tags, etc.)
         *
         * For example:
         * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
         * We use this function to extract it's query from $tax_query.
         *
         * For example, this is how the query for product categories will look like in $tax_query array:
         * Array
         *    (
         *        [taxonomy] => product_cat
         *        [terms] => Array
         *            (
         *                [0] => 36
         *            )
         *    )
         *
         * For product categories, taxonomy would be "product_tag"
         *
         * @param array $query WP_Query.
         * @return array Query to filter products by taxonomies.
         */
        private function get_filter_by_taxonomies_query($query) : array
        {
        }
        /**
         * Returns the keyword filter from the given query.
         *
         * @param WP_Query $query The query to extract the keyword filter from.
         * @return array The keyword filter, or an empty array if none is found.
         */
        private function get_filter_by_keyword_query($query) : array
        {
        }
    }
    /**
     * ProductRating class.
     */
    class ProductRating extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-rating';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        private function parse_attributes($attributes)
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductRatingCounter class.
     */
    class ProductRatingCounter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-rating-counter';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Get the block's attributes.
         *
         * @param array $attributes Block attributes. Default empty array.
         * @return array  Block attributes merged with defaults.
         */
        private function parse_attributes($attributes)
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductRatingStars class.
     */
    class ProductRatingStars extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-rating-stars';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductResultsCount class.
     */
    class ProductResultsCount extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-results-count';
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductReviews class.
     */
    class ProductReviews extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-reviews';
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductSKU class.
     */
    class ProductSKU extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-sku';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductSaleBadge class.
     */
    class ProductSaleBadge extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-sale-badge';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Overwrite parent method to prevent script registration.
         *
         * It is necessary to register and enqueues assets during the render
         * phase because we want to load assets only if the block has the content.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductSearch class.
     */
    class ProductSearch extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-search';
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         * @return null
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content    Block content.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * ProductStockIndicator class.
     */
    class ProductStockIndicator extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-stock-indicator';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Register the context.
         */
        protected function get_block_type_uses_context()
        {
        }
        /**
         * Get stock text based on stock. For example:
         * - In stock
         * - Out of stock
         * - Available on backorder
         * - 2 left in stock
         *
         * @param [bool]     $is_in_stock Whether the product is in stock.
         * @param [bool]     $is_low_stock Whether the product is low in stock.
         * @param [int|null] $low_stock_amount The amount of stock that is considered low.
         * @param [bool]     $is_on_backorder Whether the product is on backorder.
         * @return string Stock text.
         */
        protected static function getTextBasedOnStock($is_in_stock, $is_low_stock, $low_stock_amount, $is_on_backorder)
        {
        }
        /**
         * Include and render the block.
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param string   $content    Block content. Default empty string.
         * @param WP_Block $block      Block instance.
         * @return string Rendered block type output.
         */
        protected function render($attributes, $content, $block)
        {
        }
    }
    /**
     * ProductSummary class.
     */
    class ProductSummary extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-summary';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
    }
    /**
     * ProductTag class.
     */
    class ProductTag extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-tag';
        /**
         * Set args specific to this block.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * ProductTemplate class.
     */
    class ProductTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-template';
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Determines whether a block list contains a block that uses the featured image.
         *
         * @param WP_Block_List $inner_blocks Inner block instance.
         *
         * @return bool Whether the block list contains a block that uses the featured image.
         */
        protected function block_core_post_template_uses_featured_image($inner_blocks)
        {
        }
    }
    /**
     * ProductTitle class.
     */
    class ProductTitle extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-title';
        /**
         * API version name.
         *
         * @var string
         */
        protected $api_version = '2';
        /**
         * Get block supports. Shared with the frontend.
         * IMPORTANT: If you change anything here, make sure to update the JS file too.
         *
         * @return array
         */
        protected function get_block_type_supports()
        {
        }
        /**
         * Register script and style assets for the block type before it is registered.
         *
         * This registers the scripts; it does not enqueue them.
         */
        protected function register_block_type_assets()
        {
        }
    }
    /**
     * ProductTopRated class.
     */
    class ProductTopRated extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'product-top-rated';
        /**
         * Force orderby to rating.
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
    }
    /**
     * ProductsByAttribute class.
     */
    class ProductsByAttribute extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'products-by-attribute';
        /**
         * Set args specific to this block
         *
         * @param array $query_args Query args.
         */
        protected function set_block_query_args(&$query_args)
        {
        }
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_block_type_attributes()
        {
        }
    }
    /**
     * PriceFilter class.
     */
    class RatingFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'rating-filter';
        const RATING_QUERY_VAR = 'rating_filter';
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * RelatedProducts class.
     */
    class RelatedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'related-products';
        /**
         * The Block with its attributes before it gets rendered
         *
         * @var array
         */
        protected $parsed_block;
        /**
         * Initialize this block type.
         *
         * - Hook into WP lifecycle.
         * - Register the block with WordPress.
         * - Hook into pre_render_block to update the query.
         */
        protected function initialize()
        {
        }
        /**
         * It isn't necessary register block assets because it is a server side block.
         */
        protected function register_block_type_assets()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
        /**
         * Update the query for the product query block.
         *
         * @param string|null $pre_render   The pre-rendered content. Default null.
         * @param array       $parsed_block The block being rendered.
         */
        public function update_query($pre_render, $parsed_block)
        {
        }
        /**
         * Return a custom query based on attributes, filters and global WP_Query.
         *
         * @param WP_Query $query The WordPress Query.
         * @return array
         */
        public function build_query($query)
        {
        }
        /**
         * If there are no related products, return an empty string.
         *
         * @param string $content The block content.
         * @param array  $block The block.
         *
         * @return string The block content.
         */
        public function render_block(string $content, array $block)
        {
        }
        /**
         * Determines whether the block is a related products block.
         *
         * @param array $block The block.
         *
         * @return bool Whether the block is a related products block.
         */
        private function is_related_products_block($block)
        {
        }
        /**
         * Get related products ids.
         * The logic is copied from the core function woocommerce_related_products. https://github.com/woocommerce/woocommerce/blob/ca49caabcba84ce9f60a03c6d3534ec14b350b80/plugins/woocommerce/includes/wc-template-functions.php/#L2039-L2074
         *
         * @param number $product_per_page Products per page.
         * @return array Products ids.
         */
        private function get_related_products_ids($product_per_page = 5)
        {
        }
    }
    /**
     * ReviewsByCategory class.
     */
    class ReviewsByCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-category';
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * ReviewsByProduct class.
     */
    class ReviewsByProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'reviews-by-product';
        /**
         * Get the frontend script handle for this block type.
         *
         * @see $this->register_block_type()
         * @param string $key Data to get, or default to everything.
         * @return array|string
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $attributes = [])
        {
        }
    }
    /**
     * SingleProduct class.
     */
    class SingleProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'single-product';
        /**
         * Product ID of the current product to be displayed in the Single Product block.
         * This is used to replace the global post for the Single Product inner blocks.
         *
         * @var int
         */
        protected $product_id = 0;
        /**
         * Single Product inner blocks names.
         * This is used to map all the inner blocks for a Single Product block.
         *
         * @var array
         */
        protected $single_product_inner_blocks_names = [];
        /**
         * Initialize the block and Hook into the `render_block_context` filter
         * to update the context with the correct data.
         *
         * @var string
         */
        protected function initialize()
        {
        }
        /**
         * Restore the global post variable right before generating the render output for the post title and/or post excerpt blocks.
         *
         * This is required due to the changes made via the replace_post_for_single_product_inner_block method.
         * It is a temporary fix to ensure these blocks work as expected until Gutenberg versions 15.2 and 15.6 are part of the core of WordPress.
         *
         * @see https://github.com/WordPress/gutenberg/pull/48001
         * @see https://github.com/WordPress/gutenberg/pull/49495
         *
         * @param  string    $block_content  The block content.
         * @param  array     $parsed_block  The full block, including name and attributes.
         * @param  \WP_Block $block_instance  The block instance.
         *
         * @return mixed
         */
        public function restore_global_post($block_content, $parsed_block, $block_instance)
        {
        }
        /**
         * Update the context by injecting the correct post data
         * for each one of the Single Product inner blocks.
         *
         * @param array    $context Block context.
         * @param array    $block Block attributes.
         * @param WP_Block $parent_block Block instance.
         *
         * @return array Updated block context.
         */
        public function update_context($context, $block, $parent_block)
        {
        }
        /**
         * Extract the inner block names for the Single Product block. This way it's possible
         * to map all the inner blocks for a Single Product block and manipulate the data as needed.
         *
         * @param array $block The Single Product block or its inner blocks.
         * @param array $result Array of inner block names.
         *
         * @return array Array containing all the inner block names of a Single Product block.
         */
        protected function extract_single_product_inner_block_names($block, &$result = [])
        {
        }
        /**
         * Replace the global post for the Single Product inner blocks and reset it after.
         *
         * This is needed because some of the inner blocks may use the global post
         * instead of fetching the product through the `productId` attribute, so even if the
         * `productId` is passed to the inner block, it will still use the global post.
         *
         * @param array $block Block attributes.
         * @param array $context Block context.
         */
        protected function replace_post_for_single_product_inner_block($block, &$context)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         *
         * @return null This block has no frontend script.
         */
        protected function get_block_type_script($key = null)
        {
        }
    }
    /**
     * AttributeFilter class.
     */
    class StockFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'stock-filter';
        const STOCK_STATUS_QUERY_VAR = 'filter_stock_status';
        /**
         * Extra data passed through from server to client for block.
         *
         * @param array $stock_statuses  Any stock statuses that currently are available from the block.
         *                           Note, this will be empty in the editor context when the block is
         *                           not in the post content on editor load.
         */
        protected function enqueue_data(array $stock_statuses = [])
        {
        }
        /**
         * Get Stock status query variables values.
         */
        public static function get_stock_status_query_var_values()
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return string[]
         */
        protected function get_block_type_style()
        {
        }
    }
    /**
     * StoreNotices class.
     */
    class StoreNotices extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'store-notices';
        /**
         * Render the block.
         *
         * @param array    $attributes Block attributes.
         * @param string   $content Block content.
         * @param WP_Block $block Block instance.
         *
         * @return string | void Rendered block output.
         */
        protected function render($attributes, $content, $block)
        {
        }
        /**
         * Get the frontend script handle for this block type.
         *
         * @param string $key Data to get, or default to everything.
         */
        protected function get_block_type_script($key = null)
        {
        }
        /**
         * Get the frontend style handle for this block type.
         *
         * @return null
         */
        protected function get_block_type_style()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * BlockTypesController class.
     *
     * @since 5.0.0
     * @internal
     */
    final class BlockTypesController
    {
        /**
         * Instance of the asset API.
         *
         * @var AssetApi
         */
        protected $asset_api;
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Constructor.
         *
         * @param AssetApi          $asset_api Instance of the asset API.
         * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
        {
        }
        /**
         * Initialize class features.
         */
        protected function init()
        {
        }
        /**
         * Register blocks, hooking up assets and render functions as needed.
         */
        public function register_blocks()
        {
        }
        /**
         * Add data- attributes to blocks when rendered if the block is under the woocommerce/ namespace.
         *
         * @param string $content Block content.
         * @param array  $block Parsed block data.
         * @return string
         */
        public function add_data_attributes($content, $block)
        {
        }
        /**
         * Adds a redirect field to the login form so blocks can redirect users after login.
         */
        public function redirect_to_field()
        {
        }
        /**
         * Hide legacy widgets with a feature complete block equivalent in the inserter
         * and prevent them from showing as an option in the Legacy Widget block.
         *
         * @param array $widget_types An array of widgets hidden in core.
         * @return array $widget_types An array inluding the WooCommerce widgets to hide.
         */
        public function hide_legacy_widgets_with_block_equivalent($widget_types)
        {
        }
        /**
         * Delete product transients when a product is deleted.
         */
        public function delete_product_transients()
        {
        }
        /**
         * Get list of block types.
         *
         * @return array
         */
        protected function get_block_types()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain {
    /**
     * Takes care of bootstrapping the plugin.
     *
     * @since 2.5.0
     */
    class Bootstrap
    {
        /**
         * Holds the Dependency Injection Container
         *
         * @var Container
         */
        private $container;
        /**
         * Holds the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Holds the Migration instance
         *
         * @var Migration
         */
        private $migration;
        /**
         * Constructor
         *
         * @param Container $container  The Dependency Injection Container.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
        /**
         * Init the package - load the blocks library and define constants.
         */
        protected function init()
        {
        }
        /**
         * Check core dependencies exist.
         *
         * @return boolean
         */
        protected function has_core_dependencies()
        {
        }
        /**
         * See if files have been built or not.
         *
         * @return bool
         */
        protected function is_built()
        {
        }
        /**
         * Add a notice stating that the build has not been done yet.
         */
        protected function add_build_notice()
        {
        }
        /**
         * Load and set up the Interactivity API if enabled.
         */
        protected function load_interactivity_api()
        {
        }
        /**
         * Register core dependencies with the container.
         */
        protected function register_dependencies()
        {
        }
        /**
         * Throws a deprecation notice for a dependency without breaking requests.
         *
         * @param string $function Class or function being deprecated.
         * @param string $version Version in which it was deprecated.
         * @param string $replacement Replacement class or function, if applicable.
         * @param string $trigger_error_version Optional version to start surfacing this as a PHP error rather than a log. Defaults to $version.
         */
        protected function deprecated_dependency($function, $version, $replacement = '', $trigger_error_version = '')
        {
        }
        /**
         * Register payment method integrations with the container.
         */
        protected function register_payment_methods()
        {
        }
    }
    /**
     * Main package class.
     *
     * Returns information about the package and handles init.
     *
     * @since 2.5.0
     */
    class Package
    {
        /**
         * Holds the current version of the blocks plugin.
         *
         * @var string
         */
        private $version;
        /**
         * Holds the main path to the blocks plugin directory.
         *
         * @var string
         */
        private $path;
        /**
         * Holds locally the plugin_dir_url to avoid recomputing it.
         *
         * @var string
         */
        private $plugin_dir_url;
        /**
         * Holds the feature gating class instance.
         *
         * @var FeatureGating
         */
        private $feature_gating;
        /**
         * Constructor
         *
         * @param string        $version        Version of the plugin.
         * @param string        $plugin_path    Path to the main plugin file.
         * @param FeatureGating $feature_gating Feature gating class instance.
         */
        public function __construct($version, $plugin_path, \Automattic\WooCommerce\Blocks\Domain\Services\FeatureGating $feature_gating)
        {
        }
        /**
         * Returns the version of the plugin.
         *
         * @return string
         */
        public function get_version()
        {
        }
        /**
         * Returns the version of the plugin stored in the database.
         *
         * @return string
         */
        public function get_version_stored_on_db()
        {
        }
        /**
         * Set the version of the plugin stored in the database.
         * This is useful during the first installation or after the upgrade process.
         */
        public function set_version_stored_on_db()
        {
        }
        /**
         * Returns the path to the plugin directory.
         *
         * @param string $relative_path  If provided, the relative path will be
         *                               appended to the plugin path.
         *
         * @return string
         */
        public function get_path($relative_path = '')
        {
        }
        /**
         * Returns the url to the blocks plugin directory.
         *
         * @param string $relative_url If provided, the relative url will be
         *                             appended to the plugin url.
         *
         * @return string
         */
        public function get_url($relative_url = '')
        {
        }
        /**
         * Returns an instance of the the FeatureGating class.
         *
         * @return FeatureGating
         */
        public function feature()
        {
        }
        /**
         * Checks if we're executing the code in an experimental build mode.
         *
         * @return boolean
         */
        public function is_experimental_build()
        {
        }
        /**
         * Checks if we're executing the code in an feature plugin or experimental build mode.
         *
         * @return boolean
         */
        public function is_feature_plugin_build()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain\Services {
    /**
     * Service class implementing new create account emails used for order processing via the Block Based Checkout.
     */
    class CreateAccount
    {
        /**
         * Reference to the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor.
         *
         * @param Package $package An instance of (Woo Blocks) Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Init - register handlers for WooCommerce core email hooks.
         */
        public function init()
        {
        }
        /**
         * Trigger new account email.
         * This is intended as a replacement to WC_Emails::customer_new_account(),
         * with a set password link instead of emailing the new password in email
         * content.
         *
         * @param int   $customer_id       The ID of the new customer account.
         * @param array $new_customer_data Assoc array of data for the new account.
         */
        public function customer_new_account($customer_id = 0, array $new_customer_data = array())
        {
        }
    }
    /**
     * Service class for adding DraftOrder functionality to WooCommerce core.
     *
     * Sets up all logic related to the Checkout Draft Orders service
     *
     * @internal
     */
    class DraftOrders
    {
        const DB_STATUS = 'wc-checkout-draft';
        const STATUS = 'checkout-draft';
        /**
         * Holds the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Constructor
         *
         * @param Package $package An instance of the package class.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Set all hooks related to adding Checkout Draft order functionality to Woo Core.
         */
        public function init()
        {
        }
        /**
         * Installation related logic for Draft order functionality.
         *
         * @internal
         */
        public function install()
        {
        }
        /**
         * Maybe create cron events.
         */
        protected function maybe_create_cronjobs()
        {
        }
        /**
         * Register custom order status for orders created via the API during checkout.
         *
         * Draft order status is used before payment is attempted, during checkout, when a cart is converted to an order.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function register_draft_order_status(array $statuses)
        {
        }
        /**
         * Register custom order post status for orders created via the API during checkout.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function register_draft_order_post_status(array $statuses)
        {
        }
        /**
         * Returns the properties of this post status for registration.
         *
         * @return array
         */
        private function get_post_status_properties()
        {
        }
        /**
         * Remove draft status from the 'status' argument of an $args array.
         *
         * @param array $args Array of arguments containing statuses in the status key.
         * @internal
         * @return array
         */
        public function delete_draft_order_post_status_from_args($args)
        {
        }
        /**
         * Append draft status to a list of statuses.
         *
         * @param array $statuses Array of statuses.
         * @internal
         * @return array
         */
        public function append_draft_order_post_status($statuses)
        {
        }
        /**
         * Delete draft orders older than a day in batches of 20.
         *
         * Ran on a daily cron schedule.
         *
         * @internal
         */
        public function delete_expired_draft_orders()
        {
        }
        /**
         * Since it's possible for third party code to clobber the `$wp_post_statuses` global,
         * we need to do a final check here to make sure the draft post status is
         * registered with the global so that it is not removed by WP_Query status
         * validation checks.
         */
        private function ensure_draft_status_registered()
        {
        }
        /**
         * Asserts whether incoming order results are expected given the query
         * this service class executes.
         *
         * @param WC_Order[] $order_results The order results being asserted.
         * @param int        $expected_batch_size The expected batch size for the results.
         * @throws Exception If any assertions fail, an exception is thrown.
         */
        private function assert_order_results($order_results, $expected_batch_size)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain\Services\Email {
    /**
     * Customer New Account.
     *
     * An email sent to the customer when they create an account.
     * This is intended as a replacement to \WC_Email_Customer_New_Account(),
     * with a set password link instead of emailing the new password in email
     * content.
     *
     * @extends     \WC_Email
     */
    class CustomerNewAccount extends \WC_Email
    {
        /**
         * User login name.
         *
         * @var string
         */
        public $user_login;
        /**
         * User email.
         *
         * @var string
         */
        public $user_email;
        /**
         * Magic link to set initial password.
         *
         * @var string
         */
        public $set_password_url;
        /**
         * Override (force) default template path
         *
         * @var string
         */
        public $default_template_path;
        /**
         * Constructor.
         *
         * @param Package $package An instance of (Woo Blocks) Package.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Get email subject.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get email heading.
         *
         * @since  3.1.0
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Trigger.
         *
         * @param int    $user_id User ID.
         * @param string $user_pass User password.
         * @param bool   $password_generated Whether the password was generated automatically or not.
         */
        public function trigger($user_id, $user_pass = '', $password_generated = false)
        {
        }
        /**
         * Get content html.
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain.
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Default content to show below main email content.
         *
         * @since 3.7.0
         * @return string
         */
        public function get_default_additional_content()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain\Services {
    /**
     * Service class that handles the feature flags.
     *
     * @internal
     */
    class FeatureGating
    {
        /**
         * Current flag value.
         *
         * @var int
         */
        private $flag;
        const EXPERIMENTAL_FLAG = 3;
        const FEATURE_PLUGIN_FLAG = 2;
        const CORE_FLAG = 1;
        /**
         * Current environment
         *
         * @var string
         */
        private $environment;
        const PRODUCTION_ENVIRONMENT = 'production';
        const DEVELOPMENT_ENVIRONMENT = 'development';
        const TEST_ENVIRONMENT = 'test';
        /**
         * Constructor
         *
         * @param int    $flag        Hardcoded flag value. Useful for tests.
         * @param string $environment Hardcoded environment value. Useful for tests.
         */
        public function __construct($flag = 0, $environment = 'unset')
        {
        }
        /**
         * Set correct flag.
         */
        public function load_flag()
        {
        }
        /**
         * Set correct environment.
         */
        public function load_environment()
        {
        }
        /**
         * Returns the current flag value.
         *
         * @return int
         */
        public function get_flag()
        {
        }
        /**
         * Checks if we're executing the code in an experimental build mode.
         *
         * @return boolean
         */
        public function is_experimental_build()
        {
        }
        /**
         * Checks if we're executing the code in an feature plugin or experimental build mode.
         *
         * @return boolean
         */
        public function is_feature_plugin_build()
        {
        }
        /**
         * Returns the current environment value.
         *
         * @return string
         */
        public function get_environment()
        {
        }
        /**
         * Checks if we're executing the code in an development environment.
         *
         * @return boolean
         */
        public function is_development_environment()
        {
        }
        /**
         * Checks if we're executing the code in a production environment.
         *
         * @return boolean
         */
        public function is_production_environment()
        {
        }
        /**
         * Checks if we're executing the code in a test environment.
         *
         * @return boolean
         */
        public function is_test_environment()
        {
        }
        /**
         * Returns core flag value.
         *
         * @return number
         */
        public static function get_core_flag()
        {
        }
        /**
         * Returns feature plugin flag value.
         *
         * @return number
         */
        public static function get_feature_plugin_flag()
        {
        }
        /**
         * Returns experimental flag value.
         *
         * @return number
         */
        public static function get_experimental_flag()
        {
        }
        /**
         * Check if the block templates controller refactor should be used to display blocks.
         *
         * @return boolean
         */
        public function is_block_templates_controller_refactor_enabled()
        {
        }
    }
    /**
     * Service class to integrate Blocks with the Google Analytics extension,
     */
    class GoogleAnalytics
    {
        /**
         * Instance of the asset API.
         *
         * @var AssetApi
         */
        protected $asset_api;
        /**
         * Constructor.
         *
         * @param AssetApi $asset_api Instance of the asset API.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Hook into WP.
         */
        public function init()
        {
        }
        /**
         * Register scripts.
         */
        public function register_assets()
        {
        }
        /**
         * Enqueue the Google Tag Manager script if prerequisites are met.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Get settings from the GA integration extension.
         *
         * @return array
         */
        private function get_google_analytics_settings()
        {
        }
        /**
         * Add async to script tags with defined handles.
         *
         * @param string $tag HTML for the script tag.
         * @param string $handle Handle of script.
         * @param string $src Src of script.
         * @return string
         */
        public function async_script_loader_tags($tag, $handle, $src)
        {
        }
    }
    /**
     * Service class that handles hydration of API data for blocks.
     */
    class Hydration
    {
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Cached notices to restore after hydrating the API.
         *
         * @var array
         */
        protected $cached_store_notices = [];
        /**
         * Constructor.
         *
         * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
        {
        }
        /**
         * Hydrates the asset data registry with data from the API. Disables notices and nonces so requests contain valid
         * data that is not polluted by the current session.
         *
         * @param array $path API paths to hydrate e.g. '/wc/store/v1/cart'.
         * @return array Response data.
         */
        public function get_rest_api_response_data($path = '')
        {
        }
        /**
         * Disable the nonce check temporarily.
         */
        protected function disable_nonce_check()
        {
        }
        /**
         * Callback to disable the nonce check. While we could use `__return_true`, we use a custom named callback so that
         * we can remove it later without affecting other filters.
         */
        public function disable_nonce_check_callback()
        {
        }
        /**
         * Restore the nonce check.
         */
        protected function restore_nonce_check()
        {
        }
        /**
         * Cache notices before hydrating the API if the customer has a session.
         */
        protected function cache_store_notices()
        {
        }
        /**
         * Restore notices into current session from cache.
         */
        protected function restore_cached_store_notices()
        {
        }
    }
    /**
     * Service class to integrate Blocks with the Jetpack WooCommerce Analytics extension,
     */
    class JetpackWooCommerceAnalytics
    {
        /**
         * Instance of the asset API.
         *
         * @var AssetApi
         */
        protected $asset_api;
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Instance of the block templates controller.
         *
         * @var BlockTemplatesController
         */
        protected $block_templates_controller;
        /**
         * Whether the required Jetpack WooCommerce Analytics classes are available.
         *
         * @var bool
         */
        protected $is_compatible;
        /**
         * Constructor.
         *
         * @param AssetApi                 $asset_api Instance of the asset API.
         * @param AssetDataRegistry        $asset_data_registry Instance of the asset data registry.
         * @param BlockTemplatesController $block_templates_controller Instance of the block templates controller.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\BlockTemplatesController $block_templates_controller)
        {
        }
        /**
         * Hook into WP.
         */
        public function init()
        {
        }
        /**
         * Gets product categories or varation attributes as a formatted concatenated string
         *
         * @param object $product WC_Product.
         * @return string
         */
        public function get_product_categories_concatenated($product)
        {
        }
        /**
         * Gather relevant product information. Taken from Jetpack WooCommerce Analytics Module.
         *
         * @param \WC_Product $product product.
         * @return array
         */
        public function get_product_details($product)
        {
        }
        /**
         * Save the order received page view event properties to the asset data registry. The front end will consume these
         * later.
         *
         * @param int $order_id The order ID.
         *
         * @return void
         */
        public function output_order_received_page_view_properties($order_id)
        {
        }
        /**
         * Check compatibility with Jetpack WooCommerce Analytics.
         *
         * @return void
         */
        public function check_compatibility()
        {
        }
        /**
         * Initialize if compatible.
         */
        public function init_if_compatible()
        {
        }
        /**
         * Register scripts.
         */
        public function register_assets()
        {
        }
        /**
         * Enqueue the Google Tag Manager script if prerequisites are met.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue the Google Tag Manager script if prerequisites are met.
         */
        public function register_script_data()
        {
        }
        /**
         * Get the current user id
         *
         * @return int
         */
        private function get_user_id()
        {
        }
        /**
         * Default event properties which should be included with all events.
         *
         * @return array Array of standard event props.
         */
        public function get_common_properties()
        {
        }
        /**
         * Get info about the cart & checkout pages, in particular whether the store is using shortcodes or Gutenberg blocks.
         * This info is cached in a transient.
         *
         * @return array
         */
        public function get_cart_checkout_info()
        {
        }
        /**
         * Get the additional blocks used in a post or template.
         *
         * @param string $content The post content.
         * @param array  $exclude The blocks to exclude.
         *
         * @return array The additional blocks.
         */
        private function get_additional_blocks($content, $exclude = array())
        {
        }
        /**
         * Get the nested blocks from a block array.
         *
         * @param array    $blocks  The blocks array to find nested blocks inside.
         * @param string[] $exclude Blocks to exclude, won't find nested blocks within any of the supplied blocks.
         *
         * @return array
         */
        private function get_nested_blocks($blocks, $exclude = array())
        {
        }
        /**
         * Track local pickup settings changes via Store API
         *
         * @param bool              $served Whether the request has already been served.
         * @param \WP_REST_Response $result The response object.
         * @param \WP_REST_Request  $request The request object.
         * @return bool
         */
        public function track_local_pickup($served, $result, $request)
        {
        }
    }
    /**
     * Service class for adding new-style Notices to WooCommerce core.
     *
     * @internal
     */
    class Notices
    {
        /**
         * Holds the Package instance
         *
         * @var Package
         */
        private $package;
        /**
         * Templates used for notices.
         *
         * @var array
         */
        private $notice_templates = array('notices/error.php', 'notices/notice.php', 'notices/success.php');
        /**
         * Constructor
         *
         * @param Package $package An instance of the package class.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
        {
        }
        /**
         * Set all hooks related to adding Checkout Draft order functionality to Woo Core. This is only enabled if the user
         * is using the new block based cart/checkout.
         */
        public function init()
        {
        }
        /**
         * Allow SVG icon in notices.
         *
         * @param array $allowed_tags Allowed tags.
         * @return array
         */
        public function add_kses_notice_allowed_tags($allowed_tags)
        {
        }
        /**
         * Replaces core notice templates with those from blocks.
         *
         * The new notice templates match block components with matching icons and styling. The only difference is that core
         * only has notices for info, success, and error notices, whereas blocks has notices for info, success, error,
         * warning, and a default notice type.
         *
         * @param string $template Located template path.
         * @param string $template_name Template name.
         * @param array  $args Template arguments.
         * @param string $template_path Template path.
         * @param string $default_path Default path.
         * @return string
         */
        public function get_notices_template($template, $template_name, $args, $template_path, $default_path)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Domain\Services\OnboardingTasks {
    /**
     * Review the cart/checkout Task
     */
    class ReviewCheckoutTask extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
    {
        /**
         * ID.
         *
         * @return string
         */
        public function get_id()
        {
        }
        /**
         * Title.
         *
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * Content.
         *
         * @return string
         */
        public function get_content()
        {
        }
        /**
         * Time.
         *
         * @return string
         */
        public function get_time()
        {
        }
        /**
         * Additional Info.
         *
         * @return string
         */
        public function get_additional_info()
        {
        }
        /**
         * Task completion.
         *
         * @return bool
         */
        public function is_complete()
        {
        }
        /**
         * Check if the store uses blocks on the cart or checkout page.
         *
         * @return boolean
         */
        private function has_cart_block()
        {
        }
        /**
         * Check if the store uses blocks on the cart or checkout page.
         *
         * @return boolean
         */
        private function has_checkout_block()
        {
        }
        /**
         * Check if the store uses blocks on the cart or checkout page.
         *
         * @return boolean
         */
        private function has_cart_or_checkout_block()
        {
        }
        /**
         * Task visibility.
         *
         * @return bool
         */
        public function can_view()
        {
        }
        /**
         * Action URL.
         *
         * @return string
         */
        public function get_action_url()
        {
        }
    }
    /**
     * Onboarding Tasks Controller
     */
    class TasksController
    {
        /**
         * Init tasks.
         */
        public function init()
        {
        }
        /**
         * Register tasks.
         */
        public function register_tasks()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Images {
    /**
     * Pexels API client.
     *
     * @internal
     */
    class Pexels
    {
        /**
         * The Pexels API endpoint.
         */
        const EXTERNAL_MEDIA_PEXELS_ENDPOINT = '/wpcom/v2/external-media/list/pexels';
        /**
         * Returns the list of images for the given search criteria.
         *
         * @param Connection $ai_connection The AI connection.
         * @param string     $token The JWT token.
         * @param string     $business_description The business description.
         *
         * @return array|\WP_Error Array of images, or WP_Error if the request failed.
         */
        public function get_images($ai_connection, $token, $business_description)
        {
        }
        /**
         * Define the search term to be used on Pexels using the AI endpoint.
         *
         * The search term is a shorter description of the business.
         *
         * @param Connection $ai_connection The AI connection.
         * @param string     $token The JWT token.
         * @param string     $business_description The business description.
         *
         * @return mixed|\WP_Error
         */
        private function define_search_term($ai_connection, $token, $business_description)
        {
        }
        /**
         * Make a request to the Pexels API.
         *
         * @param string $search_term The search term to use.
         * @param int    $per_page The number of images to return.
         *
         * @return array|\WP_Error The response body, or WP_Error if the request failed.
         */
        private function request(string $search_term, int $per_page = 90)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * A class used to display inbox messages to merchants in the WooCommerce Admin dashboard.
     *
     * @package Automattic\WooCommerce\Blocks
     * @since x.x.x
     */
    class InboxNotifications
    {
        const SURFACE_CART_CHECKOUT_NOTE_NAME = 'surface_cart_checkout';
        /**
         * Deletes the note.
         */
        public static function delete_surface_cart_checkout_blocks_notification()
        {
        }
    }
    /**
     * Installer class.
     * Handles installation of Blocks plugin dependencies.
     *
     * @internal
     */
    class Installer
    {
        /**
         * Initialize class features.
         */
        public function init()
        {
        }
        /**
         * Installation tasks ran on admin_init callback.
         */
        public function install()
        {
        }
        /**
         * Modifies default page content replacing it with classic shortcode block.
         * We check for shortcode as default because after WooCommerce 8.3, block based checkout is used by default.
         * This only runs on Tools > Create Pages as the filter is not applied on WooCommerce plugin activation.
         *
         * @param array $pages Default pages.
         * @return array
         */
        public function create_pages($pages)
        {
        }
        /**
         * Set up the database tables which the plugin needs to function.
         */
        public function maybe_create_tables()
        {
        }
        /**
         * Create database table, if it doesn't already exist.
         *
         * Based on admin/install-helper.php maybe_create_table function.
         *
         * @param string $table_name Database table name.
         * @param string $create_sql Create database table SQL.
         * @return bool False on error, true if already exists or success.
         */
        protected function maybe_create_table($table_name, $create_sql)
        {
        }
        /**
         * Add a notice if table creation fails.
         *
         * @param string $table_name Name of the missing table.
         */
        protected function add_create_table_notice($table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Integrations {
    /**
     * Integration.Interface
     *
     * Integrations must use this interface when registering themselves with blocks,
     */
    interface IntegrationInterface
    {
        /**
         * The name of the integration.
         *
         * @return string
         */
        public function get_name();
        /**
         * When called invokes any initialization/setup for the integration.
         */
        public function initialize();
        /**
         * Returns an array of script handles to enqueue in the frontend context.
         *
         * @return string[]
         */
        public function get_script_handles();
        /**
         * Returns an array of script handles to enqueue in the editor context.
         *
         * @return string[]
         */
        public function get_editor_script_handles();
        /**
         * An array of key, value pairs of data made available to the block on the client side.
         *
         * @return array
         */
        public function get_script_data();
    }
    /**
     * Class used for tracking registered integrations with various Block types.
     */
    class IntegrationRegistry
    {
        /**
         * Integration identifier is used to construct hook names and is given when the integration registry is initialized.
         *
         * @var string
         */
        protected $registry_identifier = '';
        /**
         * Registered integrations, as `$name => $instance` pairs.
         *
         * @var IntegrationInterface[]
         */
        protected $registered_integrations = [];
        /**
         * Initializes all registered integrations.
         *
         * Integration identifier is used to construct hook names and is given when the integration registry is initialized.
         *
         * @param string $registry_identifier Identifier for this registry.
         */
        public function initialize($registry_identifier = '')
        {
        }
        /**
         * Registers an integration.
         *
         * @param IntegrationInterface $integration An instance of IntegrationInterface.
         *
         * @return boolean True means registered successfully.
         */
        public function register(\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface $integration)
        {
        }
        /**
         * Checks if an integration is already registered.
         *
         * @param string $name Integration name.
         * @return bool True if the integration is registered, false otherwise.
         */
        public function is_registered($name)
        {
        }
        /**
         * Un-register an integration.
         *
         * @param string|IntegrationInterface $name Integration name, or alternatively a IntegrationInterface instance.
         * @return boolean|IntegrationInterface Returns the unregistered integration instance if unregistered successfully.
         */
        public function unregister($name)
        {
        }
        /**
         * Retrieves a registered Integration by name.
         *
         * @param string $name Integration name.
         * @return IntegrationInterface|null The registered integration, or null if it is not registered.
         */
        public function get_registered($name)
        {
        }
        /**
         * Retrieves all registered integrations.
         *
         * @return IntegrationInterface[]
         */
        public function get_all_registered()
        {
        }
        /**
         * Gets an array of all registered integration's script handles for the editor.
         *
         * @return string[]
         */
        public function get_all_registered_editor_script_handles()
        {
        }
        /**
         * Gets an array of all registered integration's script handles.
         *
         * @return string[]
         */
        public function get_all_registered_script_handles()
        {
        }
        /**
         * Gets an array of all registered integration's script data.
         *
         * @return array
         */
        public function get_all_registered_script_data()
        {
        }
    }
}
namespace {
    /**
     * Manages the initial state of the Interactivity API store in the server and
     * its serialization so it can be restored in the browser upon hydration.
     *
     * It's a private class, exposed by other functions, like `wc_store`.
     *
     * @access private
     */
    class WC_Interactivity_Store
    {
        /**
         * Store.
         *
         * @var array
         */
        private static $store = array();
        /**
         * Get store data.
         *
         * @return array
         */
        static function get_data()
        {
        }
        /**
         * Merge data.
         *
         * @param array $data The data that will be merged with the exsisting store.
         */
        static function merge_data($data)
        {
        }
        /**
         * Reset the store data.
         */
        static function reset()
        {
        }
        /**
         * Render the store data.
         */
        static function render()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Library class.
     *
     * @deprecated 5.0.0 This class will be removed in a future release. This has been replaced by BlockTypesController.
     * @internal
     */
    class Library
    {
        /**
         * Initialize block library features.
         *
         * @deprecated 5.0.0
         */
        public static function init()
        {
        }
        /**
         * Register custom tables within $wpdb object.
         *
         * @deprecated 5.0.0
         */
        public static function define_tables()
        {
        }
        /**
         * Register blocks, hooking up assets and render functions as needed.
         *
         * @deprecated 5.0.0
         */
        public static function register_blocks()
        {
        }
    }
    /**
     * Takes care of the migrations.
     *
     * @since 2.5.0
     */
    class Migration
    {
        /**
         * DB updates and callbacks that need to be run per version.
         *
         * Please note that these functions are invoked when WooCommerce Blocks is updated from a previous version,
         * but NOT when WooCommerce Blocks is newly installed.
         *
         * @var array
         */
        private $db_upgrades = array('10.3.0' => array('wc_blocks_update_1030_blockified_product_grid_block'), '11.2.0' => array('wc_blocks_update_1120_rename_checkout_template', 'wc_blocks_update_1120_rename_cart_template'));
        /**
         * Runs all the necessary migrations.
         *
         * @var array
         */
        public function run_migrations()
        {
        }
        /**
         * Set a flag to indicate if the blockified Product Grid Block should be rendered by default.
         */
        public static function wc_blocks_update_1030_blockified_product_grid_block()
        {
        }
        /**
         * Rename `checkout` template to `page-checkout`.
         */
        public static function wc_blocks_update_1120_rename_checkout_template()
        {
        }
        /**
         * Rename `cart` template to `page-cart`.
         */
        public static function wc_blocks_update_1120_rename_cart_template()
        {
        }
    }
    /**
     * Contains all the option names used by the plugin.
     */
    class Options
    {
        const WC_BLOCK_VERSION = 'wc_blocks_version';
        const WC_BLOCK_USE_BLOCKIFIED_PRODUCT_GRID_BLOCK_AS_TEMPLATE = 'wc_blocks_use_blockified_product_grid_block_as_template';
    }
    /**
     * Main package class.
     *
     * Returns information about the package and handles init.
     *
     * In the context of this plugin, it handles init and is called from the main
     * plugin file (woocommerce-gutenberg-products-block.php).
     *
     * In the context of WooCommere core, it handles init and is called from
     * WooCommerce's package loader. The main plugin file is _not_ loaded.
     *
     * @since 2.5.0
     */
    class Package
    {
        /**
         * For back compat this is provided. Ideally, you should register your
         * class with Automattic\Woocommerce\Blocks\Container and make Package a
         * dependency.
         *
         * @since 2.5.0
         * @return Package  The Package instance class
         */
        protected static function get_package()
        {
        }
        /**
         * Init the package - load the blocks library and define constants.
         *
         * @since 2.5.0 Handled by new NewPackage.
         */
        public static function init()
        {
        }
        /**
         * Return the version of the package.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Return the path to the package.
         *
         * @return string
         */
        public static function get_path()
        {
        }
        /**
         * Returns an instance of the FeatureGating class.
         *
         * @return FeatureGating
         */
        public static function feature()
        {
        }
        /**
         * Checks if we're executing the code in an experimental build mode.
         *
         * @return boolean
         */
        public static function is_experimental_build()
        {
        }
        /**
         * Checks if we're executing the code in a feature plugin or experimental build mode.
         *
         * @return boolean
         */
        public static function is_feature_plugin_build()
        {
        }
        /**
         * Loads the dependency injection container for woocommerce blocks.
         *
         * @param boolean $reset Used to reset the container to a fresh instance.
         *                       Note: this means all dependencies will be
         *                       reconstructed.
         */
        public static function container($reset = false)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Patterns {
    /**
     * Pattern Images class.
     */
    class PatternUpdater
    {
        /**
         * The patterns content option name.
         */
        const WC_BLOCKS_PATTERNS_CONTENT = 'wc_blocks_patterns_content';
        /**
         * Creates the patterns content for the given vertical.
         *
         * @param Connection      $ai_connection The AI connection.
         * @param string|WP_Error $token The JWT token.
         * @param array|WP_Error  $images The array of images.
         * @param string          $business_description The business description.
         *
         * @return bool|WP_Error
         */
        public function generate_content($ai_connection, $token, $images, $business_description)
        {
        }
        /**
         * Returns the patterns with images.
         *
         * @param array $selected_images The array of images.
         *
         * @return array|WP_Error The patterns with images.
         */
        private function get_patterns_with_images($selected_images)
        {
        }
        /**
         * Returns the patterns with AI generated content.
         *
         * @param Connection      $ai_connection The AI connection.
         * @param string|WP_Error $token The JWT token.
         * @param array           $patterns The array of patterns.
         * @param string          $business_description The business description.
         *
         * @return array|WP_Error The patterns with AI generated content.
         */
        private function get_patterns_with_content($ai_connection, $token, $patterns, $business_description)
        {
        }
        /**
         * Get the Patterns Dictionary.
         *
         * @return mixed|WP_Error|null
         */
        private function get_patterns_dictionary()
        {
        }
        /**
         * Returns whether the pattern has images.
         *
         * @param array $pattern The array representing the pattern.
         *
         * @return bool True if the pattern has images, false otherwise.
         */
        private function pattern_has_images(array $pattern) : bool
        {
        }
        /**
         * Returns the images for the given pattern.
         *
         * @param array $pattern         The array representing the pattern.
         * @param array $selected_images The array of images.
         *
         * @return array An array containing an array of the images in the first position and their alts in the second.
         */
        private function get_images_for_pattern(array $pattern, array $selected_images) : array
        {
        }
        /**
         * Returns the selected image format. Defaults to landscape.
         *
         * @param array $selected_image The selected image to be assigned to the pattern.
         *
         * @return string The selected image format.
         */
        private function get_selected_image_format($selected_image)
        {
        }
    }
    /**
     * Pattern Images Helper class.
     */
    class PatternsHelper
    {
        /**
         * Returns the pattern content.
         *
         * @param string $pattern_slug The pattern slug.
         *
         * @return array The pattern content.
         */
        public static function get_pattern_content(string $pattern_slug)
        {
        }
        /**
         * Returns the pattern images.
         *
         * @param string $pattern_slug The pattern slug.
         *
         * @return array The pattern images.
         */
        public static function get_pattern_images(string $pattern_slug) : array
        {
        }
        /**
         * Returns the image for the given pattern.
         *
         * @param array  $images The array of images.
         * @param int    $index The index of the image to return.
         * @param string $default_image The default image to return.
         *
         * @return string The image.
         */
        public static function get_image_url(array $images, int $index, string $default_image) : string
        {
        }
        /**
         * Get the Patterns Dictionary.
         *
         * @param string|null $pattern_slug The pattern slug.
         *
         * @return mixed|WP_Error|null
         */
        private static function get_patterns_dictionary($pattern_slug = null)
        {
        }
    }
    /**
     * Pattern Images class.
     */
    class ProductUpdater
    {
        /**
         * Generate AI content and assign AI-managed images to Products.
         *
         * @param Connection $ai_connection The AI connection.
         * @param string     $token The JWT token.
         * @param array      $images The array of images.
         * @param string     $business_description The business description.
         *
         * @return bool|WP_Error True if the content was generated successfully, WP_Error otherwise.
         */
        public function generate_content($ai_connection, $token, $images, $business_description)
        {
        }
        /**
         * Update the dummy products with the content from the information list.
         *
         * @param array $dummy_products_to_update The dummy products to update.
         * @param array $products_information_list The products information list.
         */
        public function update_dummy_products($dummy_products_to_update, $products_information_list)
        {
        }
        /**
         * Verify if the dummy product should have its content generated and managed by AI.
         *
         * @param \WC_Product $dummy_product The dummy product.
         *
         * @return bool
         */
        public function should_update_dummy_product($dummy_product) : bool
        {
        }
        /**
         * Creates a new product and assigns the _headstart_post meta to it.
         *
         * @return bool|int
         */
        public function create_new_product()
        {
        }
        /**
         * Return all existing products that have the _headstart_post meta assigned to them.
         *
         * @param string $type The type of products to fetch.
         *
         * @return array
         */
        public function fetch_product_ids($type = 'user_created')
        {
        }
        /**
         * Return the hash for a product based on its name, description and image_id.
         *
         * @param \WC_Product $product The product.
         *
         * @return false|string
         */
        public function get_hash_for_product($product)
        {
        }
        /**
         * Return the hash for a product that had its content AI-generated.
         *
         * @param \WC_Product $product The product.
         *
         * @return false|mixed
         */
        public function get_hash_for_ai_modified_product($product)
        {
        }
        /**
         * Create a hash with the AI-generated content and save it as a meta for the product.
         *
         * @param \WC_Product $product The product.
         *
         * @return bool|int
         */
        public function create_hash_for_ai_modified_product($product)
        {
        }
        /**
         * Update the product content with the AI-generated content.
         *
         * @param \WC_Product $product The product.
         * @param array       $ai_generated_product_content The AI-generated content.
         *
         * @return string|void
         */
        public function update_product_content($product, $ai_generated_product_content)
        {
        }
        /**
         * Assigns the default content for the products.
         *
         * @param array $ai_selected_products_images The images information.
         *
         * @return array[]
         */
        public function assign_ai_selected_images_to_dummy_products_information_list($ai_selected_products_images)
        {
        }
        /**
         * Get the images information.
         *
         * @param array $images The array of images.
         *
         * @return array
         */
        public function get_images_information($images)
        {
        }
        /**
         * Generate the product content.
         *
         * @param Connection $ai_connection The AI connection.
         * @param string     $token The JWT token.
         * @param array      $products_default_content The default content for the products.
         *
         * @return array|int|string|\WP_Error
         */
        public function generate_product_content($ai_connection, $token, $products_default_content)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Payments {
    /**
     *  The Api class provides an interface to payment method registration.
     *
     * @since 2.6.0
     */
    class Api
    {
        /**
         * Reference to the PaymentMethodRegistry instance.
         *
         * @var PaymentMethodRegistry
         */
        private $payment_method_registry;
        /**
         * Reference to the AssetDataRegistry instance.
         *
         * @var AssetDataRegistry
         */
        private $asset_registry;
        /**
         * Constructor
         *
         * @param PaymentMethodRegistry $payment_method_registry An instance of Payment Method Registry.
         * @param AssetDataRegistry     $asset_registry  Used for registering data to pass along to the request.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_registry)
        {
        }
        /**
         * Initialize class features.
         */
        public function init()
        {
        }
        /**
         * Add payment method script handles as script dependencies.
         *
         * @param array  $dependencies Array of script dependencies.
         * @param string $handle Script handle.
         * @return array
         */
        public function add_payment_method_script_dependencies($dependencies, $handle)
        {
        }
        /**
         * Returns true if the payment gateway is enabled.
         *
         * @param object $gateway Payment gateway.
         * @return boolean
         */
        private function is_payment_gateway_enabled($gateway)
        {
        }
        /**
         * Add payment method data to Asset Registry.
         */
        public function add_payment_method_script_data()
        {
        }
        /**
         * Register payment method integrations bundled with blocks.
         *
         * @param PaymentMethodRegistry $payment_method_registry Payment method registry instance.
         */
        public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
        {
        }
        /**
         * Verify all dependencies of registered payment methods have been registered.
         * If not, remove that payment method script from the list of dependencies
         * of Cart and Checkout block scripts so it doesn't break the blocks and show
         * an error in the admin.
         */
        public function verify_payment_methods_dependencies()
        {
        }
    }
    interface PaymentMethodTypeInterface extends \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active();
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the frontend context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles();
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the admin context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles_for_admin();
        /**
         * An array of key, value pairs of data made available to payment methods
         * client side.
         *
         * @return array
         */
        public function get_payment_method_data();
        /**
         * Get array of supported features.
         *
         * @return string[]
         */
        public function get_supported_features();
    }
}
namespace Automattic\WooCommerce\Blocks\Payments\Integrations {
    /**
     * AbstractPaymentMethodType class.
     *
     * @since 2.6.0
     */
    abstract class AbstractPaymentMethodType implements \Automattic\WooCommerce\Blocks\Payments\PaymentMethodTypeInterface
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = '';
        /**
         * Settings from the WP options table
         *
         * @var array
         */
        protected $settings = [];
        /**
         * Get a setting from the settings array if set.
         *
         * @param string $name Setting name.
         * @param mixed  $default Value that is returned if the setting does not exist.
         * @return mixed
         */
        protected function get_setting($name, $default = '')
        {
        }
        /**
         * Returns the name of the payment method.
         */
        public function get_name()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the frontend context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of script handles to enqueue for this payment method in
         * the admin context
         *
         * @return string[]
         */
        public function get_payment_method_script_handles_for_admin()
        {
        }
        /**
         * Returns an array of supported features.
         *
         * @return string[]
         */
        public function get_supported_features()
        {
        }
        /**
         * An array of key, value pairs of data made available to payment methods
         * client side.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Returns an array of script handles to enqueue in the frontend context.
         *
         * Alias of get_payment_method_script_handles. Defined by IntegrationInterface.
         *
         * @return string[]
         */
        public function get_script_handles()
        {
        }
        /**
         * Returns an array of script handles to enqueue in the admin context.
         *
         * Alias of get_payment_method_script_handles_for_admin. Defined by IntegrationInterface.
         *
         * @return string[]
         */
        public function get_editor_script_handles()
        {
        }
        /**
         * An array of key, value pairs of data made available to the block on the client side.
         *
         * Alias of get_payment_method_data. Defined by IntegrationInterface.
         *
         * @return array
         */
        public function get_script_data()
        {
        }
    }
    /**
     * Bank Transfer (BACS) payment method integration
     *
     * @since 3.0.0
     */
    final class BankTransfer extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name/id/slug (matches id in WC_Gateway_BACS in core).
         *
         * @var string
         */
        protected $name = 'bacs';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Cash on Delivery (COD) payment method integration
     *
     * @since 3.0.0
     */
    final class CashOnDelivery extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name/id/slug (matches id in WC_Gateway_COD in core).
         *
         * @var string
         */
        protected $name = 'cod';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Return enable_for_virtual option.
         *
         * @return boolean True if store allows COD payment for orders containing only virtual products.
         */
        private function get_enable_for_virtual()
        {
        }
        /**
         * Return enable_for_methods option.
         *
         * @return array Array of shipping methods (string ids) that allow COD. (If empty, all support COD.)
         */
        private function get_enable_for_methods()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Cheque payment method integration
     *
     * @since 2.6.0
     */
    final class Cheque extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'cheque';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * PayPal Standard payment method integration
     *
     * @since 2.6.0
     */
    final class PayPal extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'paypal';
        /**
         * An instance of the Asset Api
         *
         * @var Api
         */
        private $asset_api;
        /**
         * Constructor
         *
         * @param Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Returns an array of supported features.
         *
         * @return string[]
         */
        public function get_supported_features()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Payments {
    /**
     * Class used for interacting with payment method types.
     *
     * @since 2.6.0
     */
    final class PaymentMethodRegistry extends \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry
    {
        /**
         * Integration identifier is used to construct hook names and is given when the integration registry is initialized.
         *
         * @var string
         */
        protected $registry_identifier = 'payment_method_type';
        /**
         * Retrieves all registered payment methods that are also active.
         *
         * @return PaymentMethodTypeInterface[]
         */
        public function get_all_active_registered()
        {
        }
        /**
         * Gets an array of all registered payment method script handles, but only for active payment methods.
         *
         * @return string[]
         */
        public function get_all_active_payment_method_script_dependencies()
        {
        }
        /**
         * Gets an array of all registered payment method script data, but only for active payment methods.
         *
         * @return array
         */
        public function get_all_registered_script_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Registry {
    /**
     * An abstract class for dependency types.
     *
     * Dependency types are instances of a dependency used by the
     * Dependency Injection Container for storing dependencies to invoke as they
     * are needed.
     *
     * @since 2.5.0
     */
    abstract class AbstractDependencyType
    {
        /**
         * Holds a callable or value provided for this type.
         *
         * @var mixed
         */
        private $callable_or_value;
        /**
         * Constructor
         *
         * @param mixed $callable_or_value  A callable or value for the dependency
         *                                  type instance.
         */
        public function __construct($callable_or_value)
        {
        }
        /**
         * Resolver for the internal dependency value.
         *
         * @param Container $container  The Dependency Injection Container.
         *
         * @return mixed
         */
        protected function resolve_value(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
        /**
         * Retrieves the value stored internally for this DependencyType
         *
         * @param Container $container  The Dependency Injection Container.
         *
         * @return void
         */
        public abstract function get(\Automattic\WooCommerce\Blocks\Registry\Container $container);
    }
    /**
     * A simple Dependency Injection Container
     *
     * This is used to manage dependencies used throughout the plugin.
     *
     * @since 2.5.0
     */
    class Container
    {
        /**
         * A map of Dependency Type objects used to resolve dependencies.
         *
         * @var AbstractDependencyType[]
         */
        private $registry = [];
        /**
         * Public api for adding a factory to the container.
         *
         * Factory dependencies will have the instantiation callback invoked
         * every time the dependency is requested.
         *
         * Typical Usage:
         *
         * ```
         * $container->register( MyClass::class, $container->factory( $mycallback ) );
         * ```
         *
         * @param Closure $instantiation_callback  This will be invoked when the
         *                                         dependency is required.  It will
         *                                         receive an instance of this
         *                                         container so the callback can
         *                                         retrieve dependencies from the
         *                                         container.
         *
         * @return FactoryType  An instance of the FactoryType dependency.
         */
        public function factory(\Closure $instantiation_callback)
        {
        }
        /**
         * Interface for registering a new dependency with the container.
         *
         * By default, the $value will be added as a shared dependency.  This means
         * that it will be a single instance shared among any other classes having
         * that dependency.
         *
         * If you want a new instance every time it's required, then wrap the value
         * in a call to the factory method (@see Container::factory for example)
         *
         * Note: Currently if the provided id already is registered in the container,
         * the provided value is ignored.
         *
         * @param string $id    A unique string identifier for the provided value.
         *                      Typically it's the fully qualified name for the
         *                      dependency.
         * @param mixed  $value The value for the dependency. Typically, this is a
         *                      closure that will create the class instance needed.
         */
        public function register($id, $value)
        {
        }
        /**
         * Interface for retrieving the dependency stored in the container for the
         * given identifier.
         *
         * @param string $id  The identifier for the dependency being retrieved.
         * @throws Exception  If there is no dependency for the given identifier in
         *                    the container.
         *
         * @return mixed  Typically a class instance.
         */
        public function get($id)
        {
        }
    }
    /**
     * Definition for the FactoryType dependency type.
     *
     * @since 2.5.0
     */
    class FactoryType extends \Automattic\WooCommerce\Blocks\Registry\AbstractDependencyType
    {
        /**
         * Invokes and returns the value from the stored internal callback.
         *
         * @param Container $container  An instance of the dependency injection
         *                              container.
         *
         * @return mixed
         */
        public function get(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
    }
    /**
     * A definition for the SharedType dependency type.
     *
     * @since 2.5.0
     */
    class SharedType extends \Automattic\WooCommerce\Blocks\Registry\AbstractDependencyType
    {
        /**
         * Holds a cached instance of the value stored (or returned) internally.
         *
         * @var mixed
         */
        private $shared_instance;
        /**
         * Returns the internal stored and shared value after initial generation.
         *
         * @param Container $container An instance of the dependency injection
         *                             container.
         *
         * @return mixed
         */
        public function get(\Automattic\WooCommerce\Blocks\Registry\Container $container)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Shipping {
    /**
     * Local Pickup Shipping Method.
     */
    class PickupLocation extends \WC_Shipping_Method
    {
        /**
         * Pickup locations.
         *
         * @var array
         */
        protected $pickup_locations = [];
        /**
         * Cost
         *
         * @var string
         */
        protected $cost = '';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Init function.
         */
        public function init()
        {
        }
        /**
         * Checks if a given address is complete.
         *
         * @param array $address Address.
         * @return bool
         */
        protected function has_valid_pickup_location($address)
        {
        }
        /**
         * Calculate shipping.
         *
         * @param array $package Package information.
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * See if the method is available.
         *
         * @param array $package Package information.
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Translates meta data for the shipping method.
         *
         * @param string $label Meta label.
         * @param string $name Meta key.
         * @param mixed  $product Product if applicable.
         * @return string
         */
        public function translate_meta_data($label, $name, $product)
        {
        }
        /**
         * Admin options screen.
         *
         * See also WC_Shipping_Method::admin_options().
         */
        public function admin_options()
        {
        }
    }
    /**
     * ShippingController class.
     *
     * @internal
     */
    class ShippingController
    {
        /**
         * Instance of the asset API.
         *
         * @var AssetApi
         */
        protected $asset_api;
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Whether local pickup is enabled.
         *
         * @var bool
         */
        private $local_pickup_enabled;
        /**
         * Constructor.
         *
         * @param AssetApi          $asset_api Instance of the asset API.
         * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
        {
        }
        /**
         * Initialization method.
         */
        public function init()
        {
        }
        /**
         * Prevent changes in the selected shipping method when new rates are added or removed.
         *
         * If the chosen method exists within package rates, it is returned to maintain the selection.
         * Otherwise, the default rate is returned.
         *
         * @param string $default        Default shipping method.
         * @param array  $package_rates  Associative array of available package rates.
         * @param string $chosen_method  Previously chosen shipping method.
         *
         * @return string                Chosen shipping method or default.
         */
        public function prevent_shipping_method_selection_changes($default, $package_rates, $chosen_method)
        {
        }
        /**
         * Overrides the option to force shipping calculations NOT to wait until an address is entered, but only if the
         * Checkout page contains the Checkout Block.
         *
         * @param boolean $value Whether shipping cost calculation requires address to be entered.
         * @return boolean Whether shipping cost calculation should require an address to be entered before calculating.
         */
        public function override_cost_requires_address_option($value)
        {
        }
        /**
         * Force shipping to be enabled if the Checkout block is in use on the Checkout page.
         *
         * @param boolean $enabled Whether shipping is currently enabled.
         * @return boolean Whether shipping should continue to be enabled/disabled.
         */
        public function force_shipping_enabled($enabled)
        {
        }
        /**
         * Inject collection details onto the order received page.
         *
         * @param string    $return Return value.
         * @param \WC_Order $order Order object.
         * @return string
         */
        public function show_local_pickup_details($return, $order)
        {
        }
        /**
         * When using the cart and checkout blocks this method is used to adjust core shipping settings via a filter hook.
         *
         * @param array $settings The default WC shipping settings.
         * @return array|mixed The filtered settings.
         */
        public function remove_shipping_settings($settings)
        {
        }
        /**
         * Register Local Pickup settings for rest api.
         */
        public function register_settings()
        {
        }
        /**
         * Hydrate client settings
         */
        public function hydrate_client_settings()
        {
        }
        /**
         * Load admin scripts.
         */
        public function admin_scripts()
        {
        }
        /**
         * Registers the Local Pickup shipping method used by the Checkout Block.
         */
        public function register_local_pickup()
        {
        }
        /**
         * Declares the Pickup Location shipping method as a Local Pickup method for WooCommerce.
         *
         * @param array $methods Shipping method ids.
         * @return array
         */
        public function register_local_pickup_method($methods)
        {
        }
        /**
         * Hides the shipping address on the order confirmation page when local pickup is selected.
         *
         * @param array $pickup_methods Method ids.
         * @return array
         */
        public function hide_shipping_address_for_local_pickup($pickup_methods)
        {
        }
        /**
         * Everytime we save or update local pickup settings, we flush the shipping
         * transient group.
         *
         * @param array $settings The setting array we're saving.
         * @return array $settings The setting array we're saving.
         */
        public function flush_cache($settings)
        {
        }
        /**
         * Filter the location used for taxes based on the chosen pickup location.
         *
         * @param array $address Location args.
         * @return array
         */
        public function filter_taxable_address($address)
        {
        }
        /**
         * Local Pickup requires all packages to support local pickup. This is because the entire order must be picked up
         * so that all packages get the same tax rates applied during checkout.
         *
         * If a shipping package does not support local pickup (e.g. if disabled by an extension), this filters the option
         * out for all packages. This will in turn disable the "pickup" toggle in Block Checkout.
         *
         * @param array $packages Array of shipping packages.
         * @return array
         */
        public function filter_shipping_packages($packages)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi {
    /**
     * Authentication class.
     */
    class Authentication
    {
        /**
         * Hook into WP lifecycle events. This is hooked by the StoreAPI class on `rest_api_init`.
         */
        public function init()
        {
        }
        /**
         * Add allowed cors headers for store API headers.
         *
         * @param array $allowed_headers Allowed headers.
         * @return array
         */
        public function allowed_cors_headers($allowed_headers)
        {
        }
        /**
         * Add CORS headers to a response object.
         *
         * These checks prevent access to the Store API from non-allowed origins. By default, the WordPress REST API allows
         * access from any origin. Because some Store API routes return PII, we need to add our own CORS headers.
         *
         * Allowed origins can be changed using the WordPress `allowed_http_origins` or `allowed_http_origin` filters if
         * access needs to be granted to other domains.
         *
         * Users of valid Cart Tokens are also allowed access from any origin.
         *
         * @param bool              $value  Whether the request has already been served.
         * @param \WP_HTTP_Response $result  Result to send to the client. Usually a `WP_REST_Response`.
         * @param \WP_REST_Request  $request Request used to generate the response.
         * @return bool
         */
        public function send_cors_headers($value, $result, $request)
        {
        }
        /**
         * Is the request a preflight request? Checks the request method
         *
         * @return boolean
         */
        protected function is_preflight()
        {
        }
        /**
         * Checks if we're using a cart token to access the Store API.
         *
         * @param \WP_REST_Request $request Request object.
         * @return boolean
         */
        protected function has_valid_cart_token(\WP_REST_Request $request)
        {
        }
        /**
         * Gets the secret for the cart token using wp_salt.
         *
         * @return string
         */
        protected function get_cart_token_secret()
        {
        }
        /**
         * The Store API does not require authentication.
         *
         * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
         * @return \WP_Error|null|bool
         */
        public function check_authentication($result)
        {
        }
        /**
         * When the login cookies are set, they are not available until the next page reload. For the Store API, specifically
         * for returning updated nonces, we need this to be available immediately.
         *
         * @param string $logged_in_cookie The value for the logged in cookie.
         */
        public function set_logged_in_cookie($logged_in_cookie)
        {
        }
        /**
         * Applies Rate Limiting to the request, and passes through any errors from other authentication methods used before this one.
         *
         * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
         * @return \WP_Error|null|bool
         */
        protected function apply_rate_limiting($result)
        {
        }
        /**
         * Check if is request to the Store API.
         *
         * @return bool
         */
        protected function is_request_to_store_api()
        {
        }
        /**
         * Get current user IP Address.
         *
         * X_REAL_IP and CLIENT_IP are custom implementations designed to facilitate obtaining a user's ip through proxies, load balancers etc.
         *
         * _FORWARDED_FOR (XFF) request header is a de-facto standard header for identifying the originating IP address of a client connecting to a web server through a proxy server.
         * Note for X_FORWARDED_FOR, Proxy servers can send through this header like this: X-Forwarded-For: client1, proxy1, proxy2.
         * Make sure we always only send through the first IP in the list which should always be the client IP.
         * Documentation at https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-For
         *
         * Forwarded request header contains information that may be added by reverse proxy servers (load balancers, CDNs, and so on).
         * Documentation at https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Forwarded
         * Full RFC at https://datatracker.ietf.org/doc/html/rfc7239
         *
         * @param boolean $proxy_support Enables/disables proxy support.
         *
         * @return string
         */
        protected static function get_ip_address(bool $proxy_support = false)
        {
        }
        /**
         * Uses filter_var() to validate and return ipv4 and ipv6 addresses
         * Will return 0.0.0.0 if the ip is not valid. This is done to group and still rate limit invalid ips.
         *
         * @param string $ip ipv4 or ipv6 ip string.
         *
         * @return string
         */
        protected static function validate_ip($ip)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Exceptions {
    /**
     * InvalidCartException class.
     *
     * @internal This exception is thrown if the cart is in an erroneous state.
     */
    class InvalidCartException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        public $error_code;
        /**
         * Additional error data.
         *
         * @var array
         */
        public $additional_data = [];
        /**
         * All errors to display to the user.
         *
         * @var WP_Error
         */
        public $error;
        /**
         * Setup exception.
         *
         * @param string   $error_code      Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param WP_Error $error           The WP_Error object containing all errors relating to stock availability.
         * @param array    $additional_data Extra data (key value pairs) to expose in the error response.
         */
        public function __construct($error_code, \WP_Error $error, $additional_data = [])
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns the list of messages.
         *
         * @return WP_Error
         */
        public function getError()
        {
        }
        /**
         * Returns additional error data.
         *
         * @return array
         */
        public function getAdditionalData()
        {
        }
    }
    /**
     * InvalidStockLevelsInCartException class.
     *
     * This exception is thrown if any items are out of stock after each product on a draft order has been stock checked.
     */
    class InvalidStockLevelsInCartException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        public $error_code;
        /**
         * Additional error data.
         *
         * @var array
         */
        public $additional_data = [];
        /**
         * All errors to display to the user.
         *
         * @var WP_Error
         */
        public $error;
        /**
         * Setup exception.
         *
         * @param string   $error_code      Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param WP_Error $error           The WP_Error object containing all errors relating to stock availability.
         * @param array    $additional_data Extra data (key value pairs) to expose in the error response.
         */
        public function __construct($error_code, $error, $additional_data = [])
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns the list of messages.
         *
         * @return WP_Error
         */
        public function getError()
        {
        }
        /**
         * Returns additional error data.
         *
         * @return array
         */
        public function getAdditionalData()
        {
        }
    }
    /**
     * StockAvailabilityException class.
     *
     * This exception is thrown when more than one of a product that can only be purchased individually is in a cart.
     */
    class StockAvailabilityException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        public $error_code;
        /**
         * The name of the product that can only be purchased individually.
         *
         * @var string
         */
        public $product_name;
        /**
         * Additional error data.
         *
         * @var array
         */
        public $additional_data = [];
        /**
         * Setup exception.
         *
         * @param string $error_code       Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param string $product_name     The name of the product that can only be purchased individually.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         */
        public function __construct($error_code, $product_name, $additional_data = [])
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns additional error data.
         *
         * @return array
         */
        public function getAdditionalData()
        {
        }
        /**
         * Returns the product name.
         *
         * @return string
         */
        public function getProductName()
        {
        }
    }
    /**
     * NotPurchasableException class.
     *
     * This exception is thrown when an item in the cart is not able to be purchased.
     */
    class NotPurchasableException extends \Automattic\WooCommerce\StoreApi\Exceptions\StockAvailabilityException
    {
    }
    /**
     * OutOfStockException class.
     *
     * This exception is thrown when an item in a draft order is out of stock completely.
     */
    class OutOfStockException extends \Automattic\WooCommerce\StoreApi\Exceptions\StockAvailabilityException
    {
    }
    /**
     * PartialOutOfStockException class.
     *
     * This exception is thrown when an item in a draft order has a quantity greater than what is available in stock.
     */
    class PartialOutOfStockException extends \Automattic\WooCommerce\StoreApi\Exceptions\StockAvailabilityException
    {
    }
    /**
     * RouteException class.
     */
    class RouteException extends \Exception
    {
        /**
         * Sanitized error code.
         *
         * @var string
         */
        public $error_code;
        /**
         * Additional error data.
         *
         * @var array
         */
        public $additional_data = [];
        /**
         * Setup exception.
         *
         * @param string $error_code       Machine-readable error code, e.g `woocommerce_invalid_product_id`.
         * @param string $message          User-friendly translated error message, e.g. 'Product ID is invalid'.
         * @param int    $http_status_code Proper HTTP status code to respond with, e.g. 400.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         */
        public function __construct($error_code, $message, $http_status_code = 400, $additional_data = [])
        {
        }
        /**
         * Returns the error code.
         *
         * @return string
         */
        public function getErrorCode()
        {
        }
        /**
         * Returns additional error data.
         *
         * @return array
         */
        public function getAdditionalData()
        {
        }
    }
    /**
     * TooManyInCartException class.
     *
     * This exception is thrown when more than one of a product that can only be purchased individually is in a cart.
     */
    class TooManyInCartException extends \Automattic\WooCommerce\StoreApi\Exceptions\StockAvailabilityException
    {
    }
}
namespace Automattic\WooCommerce\StoreApi {
    /**
     * Formatters class.
     *
     * Allows formatter classes to be registered. Formatters are exposed to extensions via the ExtendSchema class.
     */
    class Formatters
    {
        /**
         * Holds an array of formatter class instances.
         *
         * @var array
         */
        private $formatters = [];
        /**
         * Get a new instance of a formatter class.
         *
         * @throws Exception An Exception is thrown if a non-existing formatter is used and the user is admin.
         *
         * @param string $name Name of the formatter.
         * @return FormatterInterface Formatter class instance.
         */
        public function __get($name)
        {
        }
        /**
         * Register a formatter class for usage.
         *
         * @param string $name Name of the formatter.
         * @param string $class A formatter class name.
         */
        public function register($name, $class)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Formatters {
    /**
     * FormatterInterface.
     */
    interface FormatterInterface
    {
        /**
         * Format a given value and return the result.
         *
         * @param mixed $value Value to format.
         * @param array $options Options that influence the formatting.
         * @return mixed
         */
        public function format($value, array $options = []);
    }
    /**
     * Currency Formatter.
     *
     * Formats an array of monetary values by inserting currency data.
     */
    class CurrencyFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
    {
        /**
         * Format a given value and return the result.
         *
         * @param array $value Value to format.
         * @param array $options Options that influence the formatting.
         * @return array
         */
        public function format($value, array $options = [])
        {
        }
    }
    /**
     * Default Formatter.
     */
    class DefaultFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
    {
        /**
         * Format a given value and return the result.
         *
         * @param mixed $value Value to format.
         * @param array $options Options that influence the formatting.
         * @return mixed
         */
        public function format($value, array $options = [])
        {
        }
    }
    /**
     * Html Formatter.
     *
     * Formats HTML in API responses.
     *
     * @internal This API is used internally by Blocks--it is still in flux and may be subject to revisions.
     */
    class HtmlFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
    {
        /**
         * Format a given value and return the result.
         *
         * The wptexturize, convert_chars, and trim functions are also used in the `the_title` filter.
         * The function wp_kses_post removes disallowed HTML tags.
         *
         * @param string|array $value Value to format.
         * @param array        $options Options that influence the formatting.
         * @return string
         */
        public function format($value, array $options = [])
        {
        }
    }
    /**
     * Money Formatter.
     *
     * Formats monetary values using store settings.
     */
    class MoneyFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
    {
        /**
         * Format a given value and return the result.
         *
         * @param mixed $value Value to format.
         * @param array $options Options that influence the formatting.
         * @return mixed
         */
        public function format($value, array $options = [])
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi {
    /**
     * Legacy class.
     */
    class Legacy
    {
        /**
         * Hook into WP lifecycle events.
         */
        public function init()
        {
        }
        /**
         * Attempt to process a payment for the checkout API if no payment methods support the
         * woocommerce_rest_checkout_process_payment_with_context action.
         *
         * @param PaymentContext $context Holds context for the payment.
         * @param PaymentResult  $result  Result of the payment.
         */
        public function process_legacy_payment(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Payments {
    /**
     * PaymentContext class.
     */
    class PaymentContext
    {
        /**
         * Payment method ID.
         *
         * @var string
         */
        protected $payment_method = '';
        /**
         * Order object for the order being paid.
         *
         * @var \WC_Order
         */
        protected $order;
        /**
         * Holds data to send to the payment gateway to support payment.
         *
         * @var array Key value pairs.
         */
        protected $payment_data = [];
        /**
         * Magic getter for protected properties.
         *
         * @param string $name Property name.
         */
        public function __get($name)
        {
        }
        /**
         * Set the chosen payment method ID context.
         *
         * @param string $payment_method Payment method ID.
         */
        public function set_payment_method($payment_method)
        {
        }
        /**
         * Retrieve the payment method instance for the current set payment method.
         *
         * @return {\WC_Payment_Gateway|null} An instance of the payment gateway if it exists.
         */
        public function get_payment_method_instance()
        {
        }
        /**
         * Set the order context.
         *
         * @param \WC_Order $order Order object.
         */
        public function set_order(\WC_Order $order)
        {
        }
        /**
         * Set payment data context.
         *
         * @param array $payment_data Array of key value pairs of data.
         */
        public function set_payment_data($payment_data = [])
        {
        }
    }
    /**
     * PaymentResult class.
     */
    class PaymentResult
    {
        /**
         * List of valid payment statuses.
         *
         * @var array
         */
        protected $valid_statuses = ['success', 'failure', 'pending', 'error'];
        /**
         * Current payment status.
         *
         * @var string
         */
        protected $status = '';
        /**
         * Array of details about the payment.
         *
         * @var string
         */
        protected $payment_details = [];
        /**
         * Redirect URL for checkout.
         *
         * @var string
         */
        protected $redirect_url = '';
        /**
         * Constructor.
         *
         * @param string $status Sets the payment status for the result.
         */
        public function __construct($status = '')
        {
        }
        /**
         * Magic getter for protected properties.
         *
         * @param string $name Property name.
         */
        public function __get($name)
        {
        }
        /**
         * Set payment status.
         *
         * @throws \Exception When an invalid status is provided.
         *
         * @param string $payment_status Status to set.
         */
        public function set_status($payment_status)
        {
        }
        /**
         * Set payment details.
         *
         * @param array $payment_details Array of key value pairs of data.
         */
        public function set_payment_details($payment_details = [])
        {
        }
        /**
         * Set redirect URL.
         *
         * @param array $redirect_url URL to redirect the customer to after checkout.
         */
        public function set_redirect_url($redirect_url = [])
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Routes {
    /**
     * RouteInterface.
     */
    interface RouteInterface
    {
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path();
        /**
         * Get arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args();
    }
}
namespace Automattic\WooCommerce\StoreApi\Routes\V1 {
    /**
     * AbstractRoute class.
     */
    abstract class AbstractRoute implements \Automattic\WooCommerce\StoreApi\Routes\RouteInterface
    {
        /**
         * Schema class instance.
         *
         * @var AbstractSchema
         */
        protected $schema;
        /**
         * Route namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store/v1';
        /**
         * Schema Controller instance.
         *
         * @var SchemaController
         */
        protected $schema_controller;
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = '';
        /**
         * The routes schema version.
         *
         * @var integer
         */
        const SCHEMA_VERSION = 1;
        /**
         * Constructor.
         *
         * @param SchemaController $schema_controller Schema Controller instance.
         * @param AbstractSchema   $schema Schema class for this route.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\v1\AbstractSchema $schema)
        {
        }
        /**
         * Get the namespace for this route.
         *
         * @return string
         */
        public function get_namespace()
        {
        }
        /**
         * Set the namespace for this route.
         *
         * @param string $namespace Given namespace.
         */
        public function set_namespace($namespace)
        {
        }
        /**
         * Get item schema properties.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_response_by_request_method(\WP_REST_Request $request)
        {
        }
        /**
         * Converts an error to a response object. Based on \WP_REST_Server.
         *
         * @param \WP_Error $error WP_Error instance.
         * @return \WP_REST_Response List of associative arrays with code and message keys.
         */
        protected function error_to_response($error)
        {
        }
        /**
         * Get route response for GET requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for POST requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for PUT requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_update_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response for DELETE requests.
         *
         * When implemented, should return a \WP_REST_Response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Get route response when something went wrong and the supplied error is a WP_Error. This currently only happens
         * when an item in the cart is out of stock, partially out of stock, can only be bought individually, or when the
         * item is not purchasable.
         *
         * @param WP_Error $error_object The WP_Error object containing the error.
         * @param int      $http_status_code HTTP status. Defaults to 500.
         * @param array    $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return WP_Error WP Error object.
         */
        protected function get_route_error_response_from_object($error_object, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Prepare a single item for response.
         *
         * @param mixed            $item Item to format to schema.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, \WP_REST_Request $request)
        {
        }
        /**
         * Retrieves the context param.
         *
         * Ensures consistent descriptions between endpoints, and populates enum from schema.
         *
         * @param array $args Optional. Additional arguments for context parameter. Default empty array.
         * @return array Context parameter details.
         */
        protected function get_context_param($args = array())
        {
        }
        /**
         * Prepares a response for insertion into a collection.
         *
         * @param \WP_REST_Response $response Response object.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        protected function prepare_response_for_collection(\WP_REST_Response $response)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param mixed            $item Item to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($item, $request)
        {
        }
        /**
         * Retrieves the query params for the collections.
         *
         * @return array Query parameters for the collection.
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Utilities {
    /**
     * DraftOrderTrait
     *
     * Shared functionality for getting and setting draft order IDs from session.
     */
    trait DraftOrderTrait
    {
        /**
         * Gets draft order data from the customer session.
         *
         * @return integer
         */
        protected function get_draft_order_id()
        {
        }
        /**
         * Updates draft order data in the customer session.
         *
         * @param integer $order_id Draft order ID.
         */
        protected function set_draft_order_id($order_id)
        {
        }
        /**
         * Uses the draft order ID to return an order object, if valid.
         *
         * @return \WC_Order|null;
         */
        protected function get_draft_order()
        {
        }
        /**
         * Whether the passed argument is a draft order or an order that is
         * pending/failed and the cart hasn't changed.
         *
         * @param \WC_Order $order_object Order object to check.
         * @return boolean Whether the order is valid as a draft order.
         */
        protected function is_valid_draft_order($order_object)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Routes\V1 {
    /**
     * Abstract Cart Route
     */
    abstract class AbstractCartRoute extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        /**
         * The route's schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart';
        /**
         * Schema class instance.
         *
         * @var CartSchema
         */
        protected $schema;
        /**
         * Schema class for the cart.
         *
         * @var CartSchema
         */
        protected $cart_schema;
        /**
         * Schema class for the cart item.
         *
         * @var CartItemSchema
         */
        protected $cart_item_schema;
        /**
         * Cart controller class instance.
         *
         * @var CartController
         */
        protected $cart_controller;
        /**
         * Order controller class instance.
         *
         * @var OrderController
         */
        protected $order_controller;
        /**
         * Constructor.
         *
         * @param SchemaController $schema_controller Schema Controller instance.
         * @param AbstractSchema   $schema Schema class for this route.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema $schema)
        {
        }
        /**
         * Are we updating data or getting data?
         *
         * @param \WP_REST_Request $request Request object.
         * @return boolean
         */
        protected function is_update_request(\WP_REST_Request $request)
        {
        }
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * Add nonce headers to a response object.
         *
         * @param \WP_REST_Response $response The response object.
         *
         * @return \WP_REST_Response
         */
        protected function add_response_headers(\WP_REST_Response $response)
        {
        }
        /**
         * Load the cart session before handling responses.
         *
         * @param \WP_REST_Request $request Request object.
         */
        protected function load_cart_session(\WP_REST_Request $request)
        {
        }
        /**
         * Generates a cart token for the response headers.
         *
         * Current namespace is used as the token Issuer.
         * *
         *
         * @return string
         */
        protected function get_cart_token()
        {
        }
        /**
         * Gets the secret for the cart token using wp_salt.
         *
         * @return string
         */
        protected function get_cart_token_secret()
        {
        }
        /**
         * Gets the expiration of the cart token. Defaults to 48h.
         *
         * @return int
         */
        protected function get_cart_token_expiration()
        {
        }
        /**
         * Checks if a nonce is required for the route.
         *
         * @param \WP_REST_Request $request Request.
         *
         * @return bool
         */
        protected function requires_nonce(\WP_REST_Request $request)
        {
        }
        /**
         * Triggered after an update to cart data. Re-calculates totals and updates draft orders (if they already exist) to
         * keep all data in sync.
         *
         * @param \WP_REST_Request $request Request object.
         */
        protected function cart_updated(\WP_REST_Request $request)
        {
        }
        /**
         * For non-GET endpoints, require and validate a nonce to prevent CSRF attacks.
         *
         * Nonces will mismatch if the logged in session cookie is different! If using a client to test, set this cookie
         * to match the logged in cookie in your browser.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_Error|boolean
         */
        protected function check_nonce(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data Extra data (key value pairs) to expose in the error response.
         *
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
    }
    /**
     * AbstractTermsRoute class.
     */
    abstract class AbstractTermsRoute extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'term';
        /**
         * Get the query params for collections of attributes.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get terms matching passed in args.
         *
         * @param string           $taxonomy Taxonomy to get terms from.
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        protected function get_terms_response($taxonomy, $request)
        {
        }
        /**
         * Get count of terms for current query.
         *
         * @param string $taxonomy Taxonomy to get terms from.
         * @param array  $args Array of args to pass to wp_count_terms.
         * @return int
         */
        protected function get_term_count($taxonomy, $args)
        {
        }
    }
    /**
     * Batch Route class.
     */
    class Batch extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute implements \Automattic\WooCommerce\StoreApi\Routes\RouteInterface
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'batch';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'batch';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get the route response.
         *
         * @see WP_REST_Server::serve_batch_request_v1
         * https://developer.wordpress.org/reference/classes/wp_rest_server/serve_batch_request_v1/
         *
         * @throws RouteException On error.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Cart class.
     */
    class Cart extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartAddItem class.
     */
    class CartAddItem extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-add-item';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartApplyCoupon class.
     */
    class CartApplyCoupon extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-apply-coupon';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartCoupons class.
     */
    class CartCoupons extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-coupons';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart-coupon';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of cart coupons.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Add a coupon to the cart and return the result.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Deletes all coupons in the cart.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string           $coupon_code Coupon code.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($coupon_code, $request)
        {
        }
    }
    /**
     * CartCouponsByCode class.
     */
    class CartCouponsByCode extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-coupons-by-code';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart-coupon';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single cart coupon.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Delete a single cart coupon.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartExtensions class.
     */
    class CartExtensions extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-extensions';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart-extensions';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartItems class.
     */
    class CartItems extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-items';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart-item';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of cart items.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Creates one item from the collection.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Deletes all items in the cart.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array            $cart_item Object to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($cart_item, $request)
        {
        }
    }
    /**
     * CartItemsByKey class.
     */
    class CartItemsByKey extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-items-by-key';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'cart-item';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single cart items.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Update a single cart item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_update_response(\WP_REST_Request $request)
        {
        }
        /**
         * Delete a single cart item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_delete_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array            $cart_item Object to prepare.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($cart_item, $request)
        {
        }
    }
    /**
     * CartRemoveCoupon class.
     */
    class CartRemoveCoupon extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-remove-coupon';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartRemoveItem class.
     */
    class CartRemoveItem extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-remove-item';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * If there is a draft order, releases stock.
         *
         * @return void
         */
        protected function maybe_release_stock()
        {
        }
    }
    /**
     * CartSelectShippingRate class.
     */
    class CartSelectShippingRate extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-select-shipping-rate';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * CartUpdateCustomer class.
     *
     * Updates the customer billing and shipping addresses, recalculates the cart totals, and returns an updated cart.
     */
    class CartUpdateCustomer extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-update-customer';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Validate address params now they are populated.
         *
         * @param \WP_REST_Request $request Request object.
         * @param array            $billing Billing address.
         * @param array            $shipping Shipping address.
         * @return \WP_Error|true
         */
        protected function validate_address_params($request, $billing, $shipping)
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get full customer billing address.
         *
         * @param \WC_Customer $customer Customer object.
         * @return array
         */
        protected function get_customer_billing_address(\WC_Customer $customer)
        {
        }
        /**
         * Get full customer shipping address.
         *
         * @param \WC_Customer $customer Customer object.
         * @return array
         */
        protected function get_customer_shipping_address(\WC_Customer $customer)
        {
        }
    }
    /**
     * CartUpdateItem class.
     */
    class CartUpdateItem extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-update-item';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         * .
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Utilities {
    /**
     * CheckoutTrait
     *
     * Shared functionality for checkout route.
     */
    trait CheckoutTrait
    {
        /**
         * Prepare a single item for response. Handles setting the status based on the payment result.
         *
         * @param mixed            $item Item to format to schema.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, \WP_REST_Request $request)
        {
        }
        /**
         * For orders which do not require payment, just update status.
         *
         * @param \WP_REST_Request $request Request object.
         * @param PaymentResult    $payment_result Payment result object.
         */
        private function process_without_payment(\WP_REST_Request $request, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result)
        {
        }
        /**
         * Fires an action hook instructing active payment gateways to process the payment for an order and provide a result.
         *
         * @throws RouteException On error.
         *
         * @param \WP_REST_Request $request Request object.
         * @param PaymentResult    $payment_result Payment result object.
         */
        private function process_payment(\WP_REST_Request $request, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result)
        {
        }
        /**
         * Gets the chosen payment method ID from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return string
         */
        private function get_request_payment_method_id(\WP_REST_Request $request)
        {
        }
        /**
         * Gets and formats payment request data.
         *
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        private function get_request_payment_data(\WP_REST_Request $request)
        {
        }
        /**
         * Update the current order using the posted values from the request.
         *
         * @param \WP_REST_Request $request Full details about the request.
         */
        private function update_order_from_request(\WP_REST_Request $request)
        {
        }
        /**
         * Gets the chosen payment method title from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return string
         */
        private function get_request_payment_method_title(\WP_REST_Request $request)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Routes\V1 {
    /**
     * Checkout class.
     */
    class Checkout extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        use \Automattic\WooCommerce\StoreApi\Utilities\CheckoutTrait;
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'checkout';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'checkout';
        /**
         * Holds the current order being processed.
         *
         * @var \WC_Order
         */
        private $order = null;
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Checks if a nonce is required for the route.
         *
         * @param \WP_REST_Request $request Request.
         * @return bool
         */
        protected function requires_nonce(\WP_REST_Request $request)
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get the route response based on the type of request.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_response(\WP_REST_Request $request)
        {
        }
        /**
         * Convert the cart into a new draft order, or update an existing draft order, and return an updated cart response.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Process an order.
         *
         * 1. Obtain Draft Order
         * 2. Process Request
         * 3. Process Customer
         * 4. Validate Order
         * 5. Process Payment
         *
         * @throws RouteException On error.
         * @throws InvalidStockLevelsInCartException On error.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 500.
         * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param \WP_Error $error_object User facing error message.
         * @param int       $http_status_code HTTP status. Defaults to 500.
         * @param array     $additional_data  Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_response_from_object($error_object, $http_status_code = 500, $additional_data = [])
        {
        }
        /**
         * Adds additional data to the \WP_Error object.
         *
         * @param \WP_Error $error The error object to add the cart to.
         * @param array     $data The data to add to the error object.
         * @param int       $http_status_code The HTTP status code this error should return.
         * @param bool      $include_cart Whether the cart should be included in the error data.
         * @returns \WP_Error The \WP_Error with the cart added.
         */
        private function add_data_to_error_object($error, $data, $http_status_code, bool $include_cart = false)
        {
        }
        /**
         * Create or update a draft order based on the cart.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @throws RouteException On error.
         */
        private function create_or_update_draft_order(\WP_REST_Request $request)
        {
        }
        /**
         * Updates the current customer session using data from the request (e.g. address data).
         *
         * Address session data is synced to the order itself later on by OrderController::update_order_from_cart()
         *
         * @param \WP_REST_Request $request Full details about the request.
         */
        private function update_customer_from_request(\WP_REST_Request $request)
        {
        }
        /**
         * Gets the chosen payment method from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WC_Payment_Gateway|null
         */
        private function get_request_payment_method(\WP_REST_Request $request)
        {
        }
        /**
         * Order processing relating to customer account.
         *
         * Creates a customer account as needed (based on request & store settings) and  updates the order with the new customer ID.
         * Updates the order with user details (e.g. address).
         *
         * @throws RouteException API error object with error details.
         * @param \WP_REST_Request $request Request object.
         */
        private function process_customer(\WP_REST_Request $request)
        {
        }
        /**
         * Check request options and store (shop) config to determine if a user account should be created as part of order
         * processing.
         *
         * @param \WP_REST_Request $request The current request object being handled.
         * @return boolean True if a new user account should be created.
         */
        private function should_create_customer_account(\WP_REST_Request $request)
        {
        }
        /**
         * Create a new account for a customer.
         *
         * The account is created with a generated username. The customer is sent
         * an email notifying them about the account and containing a link to set
         * their (initial) password.
         *
         * Intended as a replacement for wc_create_new_customer in WC core.
         *
         * @throws \Exception If an error is encountered when creating the user account.
         *
         * @param string $user_email The email address to use for the new account.
         * @param string $first_name The first name to use for the new account.
         * @param string $last_name  The last name to use for the new account.
         *
         * @return int User id if successful
         */
        private function create_customer_account($user_email, $first_name, $last_name)
        {
        }
        /**
         * Convert an account creation error to an exception.
         *
         * @param \WP_Error $error An error object.
         * @return \Exception.
         */
        private function map_create_account_error(\WP_Error $error)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Utilities {
    /**
     * OrderAuthorizationTrait
     *
     * Shared functionality for getting order authorization.
     */
    trait OrderAuthorizationTrait
    {
        /**
         * Check if authorized to get the order.
         *
         * @throws RouteException If the order is not found or the order key is invalid.
         *
         * @param \WP_REST_Request $request Request object.
         * @return boolean|WP_Error
         */
        public function is_authorized(\WP_REST_Request $request)
        {
        }
        /**
         * Validate a given billing email against an existing order.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param integer $order_id Order ID.
         * @param string  $billing_email Billing email.
         */
        public function validate_billing_email_matches_order($order_id, $billing_email)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Routes\V1 {
    /**
     * CheckoutOrder class.
     */
    class CheckoutOrder extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\OrderAuthorizationTrait;
        use \Automattic\WooCommerce\StoreApi\Utilities\CheckoutTrait;
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'checkout-order';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'checkout-order';
        /**
         * Holds the current order being processed.
         *
         * @var \WC_Order
         */
        private $order = null;
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Process an order.
         *
         * 1. Process Request
         * 2. Process Customer
         * 3. Validate Order
         * 4. Process Payment
         *
         * @throws RouteException On error.
         * @throws InvalidStockLevelsInCartException On error.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
        /**
         * Updates the current customer session using data from the request (e.g. address data).
         *
         * Address session data is synced to the order itself later on by OrderController::update_order_from_cart()
         *
         * @param \WP_REST_Request $request Full details about the request.
         */
        private function update_billing_address(\WP_REST_Request $request)
        {
        }
        /**
         * Gets the chosen payment method from the request.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WC_Payment_Gateway|null
         */
        private function get_request_payment_method(\WP_REST_Request $request)
        {
        }
        /**
         * Updates the order with user details (e.g. address).
         *
         * @throws RouteException API error object with error details.
         * @param \WP_REST_Request $request Request object.
         */
        private function process_customer(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Order class.
     */
    class Order extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\OrderAuthorizationTrait;
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'order';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'order';
        /**
         * Order controller class instance.
         *
         * @var OrderController
         */
        protected $order_controller;
        /**
         * Constructor.
         *
         * @param SchemaController $schema_controller Schema Controller instance.
         * @param AbstractSchema   $schema Schema class for this route.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\v1\AbstractSchema $schema)
        {
        }
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Patterns class.
     */
    class Patterns extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'patterns';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'patterns';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Permission callback.
         *
         * @throws RouteException If the user is not allowed to make this request.
         *
         * @return true|\WP_Error
         */
        public function is_authorized()
        {
        }
        /**
         * Ensure the content and images in patterns are powered by AI.
         *
         * @param  \WP_REST_Request $request Request object.
         *
         * @return bool|string|\WP_Error|\WP_REST_Response
         */
        protected function get_route_post_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributeTerms class.
     */
    class ProductAttributeTerms extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractTermsRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-attribute-terms';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get the query params for collections of attributes.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get a collection of attribute terms.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributes class.
     */
    class ProductAttributes extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-attributes';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-attribute';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of attributes.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductAttributesById class.
     */
    class ProductAttributesById extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-attributes-by-id';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-attribute';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCategories class.
     */
    class ProductCategories extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractTermsRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-categories';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-category';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of terms.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCategoriesById class.
     */
    class ProductCategoriesById extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-categories-by-id';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-category';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductCollectionData route.
     * Get aggregate data from a collection of products.
     *
     * Supports the same parameters as /products, but returns a different response.
     */
    class ProductCollectionData extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-collection-data';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-collection-data';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductReviews class.
     */
    class ProductReviews extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-reviews';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product-review';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of reviews.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductTags class.
     */
    class ProductTags extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractTermsRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-tags';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of terms.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Products class.
     */
    class Products extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'products';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \WC_Product      $item Product object.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function prepare_links($item, $request)
        {
        }
        /**
         * Get the query params for collections of products.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * ProductsById class.
     */
    class ProductsById extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'products-by-id';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ProductsBySlug class.
     */
    class ProductsBySlug extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
    {
        /**
         * The route identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'products-by-slug';
        /**
         * The routes schema.
         *
         * @var string
         */
        const SCHEMA_TYPE = 'product';
        /**
         * Get the path of this REST route.
         *
         * @return string
         */
        public function get_path()
        {
        }
        /**
         * Get method arguments for this REST route.
         *
         * @return array An array of endpoints.
         */
        public function get_args()
        {
        }
        /**
         * Get a single item.
         *
         * @throws RouteException On error.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        protected function get_route_response(\WP_REST_Request $request)
        {
        }
        /**
         * Get a product  by slug.
         *
         * @param string $slug The slug of the product.
         */
        public function get_product_by_slug($slug)
        {
        }
        /**
         * Get a product variation by slug.
         *
         * @param string $slug The slug of the product variation.
         */
        private function get_product_variation_by_slug($slug)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi {
    /**
     * RoutesController class.
     */
    class RoutesController
    {
        /**
         * Stores schema_controller.
         *
         * @var SchemaController
         */
        protected $schema_controller;
        /**
         * Stores routes.
         *
         * @var array
         */
        protected $routes = [];
        /**
         * Constructor.
         *
         * @param SchemaController $schema_controller Schema controller class passed to each route.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller)
        {
        }
        /**
         * Register all Store API routes. This includes routes under specific version namespaces.
         */
        public function register_all_routes()
        {
        }
        /**
         * Get a route class instance.
         *
         * Each route class is instantized with the SchemaController instance, and its main Schema Type.
         *
         * @throws \Exception If the schema does not exist.
         * @param string $name Name of schema.
         * @param string $version API Version being requested.
         * @return AbstractRoute
         */
        public function get($name, $version = 'v1')
        {
        }
        /**
         * Register defined list of routes with WordPress.
         *
         * @param string $version API Version being registered..
         * @param string $namespace Overrides the default route namespace.
         */
        protected function register_routes($version = 'v1', $namespace = 'wc/store/v1')
        {
        }
    }
    /**
     * SchemaController class.
     */
    class SchemaController
    {
        /**
         * Stores schema class instances.
         *
         * @var Schemas\V1\AbstractSchema[]
         */
        protected $schemas = [];
        /**
         * Stores Rest Extending instance
         *
         * @var ExtendSchema
         */
        private $extend;
        /**
         * Constructor.
         *
         * @param ExtendSchema $extend Rest Extending instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend)
        {
        }
        /**
         * Get a schema class instance.
         *
         * @throws \Exception If the schema does not exist.
         *
         * @param string $name Name of schema.
         * @param int    $version API Version being requested.
         * @return Schemas\V1\AbstractSchema A new instance of the requested schema.
         */
        public function get($name, $version = 1)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Schemas {
    /**
     * Provides utility functions to extend Store API schemas.
     *
     * Note there are also helpers that map to these methods.
     *
     * @see woocommerce_store_api_register_endpoint_data()
     * @see woocommerce_store_api_register_update_callback()
     * @see woocommerce_store_api_register_payment_requirements()
     * @see woocommerce_store_api_get_formatter()
     */
    final class ExtendSchema
    {
        /**
         * List of Store API schema that is allowed to be extended by extensions.
         *
         * @var string[]
         */
        private $endpoints = [\Automattic\WooCommerce\StoreApi\Schemas\V1\CartItemSchema::IDENTIFIER, \Automattic\WooCommerce\StoreApi\Schemas\V1\CartSchema::IDENTIFIER, \Automattic\WooCommerce\StoreApi\Schemas\V1\CheckoutSchema::IDENTIFIER, \Automattic\WooCommerce\StoreApi\Schemas\V1\ProductSchema::IDENTIFIER];
        /**
         * Holds the formatters class instance.
         *
         * @var Formatters
         */
        private $formatters;
        /**
         * Data to be extended
         *
         * @var array
         */
        private $extend_data = [];
        /**
         * Data to be extended
         *
         * @var array
         */
        private $callback_methods = [];
        /**
         * Array of payment requirements
         *
         * @var array
         */
        private $payment_requirements = [];
        /**
         * Constructor
         *
         * @param Formatters $formatters An instance of the formatters class.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Formatters $formatters)
        {
        }
        /**
         * Register endpoint data under a specified namespace
         *
         * @param array $args {
         *     An array of elements that make up a post to update or insert.
         *
         *     @type string   $endpoint Required. The endpoint to extend.
         *     @type string   $namespace Required. Plugin namespace.
         *     @type callable $schema_callback Callback executed to add schema data.
         *     @type callable $data_callback Callback executed to add endpoint data.
         *     @type string   $schema_type The type of data, object or array.
         * }
         *
         * @throws \Exception On failure to register.
         */
        public function register_endpoint_data($args)
        {
        }
        /**
         * Add callback functions that can be executed by the cart/extensions endpoint.
         *
         * @param array $args {
         *     An array of elements that make up the callback configuration.
         *
         *     @type string   $namespace Required. Plugin namespace.
         *     @type callable $callback Required. The function/callable to execute.
         * }
         *
         * @throws \Exception On failure to register.
         */
        public function register_update_callback($args)
        {
        }
        /**
         * Registers and validates payment requirements callbacks.
         *
         * @param array $args {
         *     Array of registration data.
         *
         *     @type callable $data_callback Required. Callback executed to add payment requirements data.
         * }
         *
         * @throws \Exception On failure to register.
         */
        public function register_payment_requirements($args)
        {
        }
        /**
         * Returns a formatter instance.
         *
         * @param string $name Formatter name.
         * @return FormatterInterface
         */
        public function get_formatter($name)
        {
        }
        /**
         * Get callback for a specific endpoint and namespace.
         *
         * @param string $namespace The namespace to get callbacks for.
         *
         * @return callable The callback registered by the extension.
         * @throws \Exception When callback is not callable or parameters are incorrect.
         */
        public function get_update_callback($namespace)
        {
        }
        /**
         * Returns the registered endpoint data
         *
         * @param string $endpoint    A valid identifier.
         * @param array  $passed_args Passed arguments from the Schema class.
         * @return object Returns an casted object with registered endpoint data.
         * @throws \Exception If a registered callback throws an error, or silently logs it.
         */
        public function get_endpoint_data($endpoint, array $passed_args = [])
        {
        }
        /**
         * Returns the registered endpoint schema
         *
         * @param string $endpoint    A valid identifier.
         * @param array  $passed_args Passed arguments from the Schema class.
         * @return object Returns an array with registered schema data.
         * @throws \Exception If a registered callback throws an error, or silently logs it.
         */
        public function get_endpoint_schema($endpoint, array $passed_args = [])
        {
        }
        /**
         * Returns the additional payment requirements for the cart which are required to make payments. Values listed here
         * are compared against each Payment Gateways "supports" flag.
         *
         * @param array $requirements list of requirements that should be added to the collected requirements.
         * @return array Returns a list of payment requirements.
         * @throws \Exception If a registered callback throws an error, or silently logs it.
         */
        public function get_payment_requirements(array $requirements = ['products'])
        {
        }
        /**
         * Throws error and/or silently logs it.
         *
         * @param string|\Throwable $exception_or_error Error message or \Exception.
         * @throws \Exception An error to throw if we have debug enabled and user is admin.
         */
        private function throw_exception($exception_or_error)
        {
        }
        /**
         * Format schema for an extension.
         *
         * @param string $namespace Error message or \Exception.
         * @param array  $schema An error to throw if we have debug enabled and user is admin.
         * @param string $schema_type How should data be shaped.
         * @return array Formatted schema.
         */
        private function format_extensions_properties($namespace, $schema, $schema_type)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Schemas\V1 {
    /**
     * AbstractSchema class.
     *
     * For REST Route Schemas
     */
    abstract class AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'Schema';
        /**
         * Rest extend instance.
         *
         * @var ExtendSchema
         */
        protected $extend;
        /**
         * Schema Controller instance.
         *
         * @var SchemaController
         */
        protected $controller;
        /**
         * Extending key that gets added to endpoint.
         *
         * @var string
         */
        const EXTENDING_KEY = 'extensions';
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Returns the full item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Returns the full item response.
         *
         * @param mixed $item Item to get response for.
         * @return array|stdClass
         */
        public function get_item_response($item)
        {
        }
        /**
         * Return schema properties.
         *
         * @return array
         */
        public abstract function get_properties();
        /**
         * Recursive removal of arg_options.
         *
         * @param array $properties Schema properties.
         */
        protected function remove_arg_options($properties)
        {
        }
        /**
         * Returns the public schema.
         *
         * @return array
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Returns extended data for a specific endpoint.
         *
         * @param string $endpoint The endpoint identifier.
         * @param array  ...$passed_args An array of arguments to be passed to callbacks.
         * @return object the data that will get added.
         */
        protected function get_extended_data($endpoint, ...$passed_args)
        {
        }
        /**
         * Gets an array of schema defaults recursively.
         *
         * @param array $properties Schema property data.
         * @return array Array of defaults, pulled from arg_options
         */
        protected function get_recursive_schema_property_defaults($properties)
        {
        }
        /**
         * Gets a function that validates recursively.
         *
         * @param array $properties Schema property data.
         * @return function Anonymous validation callback.
         */
        protected function get_recursive_validate_callback($properties)
        {
        }
        /**
         * Gets a function that sanitizes recursively.
         *
         * @param array $properties Schema property data.
         * @return function Anonymous validation callback.
         */
        protected function get_recursive_sanitize_callback($properties)
        {
        }
        /**
         * Returns extended schema for a specific endpoint.
         *
         * @param string $endpoint The endpoint identifer.
         * @param array  ...$passed_args An array of arguments to be passed to callbacks.
         * @return array the data that will get added.
         */
        protected function get_extended_schema($endpoint, ...$passed_args)
        {
        }
        /**
         * Apply a schema get_item_response callback to an array of items and return the result.
         *
         * @param AbstractSchema $schema Schema class instance.
         * @param array          $items Array of items.
         * @return array Array of values from the callback function.
         */
        protected function get_item_responses_from_schema(\Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema $schema, $items)
        {
        }
        /**
         * Retrieves an array of endpoint arguments from the item schema for the controller.
         *
         * @uses rest_get_endpoint_args_for_schema()
         * @param string $method Optional. HTTP method of the request.
         * @return array Endpoint arguments.
         */
        public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
        {
        }
        /**
         * Force all schema properties to be readonly.
         *
         * @param array $properties Schema.
         * @return array Updated schema.
         */
        protected function force_schema_readonly($properties)
        {
        }
        /**
         * Returns consistent currency schema used across endpoints for prices.
         *
         * @return array
         */
        protected function get_store_currency_properties()
        {
        }
        /**
         * Adds currency data to an array of monetary values.
         *
         * @param array $values Monetary amounts.
         * @return array Monetary amounts with currency data appended.
         */
        protected function prepare_currency_response($values)
        {
        }
        /**
         * Convert monetary values from WooCommerce to string based integers, using
         * the smallest unit of a currency.
         *
         * @param string|float $amount Monetary amount with decimals.
         * @param int          $decimals Number of decimals the amount is formatted with.
         * @param int          $rounding_mode Defaults to the PHP_ROUND_HALF_UP constant.
         * @return string      The new amount.
         */
        protected function prepare_money_response($amount, $decimals = 2, $rounding_mode = PHP_ROUND_HALF_UP)
        {
        }
        /**
         * Prepares HTML based content, such as post titles and content, for the API response.
         *
         * @param string|array $response Data to format.
         * @return string|array Formatted data.
         */
        protected function prepare_html_response($response)
        {
        }
    }
    /**
     * AddressSchema class.
     *
     * Provides a generic address schema for composition in other schemas.
     */
    abstract class AbstractAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * Term properties.
         *
         * @internal Note that required properties don't require values, just that they are included in the request.
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Sanitize and format the given address object.
         *
         * @param array            $address Value being sanitized.
         * @param \WP_REST_Request $request The Request.
         * @param string           $param The param being sanitized.
         * @return array
         */
        public function sanitize_callback($address, $request, $param)
        {
        }
        /**
         * Validate the given address object.
         *
         * @see rest_validate_value_from_schema
         *
         * @param array            $address Value being sanitized.
         * @param \WP_REST_Request $request The Request.
         * @param string           $param The param being sanitized.
         * @return true|\WP_Error
         */
        public function validate_callback($address, $request, $param)
        {
        }
    }
    /**
     * BatchSchema class.
     */
    class BatchSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'batch';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'batch';
        /**
         * Batch schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
    }
    /**
     * BillingAddressSchema class.
     *
     * Provides a generic billing address schema for composition in other schemas.
     */
    class BillingAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractAddressSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'billing_address';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'billing-address';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Sanitize and format the given address object.
         *
         * @param array            $address Value being sanitized.
         * @param \WP_REST_Request $request The Request.
         * @param string           $param The param being sanitized.
         * @return array
         */
        public function sanitize_callback($address, $request, $param)
        {
        }
        /**
         * Validate the given address object.
         *
         * @param array            $address Value being sanitized.
         * @param \WP_REST_Request $request The Request.
         * @param string           $param The param being sanitized.
         * @return true|\WP_Error
         */
        public function validate_callback($address, $request, $param)
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WC_Order|\WC_Customer $address An object with billing address.
         *
         * @throws RouteException When the invalid object types are provided.
         * @return array
         */
        public function get_item_response($address)
        {
        }
    }
    /**
     * CartCouponSchema class.
     */
    class CartCouponSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_coupon';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-coupon';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Check given coupon exists.
         *
         * @param string $coupon_code Coupon code.
         * @return bool
         */
        public function coupon_exists($coupon_code)
        {
        }
        /**
         * Generate a response from passed coupon code.
         *
         * @param string $coupon_code Coupon code from the cart.
         * @return array
         */
        public function get_item_response($coupon_code)
        {
        }
    }
    /**
     * Class CartExtensionsSchema
     */
    class CartExtensionsSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart-extensions';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-extensions';
        /**
         * Cart schema instance.
         *
         * @var CartSchema
         */
        public $cart_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Cart extensions schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Handle the request and return a valid response for this endpoint.
         *
         * @param \WP_REST_Request $request Request containing data for the extension callback.
         * @throws RouteException When callback is not callable or parameters are incorrect.
         *
         * @return array
         */
        public function get_item_response($request = null)
        {
        }
    }
    /**
     * CartFeeSchema class.
     */
    class CartFeeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_fee';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-fee';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce cart fee to an object suitable for the response.
         *
         * @param array $fee Cart fee data.
         * @return array
         */
        public function get_item_response($fee)
        {
        }
    }
    /**
     * ProductSchema class.
     */
    class ProductSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        public function get_item_response($product)
        {
        }
        /**
         * Get list of product images.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        protected function get_images(\WC_Product $product)
        {
        }
        /**
         * Gets remaining stock amount for a product.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_remaining_stock(\WC_Product $product)
        {
        }
        /**
         * If a product has low stock, return the remaining stock amount for display.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_low_stock_remaining(\WC_Product $product)
        {
        }
        /**
         * Returns true if the given attribute is valid.
         *
         * @param mixed $attribute Object or variable to check.
         * @return boolean
         */
        protected function filter_valid_attribute($attribute)
        {
        }
        /**
         * Returns true if the given attribute is valid and used for variations.
         *
         * @param mixed $attribute Object or variable to check.
         * @return boolean
         */
        protected function filter_variation_attribute($attribute)
        {
        }
        /**
         * Get variation IDs and attributes from the DB.
         *
         * @param \WC_Product $product Product instance.
         * @returns array
         */
        protected function get_variations(\WC_Product $product)
        {
        }
        /**
         * Get list of product attributes and attribute terms.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        protected function get_attributes(\WC_Product $product)
        {
        }
        /**
         * Prepare an attribute term for the response.
         *
         * @param \WP_Term $term Term object.
         * @return object
         */
        protected function prepare_product_attribute_taxonomy_value(\WP_Term $term)
        {
        }
        /**
         * Prepare an attribute term for the response.
         *
         * @param string $name Attribute term name.
         * @param int    $id Attribute term ID.
         * @param string $slug Attribute term slug.
         * @return object
         */
        protected function prepare_product_attribute_value($name, $id = 0, $slug = '')
        {
        }
        /**
         * Get an array of pricing data.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return array
         */
        protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
         *
         * @param string $tax_display_mode Provided tax display mode.
         * @return string Valid tax display mode.
         */
        protected function get_tax_display_mode($tax_display_mode = '')
        {
        }
        /**
         * WooCommerce can return prices including or excluding tax; choose the correct method based on tax display mode.
         *
         * @param string $tax_display_mode If returned prices are incl or excl of tax.
         * @return string Function name.
         */
        protected function get_price_function_from_tax_display_mode($tax_display_mode)
        {
        }
        /**
         * Get price range from certain product types.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return object|null
         */
        protected function get_price_range(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * Returns a list of terms assigned to the product.
         *
         * @param \WC_Product $product Product object.
         * @param string      $taxonomy Taxonomy name.
         * @return array Array of terms (id, name, slug).
         */
        protected function get_term_list(\WC_Product $product, $taxonomy = '')
        {
        }
    }
    /**
     * ItemSchema class.
     */
    abstract class ItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ProductSchema
    {
        /**
         * Item schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Utilities {
    /**
     * ProductItemTrait
     *
     * Shared functionality for formating product item data.
     */
    trait ProductItemTrait
    {
        /**
         * Get an array of pricing data.
         *
         * @param \WC_Product $product Product instance.
         * @param string      $tax_display_mode If returned prices are incl or excl of tax.
         * @return array
         */
        protected function prepare_product_price_response(\WC_Product $product, $tax_display_mode = '')
        {
        }
        /**
         * Format variation data, for example convert slugs such as attribute_pa_size to Size.
         *
         * @param array       $variation_data Array of data from the cart.
         * @param \WC_Product $product Product data.
         * @return array
         */
        protected function format_variation_data($variation_data, $product)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Schemas\V1 {
    /**
     * CartItemSchema class.
     */
    class CartItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ItemSchema
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\ProductItemTrait;
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_item';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-item';
        /**
         * Convert a WooCommerce cart item to an object suitable for the response.
         *
         * @param array $cart_item Cart item array.
         * @return array
         */
        public function get_item_response($cart_item)
        {
        }
        /**
         * Format cart item data removing any HTML tag.
         *
         * @param array $cart_item Cart item array.
         * @return array
         */
        protected function get_item_data($cart_item)
        {
        }
        /**
         * Remove HTML tags from cart item data and set the `hidden` property to `__experimental_woocommerce_blocks_hidden`.
         *
         * @param array $item_data_element Individual element of a cart item data.
         * @return array
         */
        protected function format_item_data_element($item_data_element)
        {
        }
    }
    /**
     * CartSchema class.
     */
    class CartSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart';
        /**
         * Item schema instance.
         *
         * @var CartItemSchema
         */
        public $item_schema;
        /**
         * Coupon schema instance.
         *
         * @var CartCouponSchema
         */
        public $coupon_schema;
        /**
         * Product item schema instance representing cross-sell items.
         *
         * @var ProductSchema
         */
        public $cross_sells_item_schema;
        /**
         * Fee schema instance.
         *
         * @var CartFeeSchema
         */
        public $fee_schema;
        /**
         * Shipping rates schema instance.
         *
         * @var CartShippingRateSchema
         */
        public $shipping_rate_schema;
        /**
         * Shipping address schema instance.
         *
         * @var ShippingAddressSchema
         */
        public $shipping_address_schema;
        /**
         * Billing address schema instance.
         *
         * @var BillingAddressSchema
         */
        public $billing_address_schema;
        /**
         * Error schema instance.
         *
         * @var ErrorSchema
         */
        public $error_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a woo cart into an object suitable for the response.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        public function get_item_response($cart)
        {
        }
        /**
         * Get total data.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        protected function get_totals($cart)
        {
        }
        /**
         * Get tax lines from the cart and format to match schema.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        protected function get_tax_lines($cart)
        {
        }
        /**
         * Get cart validation errors.
         *
         * @param \WC_Cart $cart Cart class instance.
         * @return array
         */
        protected function get_cart_errors($cart)
        {
        }
    }
    /**
     * CartShippingRateSchema class.
     */
    class CartShippingRateSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart-shipping-rate';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'cart-shipping-rate';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Schema for a single rate.
         *
         * @return array
         */
        protected function get_rate_properties()
        {
        }
        /**
         * Convert a shipping rate from WooCommerce into a valid response.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return array
         */
        public function get_item_response($package)
        {
        }
        /**
         * Gets and formats the destination address of a package.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return object
         */
        protected function prepare_package_destination_response($package)
        {
        }
        /**
         * Gets items from a package and creates an array of strings containing product names and quantities.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return array
         */
        protected function prepare_package_items_response($package)
        {
        }
        /**
         * Prepare an array of rates from a package for the response.
         *
         * @param array $package Shipping package complete with rates from WooCommerce.
         * @return array
         */
        protected function prepare_package_shipping_rates_response($package)
        {
        }
        /**
         * Response for a single rate.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @param string           $selected_rate Selected rate.
         * @return array
         */
        protected function get_rate_response($rate, $selected_rate = '')
        {
        }
        /**
         * Gets a prop of the rate object, if callable.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @param string           $prop Prop name.
         * @return string
         */
        protected function get_rate_prop($rate, $prop)
        {
        }
        /**
         * Converts rate meta data into a suitable response object.
         *
         * @param WC_Shipping_Rate $rate Rate object.
         * @return array
         */
        protected function get_rate_meta_data($rate)
        {
        }
    }
    /**
     * CheckoutSchema class.
     */
    class CheckoutSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'checkout';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'checkout';
        /**
         * Billing address schema instance.
         *
         * @var BillingAddressSchema
         */
        protected $billing_address_schema;
        /**
         * Shipping address schema instance.
         *
         * @var ShippingAddressSchema
         */
        protected $shipping_address_schema;
        /**
         * Image Attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Checkout schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Return the response for checkout.
         *
         * @param object $item Results from checkout action.
         * @return array
         */
        public function get_item_response($item)
        {
        }
        /**
         * Get the checkout response based on the current order and any payments.
         *
         * @param \WC_Order     $order Order object.
         * @param PaymentResult $payment_result Payment result object.
         * @return array
         */
        protected function get_checkout_response(\WC_Order $order, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result = null)
        {
        }
        /**
         * This prepares the payment details for the response so it's following the
         * schema where it's an array of objects.
         *
         * @param array $payment_details An array of payment details from the processed payment.
         *
         * @return array An array of objects where each object has the key and value
         *               as distinct properties.
         */
        protected function prepare_payment_details_for_response(array $payment_details)
        {
        }
    }
    /**
     * CheckoutOrderSchema class.
     */
    class CheckoutOrderSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\CheckoutSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'checkout-order';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'checkout-order';
        /**
         * Checkout schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
    }
    /**
     * ErrorSchema class.
     */
    class ErrorSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'error';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'error';
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WP_Error into an object suitable for the response.
         *
         * @param \WP_Error $error Error object.
         * @return array
         */
        public function get_item_response($error)
        {
        }
    }
    /**
     * ImageAttachmentSchema class.
     */
    class ImageAttachmentSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'image';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'image';
        /**
         * Product schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param int $attachment_id Image attachment ID.
         * @return object|null
         */
        public function get_item_response($attachment_id)
        {
        }
    }
    /**
     * OrderCouponSchema class.
     */
    class OrderCouponSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'order_coupon';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'order-coupon';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert an order coupon to an object suitable for the response.
         *
         * @param \WC_Order_Item_Coupon $coupon Order coupon object.
         * @return array
         */
        public function get_item_response($coupon)
        {
        }
    }
    /**
     * OrderFeeSchema class.
     */
    class OrderFeeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'order_fee';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'order-fee';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce cart fee to an object suitable for the response.
         *
         * @param \WC_Order_Item_Fee $fee Order fee object.
         * @return array
         */
        public function get_item_response($fee)
        {
        }
    }
    /**
     * OrderItemSchema class.
     */
    class OrderItemSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\ItemSchema
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\ProductItemTrait;
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'order_item';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'order-item';
        /**
         * Get order items data.
         *
         * @param \WC_Order_Item_Product $order_item Order item instance.
         * @return array
         */
        public function get_item_response($order_item)
        {
        }
        /**
         * Get totals data.
         *
         * @param \WC_Order_Item_Product $order_item Order item instance.
         * @return array
         */
        public function get_totals($order_item)
        {
        }
    }
    /**
     * OrderSchema class.
     */
    class OrderSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'order';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'order';
        /**
         * Item schema instance.
         *
         * @var OrderItemSchema
         */
        public $item_schema;
        /**
         * Order controller class instance.
         *
         * @var OrderController
         */
        protected $order_controller;
        /**
         * Coupon schema instance.
         *
         * @var OrderCouponSchema
         */
        public $coupon_schema;
        /**
         * Product item schema instance representing cross-sell items.
         *
         * @var ProductSchema
         */
        public $cross_sells_item_schema;
        /**
         * Fee schema instance.
         *
         * @var OrderFeeSchema
         */
        public $fee_schema;
        /**
         * Shipping rates schema instance.
         *
         * @var CartShippingRateSchema
         */
        public $shipping_rate_schema;
        /**
         * Shipping address schema instance.
         *
         * @var ShippingAddressSchema
         */
        public $shipping_address_schema;
        /**
         * Billing address schema instance.
         *
         * @var BillingAddressSchema
         */
        public $billing_address_schema;
        /**
         * Error schema instance.
         *
         * @var ErrorSchema
         */
        public $error_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Order schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Get an order for response.
         *
         * @param \WC_Order $order Order instance.
         * @return array
         */
        public function get_item_response($order)
        {
        }
        /**
         * Get total data.
         *
         * @param \WC_Order $order Order instance.
         * @return array
         */
        protected function get_totals($order)
        {
        }
    }
    /**
     * OrderSchema class.
     */
    class PatternsSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'patterns';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'patterns';
        /**
         * Patterns schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Get the Patterns response.
         *
         * @param array $item Item to get response for.
         *
         * @return array
         */
        public function get_item_response($item)
        {
        }
    }
    /**
     * ProductAttributeSchema class.
     */
    class ProductAttributeSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product_attribute';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-attribute';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert an attribute object into an object suitable for the response.
         *
         * @param object $attribute Attribute object.
         * @return array
         */
        public function get_item_response($attribute)
        {
        }
    }
    /**
     * TermSchema class.
     */
    class TermSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'term';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'term';
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WP_Term $term Term object.
         * @return array
         */
        public function get_item_response($term)
        {
        }
    }
    /**
     * ProductCategorySchema class.
     */
    class ProductCategorySchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\TermSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product-category';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-category';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Term properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WP_Term $term Term object.
         * @return array
         */
        public function get_item_response($term)
        {
        }
        /**
         * Get total number of reviews for products in a category.
         *
         * @param \WP_Term $term Term object.
         * @return int
         */
        protected function get_category_review_count($term)
        {
        }
    }
    /**
     * ProductCollectionDataSchema class.
     */
    class ProductCollectionDataSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product-collection-data';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-collection-data';
        /**
         * Product collection data schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Format data.
         *
         * @param array $data Collection data to format and return.
         * @return array
         */
        public function get_item_response($data)
        {
        }
    }
    /**
     * ProductReviewSchema class.
     */
    class ProductReviewSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product_review';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'product-review';
        /**
         * Image attachment schema instance.
         *
         * @var ImageAttachmentSchema
         */
        protected $image_attachment_schema;
        /**
         * Constructor.
         *
         * @param ExtendSchema     $extend Rest Extending instance.
         * @param SchemaController $controller Schema Controller instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
        {
        }
        /**
         * Product review schema properties.
         *
         * @return array
         */
        public function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param \WP_Comment $review Product review object.
         * @return array
         */
        public function get_item_response($review)
        {
        }
    }
    /**
     * ShippingAddressSchema class.
     *
     * Provides a generic shipping address schema for composition in other schemas.
     */
    class ShippingAddressSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractAddressSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'shipping_address';
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'shipping-address';
        /**
         * Convert a term object into an object suitable for the response.
         *
         * @param \WC_Order|\WC_Customer $address An object with shipping address.
         *
         * @throws RouteException When the invalid object types are provided.
         * @return array
         */
        public function get_item_response($address)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi {
    /**
     * SessionHandler class
     */
    final class SessionHandler extends \WC_Session
    {
        /**
         * Token from HTTP headers.
         *
         * @var string
         */
        protected $token;
        /**
         * Table name for session data.
         *
         * @var string Custom session table name
         */
        protected $table;
        /**
         * Expiration timestamp.
         *
         * @var int
         */
        protected $session_expiration;
        /**
         * Constructor for the session class.
         */
        public function __construct()
        {
        }
        /**
         * Init hooks and session data.
         */
        public function init()
        {
        }
        /**
         * Process the token header to load the correct session.
         */
        protected function init_session_from_token()
        {
        }
        /**
         * Returns the session.
         *
         * @param string $customer_id Customer ID.
         * @param mixed  $default Default session value.
         *
         * @return string|array|bool
         */
        public function get_session($customer_id, $default = false)
        {
        }
        /**
         * Save data and delete user session.
         */
        public function save_data()
        {
        }
    }
    /**
     * StoreApi Main Class.
     */
    final class StoreApi
    {
        /**
         * Init and hook in Store API functionality.
         */
        public function init()
        {
        }
        /**
         * Loads the DI container for Store API.
         *
         * @internal This uses the Blocks DI container. If Store API were to move to core, this container could be replaced
         * with a different compatible container.
         *
         * @param boolean $reset Used to reset the container to a fresh instance. Note: this means all dependencies will be reconstructed.
         * @return mixed
         */
        public static function container($reset = false)
        {
        }
    }
}
namespace Automattic\WooCommerce\StoreApi\Utilities {
    /**
     * ArrayUtils class used for custom functions to operate on arrays
     */
    class ArrayUtils
    {
        /**
         * Join a string with a natural language conjunction at the end.
         *
         * @param array $array  The array to join together with the natural language conjunction.
         * @param bool  $enclose_items_with_quotes Whether each item in the array should be enclosed within quotation marks.
         *
         * @return string a string containing a list of items and a natural language conjuction.
         */
        public static function natural_language_join($array, $enclose_items_with_quotes = false)
        {
        }
    }
    /**
     * Woo Cart Controller class.
     *
     * Helper class to bridge the gap between the cart API and Woo core.
     */
    class CartController
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        /**
         * Makes the cart and sessions available to a route by loading them from core.
         */
        public function load_cart()
        {
        }
        /**
         * Recalculates the cart totals.
         */
        public function calculate_totals()
        {
        }
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @todo Overriding the core add_to_cart method was necessary because core outputs notices when an item is added to
         * the cart. For us this would cause notices to build up and output on the store, out of context. Core would need
         * refactoring to split notices out from other cart actions.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return string
         */
        public function add_to_cart($request)
        {
        }
        /**
         * Based on core `set_quantity` method, but validates if an item is sold individually first and enforces any limits in
         * place.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param string  $item_id Cart item id.
         * @param integer $quantity Cart quantity.
         */
        public function set_cart_item_quantity($item_id, $quantity = 1)
        {
        }
        /**
         * Validate all items in the cart and check for errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @param array       $request Add to cart request params.
         */
        public function validate_add_to_cart(\WC_Product $product, $request)
        {
        }
        /**
         * Generates the error message for out of stock products and adds product names to it.
         *
         * @param string $singular The message to use when only one product is in the list.
         * @param string $plural The message to use when more than one product is in the list.
         * @param array  $items The list of cart items whose names should be inserted into the message.
         * @returns string The translated and correctly pluralised message.
         */
        private function add_product_names_to_message($singular, $plural, $items)
        {
        }
        /**
         * Takes a string describing the type of stock extension, whether there is a single product or multiple products
         * causing this exception and returns an appropriate error message.
         *
         * @param string $exception_type     The type of exception encountered.
         * @param string $singular_or_plural Whether to get the error message for a single product or multiple.
         *
         * @return string
         */
        private function get_error_message_for_stock_exception_type($exception_type, $singular_or_plural)
        {
        }
        /**
         * Validate cart and check for errors.
         *
         * @throws InvalidCartException Exception if invalid data is detected in the cart.
         */
        public function validate_cart()
        {
        }
        /**
         * Validate all items in the cart and check for errors.
         *
         * @throws InvalidCartException Exception if invalid data is detected due to insufficient stock levels.
         */
        public function validate_cart_items()
        {
        }
        /**
         * This method will take arrays of exceptions relating to stock, and will convert them to a WP_Error object.
         *
         * @param TooManyInCartException[]     $too_many_in_cart_products     Array of TooManyInCartExceptions.
         * @param NotPurchasableException[]    $not_purchasable_products      Array of NotPurchasableExceptions.
         * @param PartialOutOfStockException[] $partial_out_of_stock_products Array of PartialOutOfStockExceptions.
         * @param OutOfStockException[]        $out_of_stock_products         Array of OutOfStockExceptions.
         *
         * @return WP_Error  The WP_Error object returned. Will have errors if any exceptions were in the args. It will be empty if they do not.
         */
        private function stock_exceptions_to_wp_errors($too_many_in_cart_products, $not_purchasable_products, $partial_out_of_stock_products, $out_of_stock_products)
        {
        }
        /**
         * Validates an existing cart item and returns any errors.
         *
         * @throws TooManyInCartException Exception if more than one product that can only be purchased individually is in
         * the cart.
         * @throws PartialOutOfStockException Exception if an item has a quantity greater than what is available in stock.
         * @throws OutOfStockException Exception thrown when an item is entirely out of stock.
         * @throws NotPurchasableException Exception thrown when an item is not purchasable.
         * @param array $cart_item Cart item array.
         */
        public function validate_cart_item($cart_item)
        {
        }
        /**
         * Validate all coupons in the cart and check for errors.
         *
         * @throws InvalidCartException Exception if invalid data is detected.
         */
        public function validate_cart_coupons()
        {
        }
        /**
         * Validate the cart and get a list of errors.
         *
         * @return WP_Error A WP_Error instance containing the cart's errors.
         */
        public function get_cart_errors()
        {
        }
        /**
         * Get main instance of cart class.
         *
         * @throws RouteException When cart cannot be loaded.
         * @return \WC_Cart
         */
        public function get_cart_instance()
        {
        }
        /**
         * Return a cart item from the woo core cart class.
         *
         * @param string $item_id Cart item id.
         * @return array
         */
        public function get_cart_item($item_id)
        {
        }
        /**
         * Returns all cart items.
         *
         * @param callable $callback Optional callback to apply to the array filter.
         * @return array
         */
        public function get_cart_items($callback = null)
        {
        }
        /**
         * Get hashes for items in the current cart. Useful for tracking changes.
         *
         * @return array
         */
        public function get_cart_hashes()
        {
        }
        /**
         * Empty cart contents.
         */
        public function empty_cart()
        {
        }
        /**
         * See if cart has applied coupon by code.
         *
         * @param string $coupon_code Cart coupon code.
         * @return bool
         */
        public function has_coupon($coupon_code)
        {
        }
        /**
         * Returns all applied coupons.
         *
         * @param callable $callback Optional callback to apply to the array filter.
         * @return array
         */
        public function get_cart_coupons($callback = null)
        {
        }
        /**
         * Get shipping packages from the cart with calculated shipping rates.
         *
         * @todo this can be refactored once https://github.com/woocommerce/woocommerce/pull/26101 lands.
         *
         * @param bool $calculate_rates Should rates for the packages also be returned.
         * @return array
         */
        public function get_shipping_packages($calculate_rates = true)
        {
        }
        /**
         * Creates a name for a package.
         *
         * @param array $package Shipping package from WooCommerce.
         * @param int   $index Package number.
         * @return string
         */
        protected function get_package_name($package, $index)
        {
        }
        /**
         * Selects a shipping rate.
         *
         * @param int|string $package_id ID of the package to choose a rate for.
         * @param string     $rate_id ID of the rate being chosen.
         */
        public function select_shipping_rate($package_id, $rate_id)
        {
        }
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @todo Overriding the core apply_coupon method was necessary because core outputs notices when a coupon gets
         * applied. For us this would cause notices to build up and output on the store, out of context. Core would need
         * refactoring to split notices out from other cart actions.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param string $coupon_code Coupon code.
         */
        public function apply_coupon($coupon_code)
        {
        }
        /**
         * Validates an existing cart coupon and returns any errors.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         */
        protected function validate_cart_coupon(\WC_Coupon $coupon)
        {
        }
        /**
         * Gets the qty of a product across line items.
         *
         * @param \WC_Product $product Product object.
         * @return int
         */
        protected function get_product_quantity_in_cart($product)
        {
        }
        /**
         * Gets remaining stock for a product.
         *
         * @param \WC_Product $product Product object.
         * @return int
         */
        protected function get_remaining_stock_for_product($product)
        {
        }
        /**
         * Get a product object to be added to the cart.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return \WC_Product|Error Returns a product object if purchasable.
         */
        protected function get_product_for_cart($request)
        {
        }
        /**
         * For a given product, get the product ID.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @return int
         */
        protected function get_product_id(\WC_Product $product)
        {
        }
        /**
         * For a given product, get the variation ID.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         * @return int
         */
        protected function get_variation_id(\WC_Product $product)
        {
        }
        /**
         * Default exception thrown when an item cannot be added to the cart.
         *
         * @throws RouteException Exception with code woocommerce_rest_product_not_purchasable.
         *
         * @param \WC_Product $product Product object associated with the cart item.
         */
        protected function throw_default_product_exception(\WC_Product $product)
        {
        }
        /**
         * Filter data for add to cart requests.
         *
         * @param array $request Add to cart request params.
         * @return array Updated request array.
         */
        protected function filter_request_data($request)
        {
        }
        /**
         * If variations are set, validate and format the values ready to add to the cart.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return array Updated request array.
         */
        protected function parse_variation_data($request)
        {
        }
        /**
         * Try to match request data to a variation ID and return the ID.
         *
         * @throws RouteException Exception if variation cannot be found.
         *
         * @param array       $request Add to cart request params.
         * @param \WC_Product $product Product being added to the cart.
         * @return int Matching variation ID.
         */
        protected function get_variation_id_from_variation_data($request, $product)
        {
        }
        /**
         * Format and sanitize variation data posted to the API.
         *
         * Labels are converted to names (e.g. Size to pa_size), and values are cleaned.
         *
         * @throws RouteException Exception if variation cannot be found.
         *
         * @param array $variation_data Key value pairs of attributes and values.
         * @param array $variable_product_attributes Product attributes we're expecting.
         * @return array
         */
        protected function sanitize_variation_data($variation_data, $variable_product_attributes)
        {
        }
        /**
         * Get product attributes from the variable product (which may be the parent if the product object is a variation).
         *
         * @throws RouteException Exception if product is invalid.
         *
         * @param \WC_Product $product Product being added to the cart.
         * @return array
         */
        protected function get_variable_product_attributes($product)
        {
        }
    }
    /**
     * JsonWebToken class.
     *
     * Simple Json Web Token generator & verifier static utility class, currently supporting only HS256 signatures.
     */
    final class JsonWebToken
    {
        /**
         * JWT header type.
         *
         * @var string
         */
        private static $type = 'JWT';
        /**
         * JWT algorithm to generate signature.
         *
         * @var string
         */
        private static $algorithm = 'HS256';
        /**
         * Generates a token from provided data and secret.
         *
         * @param array  $payload Payload data.
         * @param string $secret The secret used to generate the signature.
         *
         * @return string
         */
        public static function create(array $payload, string $secret)
        {
        }
        /**
         * Validates a provided token against the provided secret.
         * Checks for format, valid header for our class, expiration claim validity and signature.
         * https://datatracker.ietf.org/doc/html/rfc7519#section-7.2
         *
         * @param string $token Full token string.
         * @param string $secret The secret used to generate the signature.
         *
         * @return bool
         */
        public static function validate(string $token, string $secret)
        {
        }
        /**
         * Returns the decoded/encoded header, payload and signature from a token string.
         *
         * @param string $token Full token string.
         *
         * @return object
         */
        public static function get_parts(string $token)
        {
        }
        /**
         * Generates the json formatted header for our HS256 JWT token.
         *
         * @return string|bool
         */
        private static function generate_header()
        {
        }
        /**
         * Generates a sha256 signature for the provided string using the provided secret.
         *
         * @param string $string Header + Payload token substring.
         * @param string $secret The secret used to generate the signature.
         *
         * @return false|string
         */
        private static function generate_signature(string $string, string $secret)
        {
        }
        /**
         * Generates the payload in json formatted string.
         *
         * @param array $payload Payload data.
         *
         * @return string|bool
         */
        private static function generate_payload(array $payload)
        {
        }
        /**
         * Encodes a string to url safe base64.
         *
         * @param string $string The string to be encoded.
         *
         * @return string
         */
        private static function to_base_64_url(string $string)
        {
        }
        /**
         * Decodes a string encoded using url safe base64, supporting auto padding.
         *
         * @param string $string the string to be decoded.
         *
         * @return string
         */
        private static function from_base_64_url(string $string)
        {
        }
    }
    /**
     * Util class for local pickup related functionality, this contains methods that need to be accessed from places besides
     * the ShippingController, i.e. the OrderController.
     */
    class LocalPickupUtils
    {
        /**
         * Checks if WC Blocks local pickup is enabled.
         *
         * @return bool True if local pickup is enabled.
         */
        public static function is_local_pickup_enabled()
        {
        }
        /**
         * Gets a list of payment method ids that support the 'local-pickup' feature.
         *
         * @return string[] List of payment method ids that support the 'local-pickup' feature.
         */
        public static function get_local_pickup_method_ids()
        {
        }
    }
    /**
     * NoticeHandler class.
     * Helper class to handle notices.
     */
    class NoticeHandler
    {
        /**
         * Convert queued error notices into an exception.
         *
         * For example, Payment methods may add error notices during validate_fields call to prevent checkout.
         * Since we're not rendering notices at all, we need to convert them to exceptions.
         *
         * This method will find the first error message and thrown an exception instead. Discards notices once complete.
         *
         * @throws RouteException If an error notice is detected, Exception is thrown.
         *
         * @param string $error_code Error code for the thrown exceptions.
         */
        public static function convert_notices_to_exceptions($error_code = 'unknown_server_error')
        {
        }
        /**
         * Collects queued error notices into a \WP_Error.
         *
         * For example, cart validation processes may add error notices to prevent checkout.
         * Since we're not rendering notices at all, we need to catch them and group them in a single WP_Error instance.
         *
         * This method will discard notices once complete.
         *
         * @param string $error_code Error code for the thrown exceptions.
         *
         * @return \WP_Error The WP_Error object containing all error notices.
         */
        public static function convert_notices_to_wp_errors($error_code = 'unknown_server_error')
        {
        }
    }
    /**
     * OrderController class.
     * Helper class which creates and syncs orders with the cart.
     */
    class OrderController
    {
        /**
         * Create order and set props based on global settings.
         *
         * @throws RouteException Exception if invalid data is detected.
         *
         * @return \WC_Order A new order object.
         */
        public function create_order_from_cart()
        {
        }
        /**
         * Update an order using data from the current cart.
         *
         * @param \WC_Order $order The order object to update.
         * @param boolean   $update_totals Whether to update totals or not.
         */
        public function update_order_from_cart(\WC_Order $order, $update_totals = true)
        {
        }
        /**
         * Copies order data to customer object (not the session), so values persist for future checkouts.
         *
         * @param \WC_Order $order Order object.
         */
        public function sync_customer_data_with_order(\WC_Order $order)
        {
        }
        /**
         * Final validation ran before payment is taken.
         *
         * By this point we have an order populated with customer data and items.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param \WC_Order $order Order object.
         */
        public function validate_order_before_payment(\WC_Order $order)
        {
        }
        /**
         * Convert a coupon code to a coupon object.
         *
         * @param string $coupon_code Coupon code.
         * @return \WC_Coupon Coupon object.
         */
        protected function get_coupon($coupon_code)
        {
        }
        /**
         * Validate coupons applied to the order and remove those that are not valid.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param \WC_Order $order Order object.
         */
        protected function validate_coupons(\WC_Order $order)
        {
        }
        /**
         * Validates the customer email. This is a required field.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param \WC_Order $order Order object.
         */
        protected function validate_email(\WC_Order $order)
        {
        }
        /**
         * Validates customer address data based on the locale to ensure required fields are set.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param \WC_Order $order Order object.
         */
        protected function validate_addresses(\WC_Order $order)
        {
        }
        /**
         * Check all required address fields are set and return errors if not.
         *
         * @param string $country Country code.
         * @param array  $allowed_countries List of valid country codes.
         * @return boolean True if valid.
         */
        protected function validate_allowed_country($country, array $allowed_countries)
        {
        }
        /**
         * Check all required address fields are set and return errors if not.
         *
         * @param array     $address Address array.
         * @param string    $address_type billing or shipping address, used in error messages.
         * @param \WP_Error $errors Error object.
         */
        protected function validate_address_fields($address, $address_type, \WP_Error $errors)
        {
        }
        /**
         * Check email restrictions of a coupon against the order.
         *
         * @throws Exception Exception if invalid data is detected.
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         * @param \WC_Order  $order Order object.
         */
        protected function validate_coupon_email_restriction(\WC_Coupon $coupon, \WC_Order $order)
        {
        }
        /**
         * Check usage restrictions of a coupon against the order.
         *
         * @throws Exception Exception if invalid data is detected.
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         * @param \WC_Order  $order Order object.
         */
        protected function validate_coupon_usage_limit(\WC_Coupon $coupon, \WC_Order $order)
        {
        }
        /**
         * Get user email from user id.
         *
         * @param integer $user_id User ID.
         * @return string Email or empty string.
         */
        private function get_email_from_user_id($user_id)
        {
        }
        /**
         * Get the usage count for a coupon based on a list of aliases (ids, emails).
         *
         * @param \WC_Coupon $coupon Coupon object applied to the cart.
         * @param array      $aliases List of aliases to check.
         *
         * @return integer
         */
        private function get_usage_per_aliases($coupon, $aliases)
        {
        }
        /**
         * Check there is a shipping method if it requires shipping.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param boolean $needs_shipping Current order needs shipping.
         * @param array   $chosen_shipping_methods Array of shipping methods.
         */
        public function validate_selected_shipping_methods($needs_shipping, $chosen_shipping_methods = array())
        {
        }
        /**
         * Validate a given order key against an existing order.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param integer $order_id Order ID.
         * @param string  $order_key Order key.
         */
        public function validate_order_key($order_id, $order_key)
        {
        }
        /**
         * Get errors for order stock on failed orders.
         *
         * @throws RouteException Exception if invalid data is detected.
         * @param integer $order_id Order ID.
         */
        public function get_failed_order_stock_error($order_id)
        {
        }
        /**
         * Changes default order status to draft for orders created via this API.
         *
         * @return string
         */
        public function default_order_status()
        {
        }
        /**
         * Create order line items.
         *
         * @param \WC_Order $order The order object to update.
         */
        protected function update_line_items_from_cart(\WC_Order $order)
        {
        }
        /**
         * Update address data from cart and/or customer session data.
         *
         * @param \WC_Order $order The order object to update.
         */
        protected function update_addresses_from_cart(\WC_Order $order)
        {
        }
    }
    /**
     * Pagination class.
     */
    class Pagination
    {
        /**
         * Add pagination headers to a response object.
         *
         * @param \WP_REST_Response $response Reference to the response object.
         * @param \WP_REST_Request  $request The request object.
         * @param int               $total_items Total items found.
         * @param int               $total_pages Total pages found.
         * @return \WP_REST_Response
         */
        public function add_headers($response, $request, $total_items, $total_pages)
        {
        }
        /**
         * Get current page.
         *
         * @param \WP_REST_Request $request The request object.
         * @return int Get the page from the request object.
         */
        protected function get_current_page($request)
        {
        }
        /**
         * Get base for links from the request object.
         *
         * @param \WP_REST_Request $request The request object.
         * @return string
         */
        protected function get_link_base($request)
        {
        }
        /**
         * Add a page link.
         *
         * @param \WP_REST_Response $response Reference to the response object.
         * @param string            $name Page link name. e.g. prev.
         * @param int               $page Page number.
         * @param string            $link_base Base URL.
         */
        protected function add_page_link(&$response, $name, $page, $link_base)
        {
        }
    }
    /**
     * Product Query class.
     *
     * Helper class to handle product queries for the API.
     */
    class ProductQuery
    {
        /**
         * Prepare query args to pass to WP_Query for a REST API request.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function prepare_objects_query($request)
        {
        }
        /**
         * Get results of query.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_results($request)
        {
        }
        /**
         * Get objects.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_objects($request)
        {
        }
        /**
         * Get last modified date for all products.
         *
         * @return int timestamp.
         */
        public function get_last_modified()
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param array     $args Query args.
         * @param \WC_Query $wp_query WC_Query object.
         * @return array
         */
        public function add_query_clauses($args, $wp_query)
        {
        }
        /**
         * Add in conditional price filters.
         *
         * @param array     $args Query args.
         * @param \WC_Query $wp_query WC_Query object.
         * @return array
         */
        protected function add_price_filter_clauses($args, $wp_query)
        {
        }
        /**
         * Get query for price filters when dealing with displayed taxes.
         *
         * @param float  $price_filter Price filter to apply.
         * @param string $column Price being filtered (min or max).
         * @param string $operator Comparison operator for column.
         * @return string Constructed query.
         */
        protected function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
        {
        }
        /**
         * If price filters need adjustment to work with displayed taxes, this returns true.
         *
         * This logic is used when prices are stored in the database differently to how they are being displayed, with regards
         * to taxes.
         *
         * @return boolean
         */
        protected function adjust_price_filters_for_displayed_taxes()
        {
        }
        /**
         * Converts price filter from subunits to decimal.
         *
         * @param string|int $price_filter Raw price filter in subunit format.
         * @return float Price filter in decimal format.
         */
        protected function prepare_price_filter($price_filter)
        {
        }
        /**
         * Adjusts a price filter based on a tax class and whether or not the amount includes or excludes taxes.
         *
         * This calculation logic is based on `wc_get_price_excluding_tax` and `wc_get_price_including_tax` in core.
         *
         * @param float  $price_filter Price filter amount as entered.
         * @param string $tax_class Tax class for adjustment.
         * @return float
         */
        protected function adjust_price_filter_for_tax_class($price_filter, $tax_class)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected function append_product_sorting_table_join($sql)
        {
        }
    }
    /**
     * Product Query filters class.
     */
    class ProductQueryFilters
    {
        /**
         * Get filtered min price for current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return object
         */
        public function get_filtered_price($request)
        {
        }
        /**
         * Get stock status counts for the current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return array status=>count pairs.
         */
        public function get_stock_status_counts($request)
        {
        }
        /**
         * Generate calculate query by stock status.
         *
         * @param string $status status to calculate.
         * @param string $product_query_sql product query for current filter state.
         * @param array  $stock_status_options available stock status options.
         *
         * @return false|string
         */
        private function generate_stock_status_count_query($status, $product_query_sql, $stock_status_options)
        {
        }
        /**
         * Get terms list for a given taxonomy.
         *
         * @param string $taxonomy Taxonomy name.
         *
         * @return array
         */
        public function get_terms_list(string $taxonomy)
        {
        }
        /**
         * Get the empty terms list for a given taxonomy.
         *
         * @param string $taxonomy Taxonomy name.
         *
         * @return array
         */
        public function get_empty_terms_list(string $taxonomy)
        {
        }
        /**
         * Get attribute and meta counts.
         *
         * @param WP_REST_Request $request Request data.
         * @param string          $filtered_attribute The attribute to count.
         *
         * @return array
         */
        public function get_attribute_counts($request, $filtered_attribute)
        {
        }
        /**
         * Get rating counts for the current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return array rating=>count pairs.
         */
        public function get_rating_counts($request)
        {
        }
        /**
         * Gets product by metas.
         *
         * @since TBD
         * @param array $metas Array of metas to query.
         * @return array $results
         */
        public function get_product_by_metas($metas = array())
        {
        }
        /**
         * Gets product by filtered terms.
         *
         * @since TBD
         * @param string $taxonomy Taxonomy name.
         * @param array  $term_ids Term IDs.
         * @param string $query_type or | and.
         * @return array Product IDs.
         */
        public function get_product_by_filtered_terms($taxonomy = '', $term_ids = array(), $query_type = 'or')
        {
        }
    }
    /**
     * QuantityLimits class.
     *
     * Returns limits for products and cart items when using the StoreAPI and supporting classes.
     */
    final class QuantityLimits
    {
        use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
        /**
         * Get quantity limits (min, max, step/multiple) for a product or cart item.
         *
         * @param array $cart_item A cart item array.
         * @return array
         */
        public function get_cart_item_quantity_limits($cart_item)
        {
        }
        /**
         * Get limits for product add to cart forms.
         *
         * @param \WC_Product $product Product instance.
         * @return array
         */
        public function get_add_to_cart_limits(\WC_Product $product)
        {
        }
        /**
         * Return a number using the closest multiple of another number. Used to enforce step/multiple values.
         *
         * @param int    $number Number to round.
         * @param int    $multiple_of The multiple.
         * @param string $rounding_function ceil, floor, or round.
         * @return int
         */
        public function limit_to_multiple(int $number, int $multiple_of, string $rounding_function = 'round')
        {
        }
        /**
         * Check that a given quantity is valid according to any limits in place.
         *
         * @param integer           $quantity Quantity to validate.
         * @param \WC_Product|array $cart_item Cart item.
         * @return \WP_Error|true
         */
        public function validate_cart_item_quantity($quantity, $cart_item)
        {
        }
        /**
         * Get the limit for the total number of a product allowed in the cart.
         *
         * This is based on product properties, including remaining stock, and defaults to a maximum of 9999 of any product
         * in the cart at once.
         *
         * @param \WC_Product $product Product instance.
         * @return int
         */
        protected function get_product_quantity_limit(\WC_Product $product)
        {
        }
        /**
         * Returns the remaining stock for a product if it has stock.
         *
         * This also factors in draft orders.
         *
         * @param \WC_Product $product Product instance.
         * @return integer|null
         */
        protected function get_remaining_stock(\WC_Product $product)
        {
        }
        /**
         * Get a quantity for a product or cart item by running it through a filter hook.
         *
         * @param int|null          $value Value to filter.
         * @param string            $value_type Type of value. Used for filter suffix.
         * @param \WC_Product|array $cart_item_or_product Either a cart item or a product instance.
         * @return mixed
         */
        protected function filter_value($value, string $value_type, $cart_item_or_product)
        {
        }
    }
    /**
     * RateLimits class.
     */
    class RateLimits extends \WC_Rate_Limiter
    {
        /**
         * Cache group.
         */
        const CACHE_GROUP = 'store_api_rate_limit';
        /**
         * Rate limiting enabled default value.
         *
         * @var boolean
         */
        const ENABLED = false;
        /**
         * Proxy support enabled default value.
         *
         * @var boolean
         */
        const PROXY_SUPPORT = false;
        /**
         * Default amount of max requests allowed for the defined timeframe.
         *
         * @var int
         */
        const LIMIT = 25;
        /**
         * Default time in seconds before rate limits are reset.
         *
         * @var int
         */
        const SECONDS = 10;
        /**
         * Gets a cache prefix.
         *
         * @param string $action_id Identifier of the action.
         * @return string
         */
        protected static function get_cache_key($action_id)
        {
        }
        /**
         * Get current rate limit row from DB and normalize types. This query is not cached, and returns
         * a new rate limit row if none exists.
         *
         * @param string $action_id Identifier of the action.
         * @return object Object containing reset and remaining.
         */
        protected static function get_rate_limit_row($action_id)
        {
        }
        /**
         * Returns current rate limit values using cache where possible.
         *
         * @param string $action_id Identifier of the action.
         * @return object
         */
        public static function get_rate_limit($action_id)
        {
        }
        /**
         * If exceeded, seconds until reset.
         *
         * @param string $action_id Identifier of the action.
         *
         * @return bool|int
         */
        public static function is_exceeded_retry_after($action_id)
        {
        }
        /**
         * Sets the rate limit delay in seconds for action with identifier $id.
         *
         * @param string $action_id Identifier of the action.
         * @return object Current rate limits.
         */
        public static function update_rate_limit($action_id)
        {
        }
        /**
         * Retrieve a cached store api rate limit.
         *
         * @param string $action_id Identifier of the action.
         * @return bool|object
         */
        protected static function get_cached($action_id)
        {
        }
        /**
         * Cache a rate limit.
         *
         * @param string $action_id Identifier of the action.
         * @param object $current_limit Current limit object with expiry and retries remaining.
         * @return bool
         */
        protected static function set_cache($action_id, $current_limit)
        {
        }
        /**
         * Return options for Rate Limits, to be returned by the "woocommerce_store_api_rate_limit_options" filter.
         *
         * @return object Default options.
         */
        public static function get_options()
        {
        }
        /**
         * Gets a single option through provided name.
         *
         * @param string $option Option name.
         *
         * @return mixed
         */
        public static function get_option($option)
        {
        }
    }
    /**
     * ValidationUtils class.
     * Helper class which validates and update customer info.
     */
    class ValidationUtils
    {
        /**
         * Get list of states for a country.
         *
         * @param string $country Country code.
         * @return array Array of state names indexed by state keys.
         */
        public function get_states_for_country($country)
        {
        }
        /**
         * Validate provided state against a countries list of defined states.
         *
         * If there are no defined states for a country, any given state is valid.
         *
         * @param string $state State name or code (sanitized).
         * @param string $country Country code.
         * @return boolean Valid or not valid.
         */
        public function validate_state($state, $country)
        {
        }
        /**
         * Format a state based on the country. If country has defined states, will return a valid upper case state code.
         *
         * @param string $state State name or code (sanitized).
         * @param string $country Country code.
         * @return string
         */
        public function format_state($state, $country)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Templates {
    /**
     * AbstractPageTemplate class.
     *
     * Shared logic for page templates.
     *
     * @internal
     */
    abstract class AbstractPageTemplate
    {
        /**
         * Page Template functionality is only initialized when using a block theme.
         */
        public function __construct()
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * Returns the template slug.
         *
         * @return string
         */
        public static abstract function get_slug();
        /**
         * Returns the page object assigned to this template/page.
         *
         * @return \WP_Post|null Post object or null.
         */
        protected abstract function get_placeholder_page();
        /**
         * Should return true on pages/endpoints/routes where the template should be shown.
         *
         * @return boolean
         */
        protected abstract function is_active_template();
        /**
         * Should return the title of the page, or an empty string if the page title should not be changed.
         *
         * @return string
         */
        public static function get_template_title()
        {
        }
        /**
         * When the page should be displaying the template, add it to the hierarchy.
         *
         * This places the template name e.g. `cart`, at the beginning of the template hierarchy array. The hook priority
         * is 1 to ensure it runs first; other consumers e.g. extensions, could therefore inject their own template instead
         * of this one when using the default priority of 10.
         *
         * @param array $templates Templates that match the pages_template_hierarchy.
         */
        public function page_template_hierarchy($templates)
        {
        }
        /**
         * Filter the page title when the template is active.
         *
         * @param string $title Page title.
         * @return string
         */
        public function page_template_title($title)
        {
        }
    }
    /**
     * AbstractTemplateCompatibility class.
     *
     * To bridge the gap on compatibility with PHP hooks and blockified templates.
     *
     * @internal
     */
    abstract class AbstractTemplateCompatibility
    {
        /**
         * The data of supported hooks, containing the hook name, the block name,
         * position, and the callbacks.
         *
         * @var array $hook_data The hook data.
         */
        protected $hook_data;
        /**
         * Initialization method.
         */
        public function init()
        {
        }
        /**
         * Update the render block data to inject our custom attribute needed to
         * determine which blocks belong to an inherited Products block.
         *
         * @param array         $parsed_block The block being rendered.
         * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
         * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
         *
         * @return array
         */
        public abstract function update_render_block_data($parsed_block, $source_block, $parent_block);
        /**
         * Inject hooks to rendered content of corresponding blocks.
         *
         * @param mixed $block_content The rendered block content.
         * @param mixed $block         The parsed block data.
         * @return string
         */
        public abstract function inject_hooks($block_content, $block);
        /**
         * The hook data to inject to the rendered content of blocks. This also
         * contains hooked functions that will be removed by remove_default_hooks.
         *
         * The array format:
         * [
         *   <hook-name> => [
         *     block_names => [ <block-name>, ... ],
         *     position => before|after,
         *     hooked => [
         *       <function-name> => <priority>,
         *        ...
         *     ],
         *  ],
         * ]
         * Where:
         * - hook-name is the name of the hook that will be replaced.
         * - block-names is the array block names that hook will be attached to.
         * - position is the position of the block relative to the hook.
         * - hooked is an array of functions hooked to the hook that will be
         *   replaced. The key is the function name and the value is the
         *   priority.
         */
        protected abstract function set_hook_data();
        /**
         * Remove the default callback added by WooCommerce. We replaced these
         * callbacks by blocks so we have to remove them to prevent duplicated
         * content.
         */
        protected function remove_default_hooks()
        {
        }
        /**
         * Get the buffer content of the hooks to append/prepend to render content.
         *
         * @param array  $hooks    The hooks to be rendered.
         * @param string $position The position of the hooks.
         *
         * @return string
         */
        protected function get_hooks_buffer($hooks, $position)
        {
        }
    }
    /**
     * ArchiveProductTemplatesCompatibility class.
     *
     * To bridge the gap on compatibility with PHP hooks and Product Archive blockified templates.
     *
     * @internal
     */
    class ArchiveProductTemplatesCompatibility extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplateCompatibility
    {
        /**
         * The custom ID of the loop item block as the replacement of the core/null block.
         */
        const LOOP_ITEM_ID = 'product-loop-item';
        /**
         * The data of supported hooks, containing the hook name, the block name,
         * position, and the callbacks.
         *
         * @var array $hook_data The hook data.
         */
        protected $hook_data;
        /**
         * Update the render block data to inject our custom attribute needed to
         * determine which blocks belong to an inherited Products block.
         *
         * @param array         $parsed_block The block being rendered.
         * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
         * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
         *
         * @return array
         */
        public function update_render_block_data($parsed_block, $source_block, $parent_block)
        {
        }
        /**
         * Inject hooks to rendered content of corresponding blocks.
         *
         * @param mixed $block_content The rendered block content.
         * @param mixed $block         The parsed block data.
         * @return string
         */
        public function inject_hooks($block_content, $block)
        {
        }
        /**
         * The hook data to inject to the rendered content of blocks. This also
         * contains hooked functions that will be removed by remove_default_hooks.
         *
         * The array format:
         * [
         *   <hook-name> => [
         *     block_name => <block-name>,
         *     position => before|after,
         *     hooked => [
         *       <function-name> => <priority>,
         *        ...
         *     ],
         *     permanently_removed_actions => [
         *         <function-name>
         *    ]
         *  ],
         * ]
         * Where:
         * - hook-name is the name of the hook that will be replaced.
         * - block-name is the name of the block that will replace the hook.
         * - position is the position of the block relative to the hook.
         * - hooked is an array of functions hooked to the hook that will be
         *   replaced. The key is the function name and the value is the
         *   priority.
         * - permanently_removed_actions is an array of functions that we do not want to re-add after they have been removed to avoid duplicate content with the Products block and its inner blocks.
         */
        protected function set_hook_data()
        {
        }
        /**
         * Check if current page is a product archive template.
         */
        private function is_archive_template()
        {
        }
        /**
         * Loop through inner blocks recursively to find the Products blocks that
         * inherits query from template.
         *
         * @param array $block Parsed block data.
         */
        private function inner_blocks_walker(&$block)
        {
        }
        /**
         * Restore default hooks except the ones that are not supposed to be re-added.
         */
        private function restore_default_hooks()
        {
        }
        /**
         * Check if block is within the product-query namespace
         *
         * @param array $block Parsed block data.
         */
        private function is_block_within_namespace($block)
        {
        }
        /**
         * Check if block has isInherited attribute asigned
         *
         * @param array $block Parsed block data.
         */
        private function is_block_inherited($block)
        {
        }
        /**
         * The core/post-template has two different block names:
         * - core/post-template when the wrapper is rendered.
         * - core/null when the loop item is rendered.
         *
         * @param array $block Parsed block data.
         */
        private function is_null_post_template($block)
        {
        }
        /**
         * Check if block is a Post template
         *
         * @param string $block_name Block name.
         */
        private function is_post_template($block_name)
        {
        }
        /**
         * Check if block is a Product Template
         *
         * @param string $block_name Block name.
         */
        private function is_product_template($block_name)
        {
        }
        /**
         * Check if block is eaither a Post template or Product Template
         *
         * @param string $block_name Block name.
         */
        private function is_post_or_product_template($block_name)
        {
        }
        /**
         * Check if the block is a Products block that inherits query from template.
         *
         * @param array $block Parsed block data.
         */
        private function is_products_block_with_inherit_query($block)
        {
        }
        /**
         * Check if the block is a Product Collection block that inherits query from template.
         *
         * @param array $block Parsed block data.
         */
        private function is_product_collection_block_with_inherit_query($block)
        {
        }
        /**
         * Recursively inject the custom attribute to all nested blocks.
         *
         * @param array $block Parsed block data.
         */
        private function inject_attribute(&$block)
        {
        }
    }
    /**
     * CartTemplate class.
     *
     * @internal
     */
    class CartTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
    {
        /**
         * Template slug.
         *
         * @return string
         */
        public static function get_slug()
        {
        }
        /**
         * Returns the page object assigned to this template/page.
         *
         * @return \WP_Post|null Post object or null.
         */
        protected function get_placeholder_page()
        {
        }
        /**
         * True when viewing the cart page or cart endpoint.
         *
         * @return boolean
         */
        protected function is_active_template()
        {
        }
        /**
         * When the page should be displaying the template, add it to the hierarchy.
         *
         * This places the template name e.g. `cart`, at the beginning of the template hierarchy array. The hook priority
         * is 1 to ensure it runs first; other consumers e.g. extensions, could therefore inject their own template instead
         * of this one when using the default priority of 10.
         *
         * @param array $templates Templates that match the pages_template_hierarchy.
         */
        public function page_template_hierarchy($templates)
        {
        }
    }
    /**
     * CheckoutHeader Template class.
     *
     * @internal
     */
    class CheckoutHeaderTemplate
    {
        const SLUG = 'checkout-header';
    }
    /**
     * CheckoutTemplate class.
     *
     * @internal
     */
    class CheckoutTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
    {
        /**
         * Template slug.
         *
         * @return string
         */
        public static function get_slug()
        {
        }
        /**
         * Returns the page object assigned to this template/page.
         *
         * @return \WP_Post|null Post object or null.
         */
        protected function get_placeholder_page()
        {
        }
        /**
         * True when viewing the checkout page or checkout endpoint.
         *
         * @return boolean
         */
        protected function is_active_template()
        {
        }
        /**
         * When the page should be displaying the template, add it to the hierarchy.
         *
         * This places the template name e.g. `cart`, at the beginning of the template hierarchy array. The hook priority
         * is 1 to ensure it runs first; other consumers e.g. extensions, could therefore inject their own template instead
         * of this one when using the default priority of 10.
         *
         * @param array $templates Templates that match the pages_template_hierarchy.
         */
        public function page_template_hierarchy($templates)
        {
        }
    }
    /**
     * ClassicTemplatesCompatibility class.
     *
     * To bridge the gap on compatibility with widget blocks and classic PHP core templates.
     *
     * @internal
     */
    class ClassicTemplatesCompatibility
    {
        /**
         * Instance of the asset data registry.
         *
         * @var AssetDataRegistry
         */
        protected $asset_data_registry;
        /**
         * Constructor.
         *
         * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * Executes the methods which set the necessary data needed for filter blocks to work correctly as widgets in Classic templates.
         *
         * @return void
         */
        public function set_classic_template_data()
        {
        }
        /**
         * This method passes the value `has_filterable_products` to the front-end for product archive pages,
         * so that widget product filter blocks are aware of the context they are in and can render accordingly.
         *
         * @return void
         */
        public function set_filterable_product_data()
        {
        }
        /**
         * This method passes the value `is_rendering_php_template` to the front-end of Classic themes,
         * so that widget product filter blocks are aware of how to filter the products.
         *
         * This data only matters on WooCommerce product archive pages.
         * On non-archive pages the merchant could be using the All Products block which is not a PHP template.
         *
         * @return void
         */
        public function set_php_template_data()
        {
        }
    }
    /**
     * MiniCartTemplate class.
     *
     * @internal
     */
    class MiniCartTemplate
    {
        const SLUG = 'mini-cart';
    }
    /**
     * OrderConfirmationTemplate class.
     *
     * @internal
     */
    class OrderConfirmationTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
    {
        /**
         * Template slug.
         *
         * @return string
         */
        public static function get_slug()
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * Remove edit page from admin bar.
         */
        public function remove_edit_page_link()
        {
        }
        /**
         * Returns the page object assigned to this template/page.
         *
         * @return \WP_Post|null Post object or null.
         */
        protected function get_placeholder_page()
        {
        }
        /**
         * True when viewing the Order Received endpoint.
         *
         * @return boolean
         */
        protected function is_active_template()
        {
        }
        /**
         * Should return the title of the page.
         *
         * @return string
         */
        public static function get_template_title()
        {
        }
    }
    /**
     * ProductAttributeTemplate class.
     *
     * @internal
     */
    class ProductAttributeTemplate
    {
        const SLUG = 'taxonomy-product_attribute';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * Renders the Product by Attribute template for product attributes taxonomy pages.
         *
         * @param array $templates Templates that match the product attributes taxonomy.
         */
        public function update_taxonomy_template_hierarchy($templates)
        {
        }
    }
    /**
     * ProductSearchResultsTemplate class.
     *
     * @internal
     */
    class ProductSearchResultsTemplate
    {
        const SLUG = 'product-search-results';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialization method.
         */
        protected function init()
        {
        }
        /**
         * When the search is for products and a block theme is active, render the Product Search Template.
         *
         * @param array $templates Templates that match the search hierarchy.
         */
        public function update_search_template_hierarchy($templates)
        {
        }
    }
    /**
     * SingleProductTemplae class.
     *
     * @internal
     */
    class SingleProductTemplate
    {
        /**
         * Replace the first single product template block with the password form. Remove all other single product template blocks.
         *
         * @param array   $parsed_blocks Array of parsed block objects.
         * @param boolean $is_already_replaced If the password form has already been added.
         * @return array Parsed blocks
         */
        private static function replace_first_single_product_template_block_with_password_form($parsed_blocks, $is_already_replaced)
        {
        }
        /**
         * Add password form to the Single Product Template.
         *
         * @param string $content The content of the template.
         * @return string
         */
        public static function add_password_form($content)
        {
        }
    }
    /**
     * SingleProductTemplateCompatibility class.
     *
     * To bridge the gap on compatibility with PHP hooks and Single Product templates.
     *
     * @internal
     */
    class SingleProductTemplateCompatibility extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplateCompatibility
    {
        const IS_FIRST_BLOCK = '__wooCommerceIsFirstBlock';
        const IS_LAST_BLOCK = '__wooCommerceIsLastBlock';
        /**
         * Inject hooks to rendered content of corresponding blocks.
         *
         * @param mixed $block_content The rendered block content.
         * @param mixed $block         The parsed block data.
         * @return string
         */
        public function inject_hooks($block_content, $block)
        {
        }
        /**
         * Inject custom hooks to the first and last blocks.
         * Since that there is a custom logic for the first and last block, we have to inject the hooks manually.
         * The first block supports the following hooks:
         * woocommerce_before_single_product
         * woocommerce_before_single_product_summary
         * woocommerce_single_product_summary
         *
         * The last block supports the following hooks:
         * woocommerce_after_single_product
         *
         * @param mixed $block_content The rendered block content.
         * @param mixed $block         The parsed block data.
         * @param array $block_hooks   The hooks that should be injected to the block.
         * @return string
         */
        private function inject_hook_to_first_and_last_blocks($block_content, $block, $block_hooks)
        {
        }
        /**
         * Update the render block data to inject our custom attribute needed to
         * determine which is the first block of the Single Product Template.
         *
         * @param array         $parsed_block The block being rendered.
         * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
         * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
         *
         * @return array
         */
        public function update_render_block_data($parsed_block, $source_block, $parent_block)
        {
        }
        /**
         * Set supported hooks.
         */
        protected function set_hook_data()
        {
        }
        /**
         * Add compatibility layer to the first and last block of the Single Product Template.
         *
         * @param string $template_content Template.
         * @return string
         */
        public static function add_compatibility_layer($template_content)
        {
        }
        /**
         * For compatibility reason, we need to wrap the Single Product template in a div with specific class.
         * For more details, see https://github.com/woocommerce/woocommerce-blocks/issues/8314.
         *
         * @param string $template_content Template Content.
         * @return array Wrapped template content inside a div.
         */
        private static function wrap_single_product_template($template_content)
        {
        }
        /**
         * Add custom attributes to the first group block and last group block that wrap Single Product Template blocks.
         *
         * @param array $wrapped_blocks Wrapped blocks.
         * @return array
         */
        private static function inject_custom_attributes_to_first_and_last_block_single_product_template($wrapped_blocks)
        {
        }
        /**
         * Wrap all the blocks inside the template in a group block.
         *
         * @param array $blocks Array of parsed block objects.
         * @return array Group block with the blocks inside.
         */
        private static function create_wrap_block_group($blocks)
        {
        }
        /**
         * Check if the Single Product template has a single product template block:
         * woocommerce/product-gallery-image, woocommerce/product-details, woocommerce/add-to-cart-form]
         *
         * @param array $parsed_blocks Array of parsed block objects.
         * @return bool True if the template has a single product template block, false otherwise.
         */
        private static function has_single_product_template_blocks($parsed_blocks)
        {
        }
        /**
         * Group blocks in this way:
         * B1 + TP1 + B2 + B3 + B4 + TP2 + B5
         * (B = Block, TP = Template Part)
         * becomes:
         * [[B1], [TP1], [B2, B3, B4], [TP2], [B5]]
         *
         * @param array $parsed_blocks Array of parsed block objects.
         * @return array Array of blocks grouped by template part.
         */
        private static function group_blocks($parsed_blocks)
        {
        }
        /**
         * Inject the hooks after the div wrapper.
         *
         * @param string $block_content Block Content.
         * @param array  $hooks Hooks to inject.
         * @return array
         */
        private function inject_hooks_after_the_wrapper($block_content, $hooks)
        {
        }
        /**
         * Plain custom HTML block is parsed as block with an empty blockName with a filled innerHTML.
         *
         * @param array $block Parse block.
         * @return bool
         */
        private static function is_custom_html($block)
        {
        }
        /**
         * Serialize template.
         *
         * @param array $parsed_blocks Parsed blocks.
         * @return string
         */
        private static function serialize_blocks($parsed_blocks)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Utils {
    /**
     * Utility methods used for migrating pages to block templates.
     * {@internal This class and its methods should only be used within the BlockTemplateController.php and is not intended for public use.}
     */
    class BlockTemplateMigrationUtils
    {
        /**
         * Check if a page has been migrated to a template.
         *
         * @param string $page_id Page ID.
         * @return boolean
         */
        public static function has_migrated_page($page_id)
        {
        }
        /**
         * Stores an option to indicate that a template has been migrated.
         *
         * @param string $page_id Page ID.
         * @param string $status Status of the migration.
         */
        public static function set_has_migrated_page($page_id, $status = 'success')
        {
        }
        /**
         * Migrates a page to a template if needed.
         *
         * @param string $template_slug Template slug.
         */
        public static function migrate_page($template_slug)
        {
        }
        /**
         * Prepare default page template.
         *
         * @param string $template_slug Template slug.
         * @return string
         */
        protected static function get_default_template($template_slug)
        {
        }
        /**
         * Create a custom template with given content.
         *
         * @param \WP_Block_Template|null $template Template object.
         * @param string                  $content Template content.
         * @return boolean Success.
         */
        protected static function create_custom_template($template, $content)
        {
        }
        /**
         * Returns the requested template part.
         *
         * @param string $part The part to return.
         * @return string
         */
        protected static function get_block_template_part($part)
        {
        }
    }
    /**
     * Utility methods used for serving block templates from WooCommerce Blocks.
     * {@internal This class and its methods should only be used within the BlockTemplateController.php and is not intended for public use.}
     */
    class BlockTemplateUtils
    {
        const ELIGIBLE_FOR_ARCHIVE_PRODUCT_FALLBACK = array('taxonomy-product_cat', 'taxonomy-product_tag', \Automattic\WooCommerce\Blocks\Templates\ProductAttributeTemplate::SLUG);
        /**
         * Directory names for block templates
         *
         * Directory names conventions for block templates have changed with Gutenberg 12.1.0,
         * however, for backwards-compatibility, we also keep the older conventions, prefixed
         * with `DEPRECATED_`.
         *
         * @var array {
         *     @var string DEPRECATED_TEMPLATES  Old directory name of the block templates directory.
         *     @var string DEPRECATED_TEMPLATE_PARTS  Old directory name of the block template parts directory.
         *     @var string TEMPLATES_DIR_NAME  Directory name of the block templates directory.
         *     @var string TEMPLATE_PARTS_DIR_NAME  Directory name of the block template parts directory.
         * }
         */
        const DIRECTORY_NAMES = array('DEPRECATED_TEMPLATES' => 'block-templates', 'DEPRECATED_TEMPLATE_PARTS' => 'block-template-parts', 'TEMPLATES' => 'templates', 'TEMPLATE_PARTS' => 'parts');
        const TEMPLATES_ROOT_DIR = 'templates';
        /**
         * WooCommerce plugin slug
         *
         * This is used to save templates to the DB which are stored against this value in the wp_terms table.
         *
         * @var string
         */
        const PLUGIN_SLUG = 'woocommerce/woocommerce';
        /**
         * Deprecated WooCommerce plugin slug
         *
         * For supporting users who have customized templates under the incorrect plugin slug during the first release.
         * More context found here: https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/5423.
         *
         * @var string
         */
        const DEPRECATED_PLUGIN_SLUG = 'woocommerce';
        /**
         * Returns an array containing the references of
         * the passed blocks and their inner blocks.
         *
         * @param array $blocks array of blocks.
         *
         * @return array block references to the passed blocks and their inner blocks.
         */
        public static function flatten_blocks(&$blocks)
        {
        }
        /**
         * Parses wp_template content and injects the current theme's
         * stylesheet as a theme attribute into each wp_template_part
         *
         * @param string $template_content serialized wp_template content.
         *
         * @return string Updated wp_template content.
         */
        public static function inject_theme_attribute_in_content($template_content)
        {
        }
        /**
         * Build a unified template object based a post Object.
         * Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
         *
         * @param \WP_Post $post Template post.
         *
         * @return \WP_Block_Template|\WP_Error Template.
         */
        public static function build_template_result_from_post($post)
        {
        }
        /**
         * Build a unified template object based on a theme file.
         * Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
         *
         * @param array|object $template_file Theme file.
         * @param string       $template_type wp_template or wp_template_part.
         *
         * @return \WP_Block_Template Template.
         */
        public static function build_template_result_from_file($template_file, $template_type)
        {
        }
        /**
         * Build a new template object so that we can make Woo Blocks default templates available in the current theme should they not have any.
         *
         * @param string $template_file Block template file path.
         * @param string $template_type wp_template or wp_template_part.
         * @param string $template_slug Block template slug e.g. single-product.
         * @param bool   $template_is_from_theme If the block template file is being loaded from the current theme instead of Woo Blocks.
         *
         * @return object Block template object.
         */
        public static function create_new_block_template_object($template_file, $template_type, $template_slug, $template_is_from_theme = false)
        {
        }
        /**
         * Finds all nested template part file paths in a theme's directory.
         *
         * @param string $base_directory The theme's file path.
         * @return array $path_list A list of paths to all template part files.
         */
        public static function get_template_paths($base_directory)
        {
        }
        /**
         * Gets the directory where templates of a specific template type can be found.
         *
         * @param string $template_type wp_template or wp_template_part.
         *
         * @return string
         */
        public static function get_templates_directory($template_type = 'wp_template')
        {
        }
        /**
         * Returns template titles.
         *
         * @param string $template_slug The templates slug (e.g. single-product).
         * @return string Human friendly title.
         */
        public static function get_block_template_title($template_slug)
        {
        }
        /**
         * Returns template descriptions.
         *
         * @param string $template_slug The templates slug (e.g. single-product).
         * @return string Template description.
         */
        public static function get_block_template_description($template_slug)
        {
        }
        /**
         * Returns a filtered list of plugin template types, containing their
         * localized titles and descriptions.
         *
         * @return array The plugin template types.
         */
        public static function get_plugin_block_template_types()
        {
        }
        /**
         * Converts template paths into a slug
         *
         * @param string $path The template's path.
         * @return string slug
         */
        public static function generate_template_slug_from_path($path)
        {
        }
        /**
         * Gets the first matching template part within themes directories
         *
         * Since [Gutenberg 12.1.0](https://github.com/WordPress/gutenberg/releases/tag/v12.1.0), the conventions for
         * block templates and parts directory has changed from `block-templates` and `block-templates-parts`
         * to `templates` and `parts` respectively.
         *
         * This function traverses all possible combinations of directory paths where a template or part
         * could be located and returns the first one which is readable, prioritizing the new convention
         * over the deprecated one, but maintaining that one for backwards compatibility.
         *
         * @param string $template_slug  The slug of the template (i.e. without the file extension).
         * @param string $template_type  Either `wp_template` or `wp_template_part`.
         *
         * @return string|null  The matched path or `null` if no match was found.
         */
        public static function get_theme_template_path($template_slug, $template_type = 'wp_template')
        {
        }
        /**
         * Check if the theme has a template. So we know if to load our own in or not.
         *
         * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
         * @return boolean
         */
        public static function theme_has_template($template_name)
        {
        }
        /**
         * Check if the theme has a template. So we know if to load our own in or not.
         *
         * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
         * @return boolean
         */
        public static function theme_has_template_part($template_name)
        {
        }
        /**
         * Checks to see if they are using a compatible version of WP, or if not they have a compatible version of the Gutenberg plugin installed.
         *
         * @param string $template_type Optional. Template type: `wp_template` or `wp_template_part`.
         *                              Default `wp_template`.
         * @return boolean
         */
        public static function supports_block_templates($template_type = 'wp_template')
        {
        }
        /**
         * Retrieves a single unified template object using its id.
         *
         * @param string $id            Template unique identifier (example: theme_slug//template_slug).
         * @param string $template_type Optional. Template type: `wp_template` or 'wp_template_part`.
         *                              Default `wp_template`.
         *
         * @return WP_Block_Template|null Template.
         */
        public static function get_block_template($id, $template_type)
        {
        }
        /**
         * Checks if we can fall back to the `archive-product` template for a given slug.
         *
         * `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-product_attribute` templates can
         *  generally use the `archive-product` as a fallback if there are no specific overrides.
         *
         * @param string $template_slug Slug to check for fallbacks.
         * @return boolean
         */
        public static function template_is_eligible_for_product_archive_fallback($template_slug)
        {
        }
        /**
         * Checks if we can fall back to an `archive-product` template stored on the db for a given slug.
         *
         * @param string $template_slug Slug to check for fallbacks.
         * @param array  $db_templates Templates that have already been found on the db.
         * @return boolean
         */
        public static function template_is_eligible_for_product_archive_fallback_from_db($template_slug, $db_templates)
        {
        }
        /**
         * Gets the `archive-product` fallback template stored on the db for a given slug.
         *
         * @param string $template_slug Slug to check for fallbacks.
         * @param array  $db_templates Templates that have already been found on the db.
         * @return boolean|object
         */
        public static function get_fallback_template_from_db($template_slug, $db_templates)
        {
        }
        /**
         * Checks if we can fall back to the `archive-product` file template for a given slug in the current theme.
         *
         * `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-attribute` templates can
         *  generally use the `archive-product` as a fallback if there are no specific overrides.
         *
         * @param string $template_slug Slug to check for fallbacks.
         * @return boolean
         */
        public static function template_is_eligible_for_product_archive_fallback_from_theme($template_slug)
        {
        }
        /**
         * Sets the `has_theme_file` to `true` for templates with fallbacks
         *
         * There are cases (such as tags, categories and attributes) in which fallback templates
         * can be used; so, while *technically* the theme doesn't have a specific file
         * for them, it is important that we tell Gutenberg that we do, in fact,
         * have a theme file (i.e. the fallback one).
         *
         * **Note:** this function changes the array that has been passed.
         *
         * It returns `true` if anything was changed, `false` otherwise.
         *
         * @param array  $query_result Array of template objects.
         * @param object $template A specific template object which could have a fallback.
         *
         * @return boolean
         */
        public static function set_has_theme_file_if_fallback_is_available($query_result, $template)
        {
        }
        /**
         * Filter block templates by feature flag.
         *
         * @param WP_Block_Template[] $block_templates An array of block template objects.
         *
         * @return WP_Block_Template[] An array of block template objects.
         */
        public static function filter_block_templates_by_feature_flag($block_templates)
        {
        }
        /**
         * Removes templates that were added to a theme's block-templates directory, but already had a customised version saved in the database.
         *
         * @param \WP_Block_Template[]|\stdClass[] $templates List of templates to run the filter on.
         *
         * @return array List of templates with duplicates removed. The customised alternative is preferred over the theme default.
         */
        public static function remove_theme_templates_with_custom_alternative($templates)
        {
        }
        /**
         * Returns whether the blockified templates should be used or not.
         * First, we need to make sure WordPress version is higher than 6.1 (lowest that supports Products block).
         * Then, if the option is not stored on the db, we need to check if the current theme is a block one or not.
         *
         * @return boolean
         */
        public static function should_use_blockified_product_grid_templates()
        {
        }
        /**
         * Returns whether the passed `$template` has a title, and it's different from the slug.
         *
         * @param object $template The template object.
         * @return boolean
         */
        public static function template_has_title($template)
        {
        }
        /**
         * Returns whether the passed `$template` has the legacy template block.
         *
         * @param object $template The template object.
         * @return boolean
         */
        public static function template_has_legacy_template_block($template)
        {
        }
        /**
         * Gets the templates saved in the database.
         *
         * @param array  $slugs An array of slugs to retrieve templates for.
         * @param string $template_type wp_template or wp_template_part.
         *
         * @return int[]|\WP_Post[] An array of found templates.
         */
        public static function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
        {
        }
        /**
         * Gets the template part by slug
         *
         * @param string $slug The template part slug.
         *
         * @return string The template part content.
         */
        public static function get_template_part($slug)
        {
        }
    }
    /**
     * BlocksWpQuery query.
     *
     * Wrapper for WP Query with additional helper methods.
     * Allows query args to be set and parsed without doing running it, so that a cache can be used.
     *
     * @deprecated 2.5.0
     */
    class BlocksWpQuery extends \WP_Query
    {
        /**
         * Constructor.
         *
         * Sets up the WordPress query, if parameter is not empty.
         *
         * Unlike the constructor in WP_Query, this does not RUN the query.
         *
         * @param string|array $query URL query string or array of vars.
         */
        public function __construct($query = '')
        {
        }
        /**
         * Get cached posts, if a cache exists.
         *
         * A hash is generated using the array of query_vars. If doing custom queries via filters such as posts_where
         * (where the SQL query is manipulated directly) you can still ensure there is a unique hash by injecting custom
         * query vars via the parse_query filter. For example:
         *
         *      add_filter( 'parse_query', function( $wp_query ) {
         *           $wp_query->query_vars['my_custom_query_var'] = true;
         *      } );
         *
         * Doing so won't have any negative effect on the query itself, and it will cause the hash to change.
         *
         * @param string $transient_version Transient version to allow for invalidation.
         * @return WP_Post[]|int[] Array of post objects or post IDs.
         */
        public function get_cached_posts($transient_version = '')
        {
        }
    }
    /**
     * Class containing utility methods for dealing with the Cart and Checkout blocks.
     */
    class CartCheckoutUtils
    {
        /**
         * Checks if the default cart page is using the Cart block.
         *
         * @return bool true if the WC cart page is using the Cart block.
         */
        public static function is_cart_block_default()
        {
        }
        /**
         * Checks if the default checkout page is using the Checkout block.
         *
         * @return bool true if the WC checkout page is using the Checkout block.
         */
        public static function is_checkout_block_default()
        {
        }
        /**
         * Gets country codes, names, states, and locale information.
         *
         * @return array
         */
        public static function get_country_data()
        {
        }
        /**
         * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
         *
         * @param array $array Array of values to sort.
         * @return array Sorted array.
         */
        protected static function deep_sort_with_accents($array)
        {
        }
    }
    /**
     * Utility methods used for the Mini Cart block.
     */
    class MiniCartUtils
    {
        /**
         * Migrate attributes to color panel component format.
         *
         * @param array $attributes  Any attributes that currently are available from the block.
         * @return array Reformatted attributes that are compatible with the color panel component.
         */
        public static function migrate_attributes_to_color_panel($attributes)
        {
        }
    }
    /**
     * Utility methods used for the Product Gallery block.
     * {@internal This class and its methods are not intended for public use.}
     */
    class ProductGalleryUtils
    {
        /**
         * When requesting a full-size image, this function may return an array with a single image.
         * However, when requesting a non-full-size image, it will always return an array with multiple images.
         * This distinction is based on the image size needed for rendering purposes:
         * - "Full" size is used for the main product featured image.
         * - Non-full sizes are used for rendering thumbnails.
         *
         * @param int    $post_id Post ID.
         * @param string $size Image size.
         * @param array  $attributes Attributes.
         * @param string $wrapper_class Wrapper class.
         * @return array
         */
        public static function get_product_gallery_images($post_id, $size = 'full', $attributes = array(), $wrapper_class = '')
        {
        }
        /**
         * Get the product gallery image IDs.
         *
         * @param \WC_Product $product                      The product object to retrieve the gallery images for.
         * @param int         $max_number_of_visible_images The maximum number of visible images to return. Defaults to 8.
         * @param bool        $only_visible                 Whether to return only the visible images. Defaults to false.
         * @return array An array of unique image IDs for the product gallery.
         */
        public static function get_product_gallery_image_ids($product, $max_number_of_visible_images = 8, $only_visible = false)
        {
        }
    }
    /**
     * StyleAttributesUtils class used for getting class and style from attributes.
     */
    class StyleAttributesUtils
    {
        // Empty style array.
        const EMPTY_STYLE = ['class' => '', 'style' => '', 'value' => ''];
        /**
         * If color value is in preset format, convert it to a CSS var. Else return same value
         * For example:
         * "var:preset|color|pale-pink" -> "var(--wp--preset--color--pale-pink)"
         * "#98b66e" -> "#98b66e"
         *
         * @param string $color_value value to be processed.
         *
         * @return (string)
         */
        public static function get_color_value($color_value)
        {
        }
        /**
         * Get CSS value for color preset.
         *
         * @param string $preset_name Preset name.
         *
         * @return string CSS value for color preset.
         */
        public static function get_preset_value($preset_name)
        {
        }
        /**
         * If spacing value is in preset format, convert it to a CSS var. Else return same value
         * For example:
         * "var:preset|spacing|50" -> "var(--wp--preset--spacing--50)"
         * "50px" -> "50px"
         *
         * @param string $spacing_value value to be processed.
         *
         * @return (string)
         */
        public static function get_spacing_value($spacing_value)
        {
        }
        /**
         * Get class and style for align from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_align_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for background-color from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_background_color_class_and_style($attributes)
        {
        }
        /**
         * Join classes and styles while removing duplicates and null values.
         *
         * @param array $rules Array of classes or styles.
         * @return array
         */
        protected static function join_styles($rules)
        {
        }
        /**
         * Get class and style for border-color from attributes.
         *
         * Data passed to this function is not always consistent. It can be:
         * Linked - preset color: $attributes['borderColor'] => 'luminous-vivid-orange'.
         * Linked - custom color: $attributes['style']['border']['color'] => '#681228'.
         * Unlinked - preset color: $attributes['style']['border']['top']['color'] => 'var:preset|color|luminous-vivid-orange'
         * Unlinked - custom color: $attributes['style']['border']['top']['color'] => '#681228'.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_border_color_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for border-radius from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_border_radius_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for border width from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_border_width_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for border width from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_border_style_class_and_style($attributes)
        {
        }
        /**
         * Get space-separated classes from block attributes.
         *
         * @param array $attributes Block attributes.
         * @param array $properties Properties to get classes from.
         *
         * @return string Space-separated classes.
         */
        public static function get_classes_by_attributes($attributes, $properties = array())
        {
        }
        /**
         * Get class and style for font-family from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_font_family_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for font-size from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_font_size_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for font-style from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_font_style_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for font-weight from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_font_weight_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for letter-spacing from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_letter_spacing_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for line height from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_line_height_class_and_style($attributes)
        {
        }
        /**
         * Get a value from an array based on a path e.g style.elements.link
         *
         * @param array  $array Target array.
         * @param string $path Path joined by delimiter.
         * @param string $delimiter Chosen delimiter defaults to ".".
         * @return mixed
         */
        protected static function array_get_value_by_path(array &$array, $path, $delimiter = '.')
        {
        }
        /**
         * Get class and style for link-color from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_link_color_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for link-hover-color from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_link_hover_color_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for margin from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_margin_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for padding from attributes.
         *
         * @param array $attributes Block attributes.
         *
         * @return array
         */
        public static function get_padding_class_and_style($attributes)
        {
        }
        /**
         * Get space-separated style rules from block attributes.
         *
         * @param array $attributes Block attributes.
         * @param array $properties Properties to get styles from.
         *
         * @return string Space-separated style rules.
         */
        public static function get_styles_by_attributes($attributes, $properties = array())
        {
        }
        /**
         * Get class and style for text align from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_text_align_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for text-color from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_text_color_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for text-decoration from attributes.
         *
         * @param array $attributes Block attributes.
         *
         * @return array
         */
        public static function get_text_decoration_class_and_style($attributes)
        {
        }
        /**
         * Get class and style for text-transform from attributes.
         *
         * @param array $attributes Block attributes.
         * @return array
         */
        public static function get_text_transform_class_and_style($attributes)
        {
        }
        /**
         * Get classes and styles from attributes.
         *
         * Excludes link_color and link_hover_color since those should not apply to the container.
         *
         * @param array $attributes Block attributes.
         * @param array $properties Properties to get classes/styles from.
         * @param array $exclude Properties to exclude.
         * @return array
         */
        public static function get_classes_and_styles_by_attributes($attributes, $properties = array(), $exclude = array())
        {
        }
    }
    /**
     * Utils class
     */
    class Utils
    {
        /**
         * Compare the current WordPress version with a given version. It's a wrapper around `version-compare`
         * that additionally takes into account the suffix (like `-RC1`).
         * For example: version 6.3 is considered lower than 6.3-RC2, so you can do
         * wp_version_compare( '6.3', '>=' ) and that will return true for 6.3-RC2.
         *
         * @param string      $version The version to compare against.
         * @param string|null $operator Optional. The comparison operator. Defaults to null.
         * @return bool|int Returns true if the current WordPress version satisfies the comparison, false otherwise.
         */
        public static function wp_version_compare($version, $operator = null)
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
     */
    /**
     * Schedule an action to run one time
     *
     * @param int $timestamp When the job will run
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
     *
     * @return string The job ID
     */
    function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
    {
    }
    /**
     * Schedule a recurring action
     *
     * @param int $timestamp When the first instance of the job will run
     * @param int $interval_in_seconds How long to wait between runs
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
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
     * @param int $timestamp The schedule will start on or after this time
     * @param string $schedule A cron-link schedule string
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
     * @param string $hook The hook to trigger
     * @param array $args Arguments to pass when the hook triggers
     * @param string $group The group to assign this job to
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
     * @param string $hook The hook that the job will trigger
     * @param array $args Args that would have been passed to the job
     * @param string $group
     *
     * @deprecated 2.1.0
     */
    function wc_unschedule_action($hook, $args = array(), $group = '')
    {
    }
    /**
     * @param string $hook
     * @param array $args
     * @param string $group
     *
     * @deprecated 2.1.0
     *
     * @return int|bool The timestamp for the next occurrence, or false if nothing was found
     */
    function wc_next_scheduled_action($hook, $args = \NULL, $group = '')
    {
    }
    /**
     * Find scheduled actions
     *
     * @param array $args Possible arguments, with their default values:
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
     *        'order' => 'ASC'
     * @param string $return_format OBJECT, ARRAY_A, or ids
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
     * @param bool   $unique Whether the action should be unique.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID.
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
     * @param bool   $unique Whether the action should be unique.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID.
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
     * @param bool   $unique Whether the action should be unique.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID.
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
     * @param bool   $unique Whether the action should be unique.
     * @param int    $priority Lower values take precedence over higher values. Defaults to 10, with acceptable values falling in the range 0-255.
     *
     * @return int The action ID.
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
    /**
     * Print client-side navigation meta tag (hard-coded for now).
     */
    function woocommerce_interactivity_add_client_side_navigation_meta_tag()
    {
    }
    /**
     * Move interactive scripts to the footer. This is a temporary measure to make
     * it work with `wc_store` and it should be replaced with deferred scripts or
     * modules.
     */
    function woocommerce_interactivity_move_interactive_scripts_to_the_footer()
    {
    }
    /**
     * Register the Interactivity API runtime and make it available to be enqueued
     * as a dependency in interactive blocks.
     */
    function woocommerce_interactivity_register_runtime()
    {
    }
    /**
     * Merge data with the exsisting store.
     *
     * @param array $data Data that will be merged with the exsisting store.
     *
     * @return $data The current store data.
     */
    function wc_store($data = \null)
    {
    }
    /**
     * Register endpoint data under a specified namespace.
     *
     * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_endpoint_data()
     *
     * @param array $args Args to pass to register_endpoint_data.
     * @returns boolean|\WP_Error True on success, WP_Error on fail.
     */
    function woocommerce_store_api_register_endpoint_data($args)
    {
    }
    /**
     * Add callback functions that can be executed by the cart/extensions endpoint.
     *
     * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_update_callback()
     *
     * @param array $args Args to pass to register_update_callback.
     * @returns boolean|\WP_Error True on success, WP_Error on fail.
     */
    function woocommerce_store_api_register_update_callback($args)
    {
    }
    /**
     * Registers and validates payment requirements callbacks.
     *
     * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_payment_requirements()
     *
     * @param array $args Args to pass to register_payment_requirements.
     * @returns boolean|\WP_Error True on success, WP_Error on fail.
     */
    function woocommerce_store_api_register_payment_requirements($args)
    {
    }
    /**
     * Returns a formatter instance.
     *
     * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::get_formatter()
     *
     * @param string $name Formatter name.
     * @return Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
     */
    function woocommerce_store_api_get_formatter($name)
    {
    }
}