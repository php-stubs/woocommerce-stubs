<?php
/**
 * Generated stub declarations for WooCommerce.
 * @see https://woocommerce.com
 * @see https://github.com/php-stubs/woocommerce-stubs
 */

namespace {
    /**
     * Abstract Rest Controller Class
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends  WP_REST_Controller
     * @version  2.6.0
     */
    abstract class WC_REST_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Add the schema from additional fields to an schema array.
         *
         * The type of object is inferred from the passed schema.
         *
         * @param array $schema Schema array.
         *
         * @return array
         */
        protected function add_additional_fields_schema($schema)
        {
        }
        /**
         * Get normalized rest base.
         *
         * @return string
         */
        protected function get_normalized_rest_base()
        {
        }
        /**
         * Check batch limit.
         *
         * @param array $items Request items.
         * @return bool|WP_Error
         */
        protected function check_batch_limit($items)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Validate a text value for a text based setting.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_text_field($value, $setting)
        {
        }
        /**
         * Validate select based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_select_field($value, $setting)
        {
        }
        /**
         * Validate multiselect based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return array|WP_Error
         */
        public function validate_setting_multiselect_field($values, $setting)
        {
        }
        /**
         * Validate image_width based settings.
         *
         * @since 3.0.0
         * @param array $values Values.
         * @param array $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_image_width_field($values, $setting)
        {
        }
        /**
         * Validate radio based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_radio_field($value, $setting)
        {
        }
        /**
         * Validate checkbox based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string|WP_Error
         */
        public function validate_setting_checkbox_field($value, $setting)
        {
        }
        /**
         * Validate textarea based settings.
         *
         * @since 3.0.0
         * @param string $value Value.
         * @param array  $setting Setting.
         * @return string
         */
        public function validate_setting_textarea_field($value, $setting)
        {
        }
        /**
         * Add meta query.
         *
         * @since 3.0.0
         * @param array $args       Query args.
         * @param array $meta_query Meta query.
         * @return array
         */
        protected function add_meta_query($args, $meta_query)
        {
        }
        /**
         * Get the batch schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_public_batch_schema()
        {
        }
        /**
         * Gets an array of fields to be included on the response.
         *
         * Included fields are based on item schema and `_fields=` request argument.
         * Updated from WordPress 5.3, included into this class to support old versions.
         *
         * @since 3.5.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Fields to be included in the response.
         */
        public function get_fields_for_response($request)
        {
        }
    }
    /**
     * WC_REST_Posts_Controller
     *
     * @package Automattic/WooCommerce/RestApi
     * @version  2.6.0
     */
    abstract class WC_REST_Posts_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = '';
        /**
         * Controls visibility on frontend.
         *
         * @var string
         */
        protected $public = \false;
        /**
         * Check if a given request has access to read items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post Post Object.
         * @param WP_REST_Request $request WP_REST_Request Object.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Delete post.
         *
         * @param WP_Post $post Post object.
         */
        protected function delete_post($post)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given post.
         */
        protected function prepare_links($post, $request)
        {
        }
        /**
         * Determine the allowed query_vars for a get_items() response and
         * prepare for WP_Query.
         *
         * @param array           $prepared_args Prepared arguments.
         * @param WP_REST_Request $request Request object.
         * @return array          $query_args
         */
        protected function prepare_items_query($prepared_args = array(), $request = \null)
        {
        }
        /**
         * Get all the WP Query vars that are allowed for the API request.
         *
         * @return array
         */
        protected function get_allowed_query_vars()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
    }
    /**
     * WC_REST_CRUD_Controller class.
     *
     * @extends WC_REST_Posts_Controller
     */
    abstract class WC_REST_CRUD_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \false;
        /**
         * Get object.
         *
         * @param  int $id Object ID.
         * @return object WC_Data object or WP_Error object.
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get object permalink.
         *
         * @param  object $object Object.
         * @return string
         */
        protected function get_permalink($object)
        {
        }
        /**
         * Prepares the object for the REST response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        protected function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single post.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get objects.
         *
         * @since  3.0.0
         * @param  array $query_args Query args.
         * @return array
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Coupons_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Coupons_V2_Controller
     */
    class WC_REST_Coupons_Controller extends \WC_REST_Coupons_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Coupons controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Coupons_Controller
     */
    class Coupons extends \WC_REST_Coupons_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add coupon code searching to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the code search option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Add code searching to the WP Query
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_search_code_filter($where, $wp_query)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * WooCommerce Reports exportable controller interface.
     *
     * @since 3.5.0
     */
    interface ExportableInterface
    {
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns();
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Value.
         */
        public function prepare_item_for_export($item);
    }
}
namespace {
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Reports_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports';
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read reports.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass $report Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V1_Controller
     */
    class WC_REST_Reports_V2_Controller extends \WC_REST_Reports_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Reports controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_V2_Controller
     */
    class WC_REST_Reports_Controller extends \WC_REST_Reports_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * ExportableTraits class.
     */
    trait ExportableTraits
    {
        /**
         * Format numbers for CSV using store precision setting.
         *
         * @param string|float $value Numeric value.
         * @return string Formatted value.
         */
        public static function csv_number_format($value)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers {
    /**
     * REST API Reports customers controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get one report.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Customers controller.
     *
     * @package WooCommerce Admin/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Customers\Controller
     */
    class Customers extends \Automattic\WooCommerce\Admin\API\Reports\Customers\Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace {
    /**
     * REST API Data controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read site data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read site settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Return the list of data resources.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a data resource object for serialization.
         *
         * @param stdClass        $resource Resource data.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($resource, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the data index schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Data controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class Data extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Return the list of data resources.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
    }
}
namespace {
    /**
     * REST API Data countries controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Countries_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/countries';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Get a list of countries and states.
         *
         * @param  string          $country_code Country code.
         * @param  WP_REST_Request $request      Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_country($country_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all countries.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of states for a given country.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * REST API Data countries controller class.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Countries_Controller
     */
    class DataCountries extends \WC_REST_Data_Countries_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
    }
    /**
     * Data Download IP controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class DataDownloadIPs extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/download-ips';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the download IPs matching the passed parameters.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given object.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Init class.
     */
    class Init
    {
        /**
         * Boostrap REST API.
         */
        public function __construct()
        {
        }
        /**
         * Init REST API.
         */
        public function rest_api_init()
        {
        }
        /**
         * Adds data stores.
         *
         * @param array $data_stores List of data stores.
         * @return array
         */
        public static function add_data_stores($data_stores)
        {
        }
        /**
         * Add the currency symbol (in addition to currency code) to each Order
         * object in REST API responses. For use in formatCurrency().
         *
         * @param {WP_REST_Response} $response REST response object.
         * @returns {WP_REST_Response}
         */
        public static function add_currency_symbol_to_order_response($response)
        {
        }
    }
    /**
     * Leaderboards controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class Leaderboards extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'leaderboards';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the data for the coupons leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_coupons_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the categories leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_categories_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the customers leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_customers_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get the data for the products leaderboard.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         */
        public function get_products_leaderboard($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Get an array of all leaderboards.
         *
         * @param int    $per_page Number of rows.
         * @param string $after Items after date.
         * @param string $before Items before date.
         * @param string $persisted_query URL query string.
         * @return array
         */
        public function get_leaderboards($per_page, $after, $before, $persisted_query)
        {
        }
        /**
         * Return all leaderboards.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Returns a list of allowed leaderboards.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_allowed_items($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get schema for the list of allowed leaderboards.
         *
         * @return array $schema
         */
        public function get_public_allowed_item_schema()
        {
        }
    }
    /**
     * REST API Admin Notes controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_CRUD_Controller
     */
    class Notes extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'admin/notes';
        /**
         * Register the routes for admin notes.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single note.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all notes.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Check whether a given request has permission to read a single note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Update a single note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Prepare a path or query for serialization to the client.
         *
         * @param string $query The query, path, or URL to transform.
         * @return string A fully formed URL.
         */
        public function prepare_query_for_response($query)
        {
        }
        /**
         * Prepare a note object for serialization.
         *
         * @param array           $data Note data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($data, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the note's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Admin Note Action controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_CRUD_Controller
     */
    class NoteActions extends \Automattic\WooCommerce\Admin\API\Notes
    {
        /**
         * Register the routes for admin notes.
         */
        public function register_routes()
        {
        }
        /**
         * Trigger a note action.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function trigger_note_action($request)
        {
        }
    }
    /**
     * Onboarding Plugins Controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class OnboardingPlugins extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/plugins';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to manage plugins.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Installs the requested plugin.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Plugin Status
         */
        public function install_plugin($request)
        {
        }
        /**
         * Returns a list of active plugins.
         *
         * @return array Active plugins
         */
        public function active_plugins()
        {
        }
        /**
         * Activate the requested plugin.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Plugin Status
         */
        public function activate_plugins($request)
        {
        }
        /**
         * Generates a Jetpack Connect URL.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Connection URL for Jetpack
         */
        public function connect_jetpack($request)
        {
        }
        /**
         *  Kicks off the WCCOM Connect process.
         *
         * @return WP_Error|array Connection URL for WooCommerce.com
         */
        public function request_wccom_connect()
        {
        }
        /**
         * Finishes connecting to WooCommerce.com.
         *
         * @param  object $rest_request Request details.
         * @return WP_Error|array Contains success status.
         */
        public function finish_wccom_connect($rest_request)
        {
        }
        /**
         * Returns a URL that can be used to connect to PayPal.
         *
         * @return WP_Error|array Connect URL.
         */
        public function connect_paypal()
        {
        }
        /**
         * Returns a URL that can be used to connect to Square.
         *
         * @return WP_Error|array Connect URL.
         */
        public function connect_square()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_connect_schema()
        {
        }
    }
    /**
     * Onboarding Profile controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class OnboardingProfile extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/profile';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read onboarding profile data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit onboarding profile data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Return all onboarding profile data.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Update onboarding profile data.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_items($request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  array $params The params sent in the request.
         * @return array
         */
        protected function prepare_objects_query($params)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get onboarding profile properties.
         *
         * @return array
         */
        public static function get_profile_properties()
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Onboarding Tasks Controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class OnboardingTasks extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/tasks';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to create a product.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function import_products_permission_check($request)
        {
        }
        /**
         * Check if a given request has access to create a product.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_pages_permission_check($request)
        {
        }
        /**
         * Import sample products from WooCommerce sample CSV.
         *
         * @return WP_Error|WP_REST_Response
         */
        public static function import_sample_products()
        {
        }
        /**
         * Get header mappings from CSV columns.
         *
         * @param string $file File path.
         * @return array Mapped headers.
         */
        public static function get_header_mappings($file)
        {
        }
        /**
         * Sanitize special column name regex.
         *
         * @param  string $value Raw special column name.
         * @return string
         */
        public static function sanitize_special_column_name_regex($value)
        {
        }
        /**
         * Returns a valid cover block with an image, if one exists, or background as a fallback.
         *
         * @param  array $image Image to use for the cover block. Should contain a media ID and image URL.
         * @return string Block content.
         */
        private static function get_homepage_cover_block($image)
        {
        }
        /**
         * Returns a valid media block with an image, if one exists, or a uninitialized media block the user can set.
         *
         * @param  array  $image Image to use for the cover block. Should contain a media ID and image URL.
         * @param  string $align If the image should be aligned to the left or right.
         * @return string Block content.
         */
        private static function get_homepage_media_block($image, $align = 'left')
        {
        }
        /**
         * Returns a homepage template to be inserted into a post. A different template will be used depending on the number of products.
         *
         * @param int $post_id ID of the homepage template.
         * @return string Template contents.
         */
        private static function get_homepage_template($post_id)
        {
        }
        /**
         * Gets the possible industry images from the plugin folder for sideloading. If an image doesn't exist, other.jpg is used a fallback.
         *
         * @return array An array of images by industry.
         */
        private static function get_available_homepage_images()
        {
        }
        /**
         * Uploads a number of images to a homepage template, depending on the selected industry from the profile wizard.
         *
         * @param  int $post_id ID of the homepage template.
         * @param  int $number_of_images The number of images that should be sideloaded (depending on how many media slots are in the template).
         * @return array An array of images that have been attached to the post.
         */
        private static function sideload_homepage_images($post_id, $number_of_images)
        {
        }
        /**
         * Creates base store starter pages like my account and checkout.
         * Note that WC_Install::create_pages already checks if pages exist before creating them again.
         *
         * @return bool
         */
        public static function create_store_pages()
        {
        }
        /**
         * Create a homepage from a template.
         *
         * @return WP_Error|array
         */
        public static function create_homepage()
        {
        }
    }
    /**
     * Onboarding Themes Controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class OnboardingThemes extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'onboarding/themes';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to manage themes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Installs the requested theme.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Theme installation status.
         */
        public function install_theme($request)
        {
        }
        /**
         * Activate the requested theme.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|array Theme activation status.
         */
        public function activate_theme($request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Options Controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class Options extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'options';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to get options.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if the user has permission given an option name.
         *
         * @param  string          $option Option name.
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean
         */
        public function user_has_permission($option, $request)
        {
        }
        /**
         * Check if a given request has access to update options.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Get an array of options and respective permissions for the current user.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        public function get_option_permissions($request)
        {
        }
        /**
         * Gets an array of options and respective values.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array Options object with option values.
         */
        public function get_options($request)
        {
        }
        /**
         * Updates an array of objects.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array Options object with a boolean if the option was updated.
         */
        public function update_options($request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Orders_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Get object. Return false if object is not of required type.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data|bool
         */
        protected function get_object($id)
        {
        }
        /**
         * Expands an order item to get its data.
         *
         * @param WC_Order_item $item Order item data.
         * @return array
         */
        protected function get_order_item_data($item)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Only return writable props from schema.
         *
         * @param  array $schema Schema.
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order  Order data.
         * @param array    $posted Posted data.
         * @param string   $type   Address type.
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @throws WC_REST_Exception When SKU or ID is not valid.
         * @param array           $posted Request data.
         * @param string          $action 'create' to add line item or 'update' to update it.
         * @return int
         */
        protected function get_product_id($posted, $action = 'create')
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         *
         * @param WC_Order_Item $item   Order item.
         * @param string        $prop   Order property.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param string[]      $props  Properties.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Maybe set item meta if posted.
         *
         * @param WC_Order_Item $item   Order item data.
         * @param array         $posted Request data.
         */
        protected function maybe_set_item_meta_data($item, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array  $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param array  $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array  $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         * @param object $item Passed when updating an item. Null during creation.
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action = 'create', $item = \null)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order object.
         * @param string   $item_type The item type.
         * @param array    $posted item provided in the request body.
         * @throws WC_REST_Exception If item ID is not associated with order.
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Orders_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Calculate coupons.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param WP_REST_Request $request Request object.
         * @param WC_Order        $order   Order data.
         * @return bool
         */
        protected function calculate_coupons($request, $order)
        {
        }
        /**
         * Prepare a single order for create or update.
         *
         * @throws WC_REST_Exception When fails to set any item.
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @throws WC_REST_Exception But all errors are validated before returning any data.
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Orders controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Orders_Controller
     */
    class Orders extends \WC_REST_Orders_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Prepare objects query.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
    }
}
namespace {
    /**
     * Terms controller class.
     */
    abstract class WC_REST_Terms_Controller extends \WC_REST_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = '';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the terms.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a term.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Check permissions.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param string          $context Request context.
         * @return bool|WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Get terms associated with a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single term for a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object          $term   Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return array Links for the given term.
         */
        protected function prepare_links($term, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the terms attached to a product.
         *
         * This is an alternative to `get_terms()` that uses `get_the_terms()`
         * instead, which hits the object cache. There are a few things not
         * supported, notably `include`, `exclude`. In `self::get_items()` these
         * are instead treated as a full query.
         *
         * @param array           $prepared_args Arguments for `get_terms()`.
         * @param WP_REST_Request $request       Full details about the request.
         * @return array List of term objects. (Total count in `$this->total_terms`).
         */
        protected function get_terms_for_product($prepared_args, $request)
        {
        }
        /**
         * Comparison function for sorting terms by a column.
         *
         * Uses `$this->sort_column` to determine field to sort by.
         *
         * @param stdClass $left Term object.
         * @param stdClass $right Term object.
         * @return int <0 if left is higher "priority" than right, 0 if equal, >0 if right is higher "priority" than left.
         */
        protected function compare_terms($left, $right)
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function get_taxonomy($request)
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Categories_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/categories';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_cat';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V1_Controller
     */
    class WC_REST_Product_Categories_V2_Controller extends \WC_REST_Product_Categories_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Categories_V2_Controller
     */
    class WC_REST_Product_Categories_Controller extends \WC_REST_Product_Categories_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single product category output for response.
         *
         * @param WP_Term         $item    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Category schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term         $term    Term object.
         * @param WP_REST_Request $request Request instance.
         * @return bool|WP_Error
         *
         * @since 3.5.5
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product categories controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Product_Categories_Controller
     */
    class ProductCategories extends \WC_REST_Product_Categories_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
    }
}
namespace {
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all reviews.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Updates a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function update_item($request)
        {
        }
        /**
         * Deletes a review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the reivew, if the ID is valid.
         *
         * @since 3.5.0
         * @param int $id Supplied ID.
         * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise.
         */
        protected function get_review($id)
        {
        }
        /**
         * Prepends internal property prefix to query parameters to match our response fields.
         *
         * @since 3.5.0
         * @param string $query_param Query parameter.
         * @return string
         */
        protected function normalize_query_param($query_param)
        {
        }
        /**
         * Checks comment_approved to set comment status for single comment output.
         *
         * @since 3.5.0
         * @param string|int $comment_approved comment status.
         * @return string Comment status.
         */
        protected function prepare_status_response($comment_approved)
        {
        }
        /**
         * Sets the comment_status of a given review object when creating or updating a review.
         *
         * @since 3.5.0
         * @param string|int $new_status New review status.
         * @param int        $id         Review ID.
         * @return bool Whether the status was changed.
         */
        protected function handle_status_param($new_status, $id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product reviews controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Product_Reviews_Controller
     */
    class ProductReviews extends \WC_REST_Product_Reviews_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review)
        {
        }
    }
}
namespace {
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_CRUD_Controller
     */
    class WC_REST_Products_V2_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * If object is hierarchical.
         *
         * @var bool
         */
        protected $hierarchical = \true;
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @param int $id Object ID.
         *
         * @since  3.0.0
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @since  3.0.0
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @since  3.0.0
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         *
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param string $name Taxonomy name.
         *
         * @deprecated 3.0.0
         * @return     string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get product attribute taxonomy name.
         *
         * @param string     $slug    Taxonomy name.
         * @param WC_Product $product Product data.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_attribute_taxonomy_name($slug, $product)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         *
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         *
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         *
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         *
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @param bool            $creating If is creating a new object.
         *
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Set product images.
         *
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         *
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         *
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         *
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         *
         * @since  3.0.0
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Clear caches here so in sync with any new variations/children.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Product_Variations_V2_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/variations';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product_variation';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Check if a given request has access to update an item.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @since  3.0.0
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Clear caches here so in sync with any new variations.
         *
         * @param WC_Data $object Object data.
         */
        public function clear_transients($object)
        {
        }
        /**
         * Delete a variation.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API variations controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Variations_V2_Controller
     */
    class WC_REST_Product_Variations_Controller extends \WC_REST_Product_Variations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single variation output for response.
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare a single variation for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the image for a product variation.
         *
         * @param WC_Product_Variation $variation Variation data.
         * @return array
         */
        protected function get_image($variation)
        {
        }
        /**
         * Set variation image.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param  WC_Product_Variation $variation Variation instance.
         * @param  array                $image    Image data.
         * @return WC_Product_Variation
         */
        protected function set_variation_image($variation, $image)
        {
        }
        /**
         * Get the Variation's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Product variations controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Product_Variations_Controller
     */
    class ProductVariations extends \WC_REST_Product_Variations_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add product name and sku filtering to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
    }
}
namespace {
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Products_V2_Controller
     */
    class WC_REST_Products_Controller extends \WC_REST_Products_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Make extra product orderby features supported by WooCommerce available to the WC API.
         * This includes 'price', 'popularity', and 'rating'.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Add new options for 'orderby' to the collection params.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @param string     $context Request context.
         *                            Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Products controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Products_Controller
     */
    class Products extends \WC_REST_Products_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Adds properties that can be embed via ?_embed=1.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Add product name and sku filtering to the WC API.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to WP_Query.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Add `low_stock_amount` property to product data
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Add in conditional select fields to the query.
         *
         * @param string $select Select clause used to select fields from the query.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_fields($select, $wp_query)
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_filter($where, $wp_query)
        {
        }
        /**
         * Join posts meta tables when product search or low stock query is present.
         *
         * @param string $join Join clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_join($join, $wp_query)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected static function append_product_sorting_table_join($sql)
        {
        }
        /**
         * Group by post ID to prevent duplicates.
         *
         * @param string $groupby Group by clause used to organize posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_group_by($groupby, $wp_query)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * REST API Reports Cache class.
     *
     * @package WooCommerce Admin/API
     */
    class Cache
    {
        /**
         * Cache version. Used to invalidate all cached values.
         */
        const VERSION_OPTION = 'woocommerce_reports';
        /**
         * Invalidate cache.
         */
        public static function invalidate()
        {
        }
        /**
         * Get cache version number.
         *
         * @return string
         */
        public static function get_version()
        {
        }
        /**
         * Get cached value.
         *
         * @param string $key Cache key.
         * @return mixed
         */
        public static function get($key)
        {
        }
        /**
         * Update cached value.
         *
         * @param string $key   Cache key.
         * @param mixed  $value New value.
         * @return bool
         */
        public static function set($key, $value)
        {
        }
    }
    /**
     * REST API Reports controller class.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports';
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read reports.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get the order number for an order. If no filter is present for `woocommerce_order_number`, we can just return the ID.
         * Returns the parent order number if the order is actually a refund.
         *
         * @param  int $order_id Order ID.
         * @return string
         */
        public function get_order_number($order_id)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get order statuses without prefixes.
         *
         * @return array
         */
        public function get_order_statuses()
        {
        }
        /**
         * Get order statuses (and labels) without prefixes.
         *
         * @return array
         */
        public function get_order_status_labels()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * REST API Reports categories controller class.
     *
     * @package WooCommerce/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/categories';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \Automattic\WooCommerce\Admin\API\Reports\Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * WooCommerce Reports data store interface.
     *
     * @since 3.5.0
     */
    interface DataStoreInterface
    {
        /**
         * Get the data based on args.
         *
         * @param array $args Query parameters.
         * @return stdClass|WP_Error
         */
        public function get_data($args);
    }
    /**
     * Admin\API\Reports\SqlQuery: Common parent for manipulating SQL query clauses.
     */
    class SqlQuery
    {
        /**
         * List of SQL clauses.
         *
         * @var array
         */
        private $sql_clauses = array('select' => array(), 'from' => array(), 'left_join' => array(), 'join' => array(), 'right_join' => array(), 'where' => array(), 'where_time' => array(), 'group_by' => array(), 'having' => array(), 'limit' => array(), 'order_by' => array());
        /**
         * SQL clause merge filters.
         *
         * @var array
         */
        private $sql_filters = array('where' => array('where', 'where_time'), 'join' => array('right_join', 'join', 'left_join'));
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context;
        /**
         * Constructor.
         *
         * @param string $context Optional context passed to filters. Default empty string.
         */
        public function __construct($context = '')
        {
        }
        /**
         * Add a SQL clause to be included when get_data is called.
         *
         * @param string $type   Clause type.
         * @param string $clause SQL clause.
         */
        protected function add_sql_clause($type, $clause)
        {
        }
        /**
         * Get SQL clause by type.
         *
         * @param string $type     Clause type.
         * @param string $handling Whether to filter the return value (filtered|unfiltered). Default unfiltered.
         *
         * @return string SQL clause.
         */
        protected function get_sql_clause($type, $handling = 'unfiltered')
        {
        }
        /**
         * Clear SQL clauses by type.
         *
         * @param string|array $types Clause type.
         */
        protected function clear_sql_clause($types)
        {
        }
        /**
         * Replace strings within SQL clauses by type.
         *
         * @param string $type    Clause type.
         * @param string $search  String to search for.
         * @param string $replace Replacement string.
         */
        protected function str_replace_clause($type, $search, $replace)
        {
        }
        /**
         * Get the full SQL statement.
         *
         * @return string
         */
        public function get_query_statement()
        {
        }
        /**
         * Reinitialize the clause array.
         */
        public function clear_all_clauses()
        {
        }
    }
    /**
     * Admin\API\Reports\DataStore: Common parent for custom report data stores.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\SqlQuery
    {
        /**
         * Cache group for the reports.
         *
         * @var string
         */
        protected $cache_group = 'reports';
        /**
         * Time out for the cache.
         *
         * @var int
         */
        protected $cache_timeout = 3600;
        /**
         * Table used as a data store for this report.
         *
         * @var string
         */
        protected static $table_name = '';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array();
        // @todo This does not really belong here, maybe factor out the comparison as separate class?
        /**
         * Order by property, used in the cmp function.
         *
         * @var string
         */
        private $order_by = '';
        /**
         * Order property, used in the cmp function.
         *
         * @var string
         */
        private $order = '';
        /**
         * Query limit parameters.
         *
         * @var array
         */
        private $limit_parameters = array();
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'reports';
        /**
         * Subquery object for query nesting.
         *
         * @var SqlQuery
         */
        protected $subquery;
        /**
         * Totals query object.
         *
         * @var SqlQuery
         */
        protected $total_query;
        /**
         * Intervals query object.
         *
         * @var SqlQuery
         */
        protected $interval_query;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get table name from database class.
         */
        public static function get_db_table_name()
        {
        }
        /**
         * Set table name from database class.
         */
        protected static function set_db_table_name()
        {
        }
        /**
         * Whether or not the report should use the caching layer.
         *
         * Provides an opportunity for plugins to prevent reports from using cache.
         *
         * @return boolean Whether or not to utilize caching.
         */
        protected function should_use_cache()
        {
        }
        /**
         * Returns string to be used as cache key for the data.
         *
         * @param array $params Query parameters.
         * @return string
         */
        protected function get_cache_key($params)
        {
        }
        /**
         * Wrapper around Cache::get().
         *
         * @param string $cache_key Cache key.
         * @return mixed
         */
        protected function get_cached_data($cache_key)
        {
        }
        /**
         * Wrapper around Cache::set().
         *
         * @param string $cache_key Cache key.
         * @param mixed  $value     New value.
         * @return bool
         */
        protected function set_cached_data($cache_key, $value)
        {
        }
        /**
         * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
         *
         * @param stdClass $a Object a.
         * @param stdClass $b Object b.
         * @return string
         */
        private function interval_cmp($a, $b)
        {
        }
        /**
         * Sorts intervals according to user's request.
         *
         * They are pre-sorted in SQL, but after adding gaps, they need to be sorted including the added ones.
         *
         * @param stdClass $data      Data object, must contain an array under $data->intervals.
         * @param string   $sort_by   Ordering property.
         * @param string   $direction DESC/ASC.
         */
        protected function sort_intervals(&$data, $sort_by, $direction)
        {
        }
        /**
         * Sorts array of arrays based on subarray key $sort_by.
         *
         * @param array  $arr       Array to sort.
         * @param string $sort_by   Ordering property.
         * @param string $direction DESC/ASC.
         */
        protected function sort_array(&$arr, $sort_by, $direction)
        {
        }
        /**
         * Fills in interval gaps from DB with 0-filled objects.
         *
         * @param array    $db_intervals   Array of all intervals present in the db.
         * @param DateTime $start_datetime Start date.
         * @param DateTime $end_datetime   End date.
         * @param string   $time_interval  Time interval, e.g. day, week, month.
         * @param stdClass $data           Data with SQL extracted intervals.
         * @return stdClass
         */
        protected function fill_in_missing_intervals($db_intervals, $start_datetime, $end_datetime, $time_interval, &$data)
        {
        }
        /**
         * Converts input datetime parameters to local timezone. If there are no inputs from the user in query_args,
         * uses default from $defaults.
         *
         * @param array $query_args Array of query arguments.
         * @param array $defaults Array of default values.
         */
        protected function normalize_timezones(&$query_args, $defaults)
        {
        }
        /**
         * Removes extra records from intervals so that only requested number of records get returned.
         *
         * @param stdClass $data           Data from whose intervals the records get removed.
         * @param int      $page_no        Offset requested by the user.
         * @param int      $items_per_page Number of records requested by the user.
         * @param int      $db_interval_count Database interval count.
         * @param int      $expected_interval_count Expected interval count on the output.
         * @param string   $order_by Order by field.
         * @param string   $order ASC or DESC.
         */
        protected function remove_extra_records(&$data, $page_no, $items_per_page, $db_interval_count, $expected_interval_count, $order_by, $order)
        {
        }
        /**
         * Returns expected number of items on the page in case of date ordering.
         *
         * @param int $expected_interval_count Expected number of intervals in total.
         * @param int $items_per_page          Number of items per page.
         * @param int $page_no                 Page number.
         *
         * @return float|int
         */
        protected function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
        {
        }
        /**
         * Returns true if there are any intervals that need to be filled in the response.
         *
         * @param int    $expected_interval_count Expected number of intervals in total.
         * @param int    $db_records              Total number of records for given period in the database.
         * @param int    $items_per_page          Number of items per page.
         * @param int    $page_no                 Page number.
         * @param string $order                   asc or desc.
         * @param string $order_by                Column by which the result will be sorted.
         * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
         *
         * @return bool
         */
        protected function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
        {
        }
        /**
         * Updates the LIMIT query part for Intervals query of the report.
         *
         * If there are less records in the database than time intervals, then we need to remap offset in SQL query
         * to fetch correct records.
         *
         * @param array  $query_args Query arguments.
         * @param int    $db_interval_count Database interval count.
         * @param int    $expected_interval_count Expected interval count on the output.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function update_intervals_sql_params(&$query_args, $db_interval_count, $expected_interval_count, $table_name)
        {
        }
        /**
         * Casts strings returned from the database to appropriate data types for output.
         *
         * @param array $array Associative array of values extracted from the database.
         * @return array|WP_Error
         */
        protected function cast_numbers($array)
        {
        }
        /**
         * Returns a list of columns selected by the query_args formatted as a comma separated string.
         *
         * @param array $query_args User-supplied options.
         * @return string
         */
        protected function selected_columns($query_args)
        {
        }
        /**
         * Get the excluded order statuses used when calculating reports.
         *
         * @return array
         */
        protected static function get_excluded_report_order_statuses()
        {
        }
        /**
         * Maps order status provided by the user to the one used in the database.
         *
         * @param string $status Order status.
         * @return string
         */
        protected static function normalize_order_status($status)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Updates start and end dates for intervals so that they represent intervals' borders, not times when data in db were recorded.
         *
         * E.g. if there are db records for only Tuesday and Thursday this week, the actual week interval is [Mon, Sun], not [Tue, Thu].
         *
         * @param DateTime $start_datetime Start date.
         * @param DateTime $end_datetime End date.
         * @param string   $time_interval Time interval, e.g. day, week, month.
         * @param array    $intervals Array of intervals extracted from SQL db.
         */
        protected function update_interval_boundary_dates($start_datetime, $end_datetime, $time_interval, &$intervals)
        {
        }
        /**
         * Change structure of intervals to form a correct response.
         *
         * Also converts local datetimes to GMT and adds them to the intervals.
         *
         * @param array $intervals Time interval, e.g. day, week, month.
         */
        protected function create_interval_subtotals(&$intervals)
        {
        }
        /**
         * Fills WHERE clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Fills LIMIT clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_limit_sql_params($query_args)
        {
        }
        /**
         * Fills LIMIT parameters of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_limit_params($query_args = array())
        {
        }
        /**
         * Generates a virtual table given a list of IDs.
         *
         * @param array $ids          Array of IDs.
         * @param array $id_field     Name of the ID field.
         * @param array $other_values Other values that must be contained in the virtual table.
         * @return array
         */
        protected function get_ids_table($ids, $id_field, $other_values = array())
        {
        }
        /**
         * Returns a comma separated list of the fields in the `query_args`, if there aren't, returns `report_columns` keys.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_fields($query_args)
        {
        }
        /**
         * Returns a comma separated list of the field names prepared to be used for a selection after a join with `default_results`.
         *
         * @param array $fields                 Array of fields name.
         * @param array $default_results_fields Fields to load from `default_results` table.
         * @param array $outer_selections       Array of fields that are not selected in the inner query.
         * @return string
         */
        protected function format_join_selections($fields, $default_results_fields, $outer_selections = array())
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         */
        protected function add_order_by_sql_params($query_args)
        {
        }
        /**
         * Fills FROM and WHERE clauses of SQL request for 'Intervals' section of data response based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_intervals_sql_params($query_args, $table_name)
        {
        }
        /**
         * Get join and where clauses for refunds based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_refund_subquery($query_args)
        {
        }
        /**
         * Returns an array of products belonging to given categories.
         *
         * @param array $categories List of categories IDs.
         * @return array|stdClass
         */
        protected function get_products_by_cat_ids($categories)
        {
        }
        /**
         * Get WHERE filter by object ids subquery.
         *
         * @param string $select_table Select table name.
         * @param string $select_field Select table object ID field name.
         * @param string $filter_table Lookup table name.
         * @param string $filter_field Lookup table object ID field name.
         * @param string $compare      Comparison string (IN|NOT IN).
         * @param string $id_list      Comma separated ID list.
         *
         * @return string
         */
        protected function get_object_where_filter($select_table, $select_field, $filter_table, $filter_field, $compare, $id_list)
        {
        }
        /**
         * Returns an array of ids of allowed products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_included_products_array($query_args)
        {
        }
        /**
         * Returns comma separated ids of allowed products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_products($query_args)
        {
        }
        /**
         * Returns comma separated ids of allowed variations, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_variations($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded products, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_products($query_args)
        {
        }
        /**
         * Returns comma separated ids of included categories, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_categories($query_args)
        {
        }
        /**
         * Returns comma separated ids of included coupons, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $field      Field name in the parameter list.
         * @return string
         */
        protected function get_included_coupons($query_args, $field = 'coupon_includes')
        {
        }
        /**
         * Returns comma separated ids of excluded coupons, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_coupons($query_args)
        {
        }
        /**
         * Returns comma separated ids of included orders, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_orders($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded orders, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_orders($query_args)
        {
        }
        /**
         * Returns comma separated ids of included users, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_users($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded users, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_users($query_args)
        {
        }
        /**
         * Returns order status subquery to be used in WHERE SQL query, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $operator   AND or OR, based on match query argument.
         * @return string
         */
        protected function get_status_subquery($query_args, $operator = 'AND')
        {
        }
        /**
         * Add order status SQL clauses if included in query.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param string   $table_name Database table name.
         * @param SqlQuery $sql_query  Query object.
         */
        protected function add_order_status_clause($query_args, $table_name, &$sql_query)
        {
        }
        /**
         * Add order by SQL clause if included in query.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param SqlQuery $sql_query  Query object.
         * @return string Order by clause.
         */
        protected function add_order_by_clause($query_args, &$sql_query)
        {
        }
        /**
         * Add order by order SQL clause.
         *
         * @param array    $query_args Parameters supplied by the user.
         * @param SqlQuery $sql_query  Query object.
         */
        protected function add_orderby_order_clause($query_args, &$sql_query)
        {
        }
        /**
         * Returns customer subquery to be used in WHERE SQL query, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_customer_subquery($query_args)
        {
        }
        /**
         * Returns logic operator for WHERE subclause based on 'match' query argument.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_match_operator($query_args)
        {
        }
        /**
         * Returns filtered comma separated ids, based on query arguments from the user.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $field      Query field to filter.
         * @param string $separator  Field separator.
         * @return string
         */
        protected function get_filtered_ids($query_args, $field, $separator = ',')
        {
        }
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * API\Reports\Categories\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'categories';
        /**
         * Order by setting used for sorting categories data.
         *
         * @var string
         */
        private $order_by = '';
        /**
         * Order setting used for sorting categories data.
         *
         * @var string
         */
        private $order = '';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('category_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'categories';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Return the database query with parameters used for Categories report: time span and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $from_arg   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_order_by_params($query_args, $from_arg, $id_cell)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Returns an array of ids of included categories, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_categories_array($query_args)
        {
        }
        /**
         * Returns the page of data according to page number and items per page.
         *
         * @param array   $data           Data to paginate.
         * @param integer $page_no        Page number.
         * @param integer $items_per_page Number of items per page.
         * @return array
         */
        protected function page_records($data, $page_no, $items_per_page)
        {
        }
        /**
         * Enriches the category data.
         *
         * @param array $categories_data Categories data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$categories_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Admin\API\Reports\Query
     */
    abstract class Query extends \WC_Object_Query
    {
        /**
         * Get report data matching the current query vars.
         *
         * @return array|object of WC_Product objects
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Categories {
    /**
     * API\Reports\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        const REPORT_NAME = 'report-categories';
        /**
         * Valid fields for Categories report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get categories data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons {
    /**
     * REST API Reports coupons controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Coupons\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_coupon_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'coupons';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('coupon_id' => 'intval', 'amount' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'coupons';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Returns an array of ids of included coupons, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return array
         */
        protected function get_included_coupons_array($query_args)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $from_arg   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_order_by_params($query_args, $from_arg, $id_cell)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the coupon data with extra attributes.
         *
         * @param array $coupon_data Coupon data.
         * @param array $query_args Query parameters.
         */
        protected function include_extended_info(&$coupon_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Create or update an an entry in the wc_order_coupon_lookup table for an order.
         *
         * @since 3.5.0
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_coupons($order_id)
        {
        }
        /**
         * Clean coupons data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Deletes the coupon lookup information when a coupon is deleted.
         * This keeps data consistent if it gets resynced at any point.
         *
         * @param int $post_id Post ID.
         */
        public static function delete_coupon($post_id)
        {
        }
        /**
         * Gets coupons based on the provided arguments.
         *
         * @todo Upon core merge, including this in core's `class-wc-coupon-data-store-cpt.php` might make more sense.
         * @param array $args Array of args to filter the query by. Supports `include`.
         * @return array Array of results.
         */
        public function get_coupons($args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Coupons\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats {
    /**
     * REST API Reports coupons stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Coupons\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Coupons\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'date_start_gmt' => 'strval', 'date_end_gmt' => 'strval', 'amount' => 'floatval', 'coupons_count' => 'intval', 'orders_count' => 'intval');
        /**
         * SQL columns to select in the db query.
         *
         * @var array
         */
        protected $report_columns;
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'coupons_stats';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'coupons_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Products Stats report: categories and order status.
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @since 3.5.0
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Coupons\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter
    {
        /**
         * Array of all segment ids.
         *
         * @var array|bool
         */
        protected $all_segment_ids = false;
        /**
         * Array of all segment labels.
         *
         * @var array
         */
        protected $segment_labels = array();
        /**
         * Query arguments supplied by the user for data store.
         *
         * @var array
         */
        protected $query_args = '';
        /**
         * SQL definition for each column.
         *
         * @var array
         */
        protected $report_columns = array();
        /**
         * Constructor.
         *
         * @param array $query_args Query arguments supplied by the user for data store.
         * @param array $report_columns Report columns lookup from data store.
         */
        public function __construct($query_args, $report_columns)
        {
        }
        /**
         * Filters definitions for SELECT clauses based on query_args and joins them into one string usable in SELECT clause.
         *
         * @param array $columns_mapping Column name -> SQL statememt mapping.
         *
         * @return string to be used in SELECT clause statements.
         */
        protected function prepare_selections($columns_mapping)
        {
        }
        /**
         * Update row-level db result for segments in 'totals' section to the format used for output.
         *
         * @param array  $segments_db_result Results from the SQL db query for segmenting.
         * @param string $segment_dimension Name of column used for grouping the result.
         *
         * @return array Reformatted array.
         */
        protected function reformat_totals_segments($segments_db_result, $segment_dimension)
        {
        }
        /**
         * Merges segmented results for totals response part.
         *
         * E.g. $r1 = array(
         *     0 => array(
         *          'product_id' => 3,
         *          'net_amount' => 15,
         *     ),
         * );
         * $r2 = array(
         *     0 => array(
         *          'product_id'      => 3,
         *          'avg_order_value' => 25,
         *     ),
         * );
         *
         * $merged = array(
         *     3 => array(
         *          'segment_id' => 3,
         *          'subtotals'  => array(
         *              'net_amount'      => 15,
         *              'avg_order_value' => 25,
         *          )
         *     ),
         * );
         *
         * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
         * @param array  $result1 Array 1 of segmented figures.
         * @param array  $result2 Array 2 of segmented figures.
         *
         * @return array
         */
        protected function merge_segment_totals_results($segment_dimension, $result1, $result2)
        {
        }
        /**
         * Merges segmented results for intervals response part.
         *
         * E.g. $r1 = array(
         *     0 => array(
         *          'product_id'    => 3,
         *          'time_interval' => '2018-12'
         *          'net_amount'    => 15,
         *     ),
         * );
         * $r2 = array(
         *     0 => array(
         *          'product_id'      => 3,
         *          'time_interval' => '2018-12'
         *          'avg_order_value' => 25,
         *     ),
         * );
         *
         * $merged = array(
         *     '2018-12' => array(
         *          'segments' => array(
         *              3 => array(
         *                  'segment_id' => 3,
         *                  'subtotals'  => array(
         *                      'net_amount'      => 15,
         *                      'avg_order_value' => 25,
         *                  ),
         *              ),
         *          ),
         *     ),
         * );
         *
         * @param string $segment_dimension Name of the segment dimension=key in the result arrays used to match records from result sets.
         * @param array  $result1 Array 1 of segmented figures.
         * @param array  $result2 Array 2 of segmented figures.
         *
         * @return array
         */
        protected function merge_segment_intervals_results($segment_dimension, $result1, $result2)
        {
        }
        /**
         * Update row-level db result for segments in 'intervals' section to the format used for output.
         *
         * @param array  $segments_db_result Results from the SQL db query for segmenting.
         * @param string $segment_dimension Name of column used for grouping the result.
         *
         * @return array Reformatted array.
         */
        protected function reformat_intervals_segments($segments_db_result, $segment_dimension)
        {
        }
        /**
         * Fetches all segment ids from db and stores it for later use.
         *
         * @return void
         */
        protected function set_all_segments()
        {
        }
        /**
         * Return all segment ids for given segmentby query parameter.
         *
         * @return array
         */
        protected function get_all_segments()
        {
        }
        /**
         * Return all segment labels for given segmentby query parameter.
         *
         * @return array
         */
        protected function get_segment_labels()
        {
        }
        /**
         * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
         *
         * @param stdClass $a Object a.
         * @param stdClass $b Object b.
         * @return string
         */
        private function segment_cmp($a, $b)
        {
        }
        /**
         * Adds zeroes for segments not present in the data selection.
         *
         * @param array $segments Array of segments from the database for given data points.
         *
         * @return array
         */
        protected function fill_in_missing_segments($segments)
        {
        }
        /**
         * Adds missing segments to intervals, modifies $data.
         *
         * @param stdClass $data Response data.
         */
        protected function fill_in_missing_interval_segments(&$data)
        {
        }
        /**
         * Calculate segments for segmenting property bound to product (e.g. category, product_id, variation_id).
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $query_params Array of SQL clauses for intervals/totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_segments($type, $segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $query_params, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for segmenting property bound to order (e.g. coupon or customer type).
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $query_params Array of SQL clauses for intervals/totals query.
         *
         * @return array
         */
        protected function get_order_related_segments($type, $segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $query_params)
        {
        }
        /**
         * Assign segments to time intervals by updating original $intervals array.
         *
         * @param array $intervals Result array from intervals SQL query.
         * @param array $intervals_segments Result array from interval segments SQL query.
         */
        protected function assign_segments_to_intervals(&$intervals, $intervals_segments)
        {
        }
        /**
         * Returns an array of segments for totals part of REST response.
         *
         * @param array  $query_params Totals SQL query parameters.
         * @param string $table_name Name of the SQL table that is the main order stats table.
         *
         * @return array
         */
        public function get_totals_segments($query_params, $table_name)
        {
        }
        /**
         * Adds an array of segments to data->intervals object.
         *
         * @param stdClass $data Data object representing the REST response.
         * @param array    $intervals_query Intervals SQL query parameters.
         * @param string   $table_name Name of the SQL table that is the main order stats table.
         */
        public function add_intervals_segments(&$data, $intervals_query, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. coupon discount amount for product X when segmenting by product id or category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-related product-level segmenting query
         * (e.g. orders_count when segmented by category).
         *
         * @param string $coupons_lookup_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($coupons_lookup_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-level segmenting query
         * (e.g. discount amount when segmented by coupons).
         *
         * @param string $coupons_lookup_table Name of SQL table containing the order-level info.
         * @param array  $overrides Array of overrides for default column calculations.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function segment_selections_orders($coupons_lookup_table, $overrides = array())
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers {
    /**
     * Admin\API\Reports\Customers\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_customer_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'customers';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('id' => 'intval', 'user_id' => 'intval', 'orders_count' => 'intval', 'total_spend' => 'floatval', 'avg_order_value' => 'floatval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'customers';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Trigger a customer update if their "last active" meta value was changed.
         * Function expects to be hooked into the `updated_user_meta` action.
         *
         * @param int    $meta_id ID of updated metadata entry.
         * @param int    $user_id ID of the user being updated.
         * @param string $meta_key Meta key being updated.
         */
        public static function update_registered_customer_via_last_active($meta_id, $user_id, $meta_key)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Fills WHERE clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Updates the database query with parameters used for Customers report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Returns an existing customer ID for an order if one exists.
         *
         * @param object $order WC Order.
         * @return int|bool
         */
        public static function get_existing_customer_id_from_order($order)
        {
        }
        /**
         * Get or create a customer from a given order.
         *
         * @param object $order WC Order.
         * @return int|bool
         */
        public static function get_or_create_customer_from_order($order)
        {
        }
        /**
         * Retrieve a guest ID (when user_id is null) by email.
         *
         * @param string $email Email address.
         * @return false|array Customer array if found, boolean false if not.
         */
        public static function get_guest_id_by_email($email)
        {
        }
        /**
         * Retrieve a registered customer row id by user_id.
         *
         * @param string|int $user_id User ID.
         * @return false|int Customer ID if found, boolean false if not.
         */
        public static function get_customer_id_by_user_id($user_id)
        {
        }
        /**
         * Retrieve the oldest orders made by a customer.
         *
         * @param int $customer_id Customer ID.
         * @return array Orders.
         */
        public static function get_oldest_orders($customer_id)
        {
        }
        /**
         * Update the database with customer data.
         *
         * @param int $user_id WP User ID to update customer data for.
         * @return int|bool|null Number or rows modified or false on failure.
         */
        public static function update_registered_customer($user_id)
        {
        }
        /**
         * Check if a user ID is a valid customer or other user role with past orders.
         *
         * @param int $user_id User ID.
         * @return bool
         */
        protected static function is_valid_customer($user_id)
        {
        }
        /**
         * Delete a customer lookup row.
         *
         * @param int $customer_id Customer ID.
         */
        public static function delete_customer($customer_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Customers\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Customers report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats {
    /**
     * REST API Reports customers stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Customers\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Customers\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('customers_count' => 'intval', 'avg_orders_count' => 'floatval', 'avg_total_spend' => 'floatval', 'avg_avg_order_value' => 'floatval');
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'customers_stats';
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'customers_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
    }
    /**
     * API\Reports\Customers\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Customers report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads {
    /**
     * REST API Reports downloads controller class.
     *
     * @package WooCommerce/API
     * @extends Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads';
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param Array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Downloads\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_download_log';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'downloads';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array(
            'id' => 'intval',
            'date' => 'strval',
            'date_gmt' => 'strval',
            'download_id' => 'strval',
            // String because this can sometimes be a hash.
            'file_name' => 'strval',
            'product_id' => 'intval',
            'order_id' => 'intval',
            'user_id' => 'intval',
            'ip_address' => 'strval',
        );
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'downloads';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for downloads report.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns comma separated ids of included ip address, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_ip_addresses($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded ip address, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_ip_addresses($query_args)
        {
        }
        /**
         * Returns comma separated ids of included customers, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_included_customers($query_args)
        {
        }
        /**
         * Returns comma separated ids of excluded customers, based on query arguments from the user.
         *
         * @param array $query_args Parameters supplied by the user.
         * @return string
         */
        protected function get_excluded_customers($query_args)
        {
        }
        /**
         * Gets WHERE time clause of SQL request with date-related constraints.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $table_name Name of the db table relevant for the date constraint.
         * @return string
         */
        protected function add_time_period_sql_params($query_args, $table_name)
        {
        }
        /**
         * Fills ORDER BY clause of SQL request based on user supplied parameters.
         *
         * @param array $query_args Parameters supplied by the user.
         */
        protected function add_order_by($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Files {
    /**
     * REST API Reports downloads files controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads/files';
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads {
    /**
     * API\Reports\Downloads\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for downloads report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get downloads data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Stats {
    /**
     * REST API Reports downloads stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/downloads/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Downloads\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Downloads\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('download_count' => 'intval');
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'downloads_stats';
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'downloads_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Downloads\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Orders report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Export {
    /**
     * Reports Export controller.
     *
     * @package WooCommerce Admin/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/(?P<type>[a-z]+)/export';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_export_collection_params()
        {
        }
        /**
         * Get the Report Export's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_export_public_schema()
        {
        }
        /**
         * Get the Export status schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_export_status_public_schema()
        {
        }
        /**
         * Export data based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function export_items($request)
        {
        }
        /**
         * Export status based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function export_status($request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Import {
    /**
     * Reports Imports controller.
     *
     * @package WooCommerce Admin/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/import';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function import_permissions_check($request)
        {
        }
        /**
         * Import data based on user request params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function import_items($request)
        {
        }
        /**
         * Prepare request object as query args.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_import_collection_params()
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_import_public_schema()
        {
        }
        /**
         * Cancel all queued import actions.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function cancel_import($request)
        {
        }
        /**
         * Delete all imported items.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_imported_items($request)
        {
        }
        /**
         * Get the status of the current import.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_import_status($request)
        {
        }
        /**
         * Get the total orders and customers based on user supplied params.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_import_totals($request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Orders {
    /**
     * REST API Reports orders controller class.
     *
     * @package WooCommerce/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get products column export value.
         *
         * @param array $products Products from report row.
         * @return string
         */
        protected function _get_products($products)
        {
        }
        /**
         * Get coupons column export value.
         *
         * @param array $coupons Coupons from report row.
         * @return string
         */
        protected function _get_coupons($coupons)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Orders\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_stats';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'orders';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('order_id' => 'intval', 'parent_id' => 'intval', 'date_created' => 'strval', 'date_created_gmt' => 'strval', 'status' => 'strval', 'customer_id' => 'intval', 'net_total' => 'floatval', 'total_sales' => 'floatval', 'num_items_sold' => 'intval', 'customer_type' => 'strval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'orders';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for orders report: coupons and products filters.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the order data.
         *
         * @param array $orders_data Orders data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$orders_data, $query_args)
        {
        }
        /**
         * Returns the same array index by a given key
         *
         * @param array  $array Array to be looped over.
         * @param string $key Key of values used for new array.
         * @return array
         */
        protected function map_array_by_key($array, $key)
        {
        }
        /**
         * Get product IDs, names, and quantity from order IDs.
         *
         * @param array $order_ids Array of order IDs.
         * @return array
         */
        protected function get_products_by_order_ids($order_ids)
        {
        }
        /**
         * Get customer data from Order data.
         *
         * @param array $orders Array of orders data.
         * @return array
         */
        protected function get_customers_by_orders($orders)
        {
        }
        /**
         * Get coupon information from order IDs.
         *
         * @param array $order_ids Array of order IDs.
         * @return array
         */
        protected function get_coupons_by_order_ids($order_ids)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Orders\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Get order data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Orders\Stats {
    /**
     * REST API Reports orders stats controller class.
     *
     * @package WooCommerce/API
     * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
     */
    class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Orders\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_stats';
        /**
         * Cron event name.
         */
        const CRON_EVENT = 'wc_order_stats_update';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'orders_stats';
        /**
         * Type for each column to cast values correctly later.
         *
         * @var array
         */
        protected $column_types = array('orders_count' => 'intval', 'num_items_sold' => 'intval', 'gross_sales' => 'floatval', 'total_sales' => 'floatval', 'coupons' => 'floatval', 'coupons_count' => 'intval', 'refunds' => 'floatval', 'taxes' => 'floatval', 'shipping' => 'floatval', 'net_revenue' => 'floatval', 'avg_items_per_order' => 'floatval', 'avg_order_value' => 'floatval', 'num_returning_customers' => 'intval', 'num_new_customers' => 'intval', 'products' => 'intval', 'segment_id' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'orders_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Updates the totals and intervals database queries with parameters used for Orders report: categories, coupons and order status.
         *
         * @param array $query_args      Query arguments supplied by the user.
         */
        protected function orders_stats_sql_filter($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Get unique products based on user time query
         *
         * @param string $from_clause       From clause with date query.
         * @param string $where_time_clause Where clause with date query.
         * @param string $where_clause      Where clause with date query.
         * @return integer Unique product count.
         */
        public function get_unique_product_count($from_clause, $where_time_clause, $where_clause)
        {
        }
        /**
         * Get unique coupons based on user time query
         *
         * @param string $from_clause       From clause with date query.
         * @param string $where_time_clause Where clause with date query.
         * @param string $where_clause      Where clause with date query.
         * @return integer Unique product count.
         */
        public function get_unique_coupon_count($from_clause, $where_time_clause, $where_clause)
        {
        }
        /**
         * Add order information to the lookup table when orders are created or modified.
         *
         * @param int $post_id Post ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order($post_id)
        {
        }
        /**
         * Update the database with stats data.
         *
         * @param WC_Order|WC_Order_Refund $order Order or refund to update row for.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function update($order)
        {
        }
        /**
         * Deletes the order stats when an order is deleted.
         *
         * @param int $post_id Post ID.
         */
        public static function delete_order($post_id)
        {
        }
        /**
         * Calculation methods.
         */
        /**
         * Get number of items sold among all orders.
         *
         * @param array $order WC_Order object.
         * @return int
         */
        protected static function get_num_items_sold($order)
        {
        }
        /**
         * Get the net amount from an order without shipping, tax, or refunds.
         *
         * @param array $order WC_Order object.
         * @return float
         */
        protected static function get_net_total($order)
        {
        }
        /**
         * Check to see if an order's customer has made previous orders or not
         *
         * @param array $order WC_Order object.
         * @return bool
         */
        public static function is_returning_customer($order)
        {
        }
        /**
         * Set a customer's first order and all others to returning.
         *
         * @param int $customer_id Customer ID.
         * @param int $order_id Order ID.
         */
        protected static function set_customer_first_order($customer_id, $order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Orders\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Orders report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. products sold, revenue from product X when segmenting by category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-related product-level segmenting query
         * (e.g. avg items per order when segmented by category).
         *
         * @param string $unique_orders_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($unique_orders_table)
        {
        }
        /**
         * Returns column => query mapping to be used for order-level segmenting query
         * (e.g. avg items per order or Net Sales when segmented by coupons).
         *
         * @param string $order_stats_table Name of SQL table containing the order-level info.
         * @param array  $overrides Array of overrides for default column calculations.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function segment_selections_orders($order_stats_table, $overrides = array())
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * API\Reports\ParameterException class.
     */
    class ParameterException extends \WC_Data_Exception
    {
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\PerformanceIndicators {
    /**
     * REST API Reports Performance indicators controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/performance-indicators';
        /**
         * Contains a list of endpoints by report slug.
         *
         * @var array
         */
        protected $endpoints = array();
        /**
         * Contains a list of allowed stats.
         *
         * @var array
         */
        protected $allowed_stats = array();
        /**
         * Contains a list of stat labels.
         *
         * @var array
         */
        protected $labels = array();
        /**
         * Contains a list of endpoints by url.
         *
         * @var array
         */
        protected $urls = array();
        /**
         * Register the routes for reports.
         */
        public function register_routes()
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get information such as allowed stats, stat labels, and endpoint data from stats reports.
         *
         * @return WP_Error|True
         */
        private function get_indicator_data()
        {
        }
        /**
         * Returns a list of allowed performance indicators.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_allowed_items($request)
        {
        }
        /**
         * Sorts the list of stats. Sorted by custom arrangement.
         *
         * @see https://github.com/woocommerce/woocommerce-admin/issues/1282
         * @param object $a First item.
         * @param object $b Second item.
         * @return order
         */
        public function sort($a, $b)
        {
        }
        /**
         * Get all reports.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $stat_data    Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($stat_data, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param \Automattic\WooCommerce\Admin\API\Reports\Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Returns the endpoint part of a stat request (prefix) and the actual stat total we want.
         * To allow extensions to namespace (example: fue/emails/sent), we break on the last forward slash.
         *
         * @param string $full_stat A stat request string like orders/avg_order_value or fue/emails/sent.
         * @return array Containing the prefix (endpoint) and suffix (stat).
         */
        private function get_stats_parts($full_stat)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get schema for the list of allowed performance indicators.
         *
         * @return array $schema
         */
        public function get_public_allowed_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Products {
    /**
     * REST API Reports products controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param Array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get stock status column export value.
         *
         * @param array $status Stock status from report row.
         * @return string
         */
        protected function _get_stock_status($status)
        {
        }
        /**
         * Get categories column export value.
         *
         * @param array $category_ids Category IDs from report row.
         * @return string
         */
        protected function _get_categories($category_ids)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Products\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'products';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array(
            'date_start' => 'strval',
            'date_end' => 'strval',
            'product_id' => 'intval',
            'items_sold' => 'intval',
            'net_revenue' => 'floatval',
            'orders_count' => 'intval',
            // Extended attributes.
            'name' => 'strval',
            'price' => 'floatval',
            'image' => 'strval',
            'permalink' => 'strval',
            'stock_status' => 'strval',
            'stock_quantity' => 'intval',
            'low_stock_amount' => 'intval',
            'category_ids' => 'array_values',
            'variations' => 'array_values',
            'sku' => 'strval',
        );
        /**
         * Extended product attributes to include in the data.
         *
         * @var array
         */
        protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'manage_stock', 'low_stock_amount', 'category_ids', 'variations', 'sku');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'products';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $arg_name   Target of the JOIN sql param.
         * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
         */
        protected function add_from_sql_params($query_args, $arg_name, $id_cell)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the product data with attributes specified by the extended_attributes.
         *
         * @param array $products_data Product data.
         * @param array $query_args  Query parameters.
         */
        protected function include_extended_info(&$products_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Create or update an entry in the wc_admin_order_product_lookup table for an order.
         *
         * @since 3.5.0
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_products($order_id)
        {
        }
        /**
         * Clean products data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Products\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats {
    /**
     * REST API Reports products stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products/stats';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Set the default results to 0 if API returns an empty array
         *
         * @param Mixed $results Report data.
         * @return object
         */
        public function set_default_report_data($results)
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Products\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Products\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval', 'variations_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'products_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Products Stats report: categories and order status.
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @since 3.5.0
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Normalizes order_by clause to match to SQL query.
         *
         * @param string $order_by Order by option requeste by user.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Products\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for product-related product-level segmenting query
         * (e.g. products sold, revenue from product X when segmenting by category).
         *
         * @param string $products_table Name of SQL table containing the product-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_product_level($products_table)
        {
        }
        /**
         * Calculate segments for totals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for totals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_totals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $totals_query, $unique_orders_table)
        {
        }
        /**
         * Calculate segments for intervals where the segmenting property is bound to product (e.g. category, product_id, variation_id).
         *
         * @param array  $segmenting_selections SELECT part of segmenting SQL query--one for 'product_level' and one for 'order_level'.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $segmenting_dimension_name Name of the segmenting dimension.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         * @param string $unique_orders_table Name of temporary SQL table that holds unique orders.
         *
         * @return array
         */
        protected function get_product_related_intervals_segments($segmenting_selections, $segmenting_from, $segmenting_where, $segmenting_groupby, $segmenting_dimension_name, $table_name, $intervals_query, $unique_orders_table)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Revenue {
    /**
     * API\Reports\Revenue\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Revenue report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get revenue data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Revenue\Stats {
    /**
     * REST API Reports revenue stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/revenue/stats';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get report items for export.
         *
         * Returns only the interval data.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_export_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param Array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Stock {
    /**
     * REST API Reports stock controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/stock';
        /**
         * Maps query arguments from the REST request.
         *
         * @param  WP_REST_Request $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Query products.
         *
         * @param  array $query_args Query args.
         * @return array
         */
        protected function get_products($query_args)
        {
        }
        /**
         * Get all reports.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Add in conditional search filters for products.
         *
         * @param string $where Where clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_filter($where, $wp_query)
        {
        }
        /**
         * Join posts meta tables when product search or low stock query is present.
         *
         * @param string $join Join clause used to search posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_join($join, $wp_query)
        {
        }
        /**
         * Join wc_product_meta_lookup to posts if not already joined.
         *
         * @param string $sql SQL join.
         * @return string
         */
        protected static function append_product_sorting_table_join($sql)
        {
        }
        /**
         * Group by post ID to prevent duplicates.
         *
         * @param string $groupby Group by clause used to organize posts.
         * @param object $wp_query WP_Query object.
         * @return string
         */
        public static function add_wp_query_group_by($groupby, $wp_query)
        {
        }
        /**
         * Custom orderby clauses using the lookup tables.
         *
         * @param array  $args Query args.
         * @param object $wp_query WP_Query object.
         * @return array
         */
        public static function add_wp_query_orderby($args, $wp_query)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  WC_Product      $product  Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($product, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param  WC_Product $product Object data.
         * @return array
         */
        protected function prepare_links($product)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Stock\Stats {
    /**
     * REST API Reports stock stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/stock/stats';
        /**
         * Get Stock Status Totals.
         *
         * @param  WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  WC_Product      $report  Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Stock\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Get stock counts for the whole store.
         *
         * @param array $query Not used for the stock stats data store, but needed for the interface.
         * @return array Array of counts.
         */
        public function get_data($query)
        {
        }
        /**
         * Get low stock count (products with stock < low stock amount, but greater than no stock amount).
         *
         * @return int Low stock count.
         */
        private function get_low_stock_count()
        {
        }
        /**
         * Get count for the passed in stock status.
         *
         * @param  string $status Status slug.
         * @return int Count.
         */
        private function get_count($status)
        {
        }
        /**
         * Get product count for the store.
         *
         * @return int Product count.
         */
        private function get_product_count()
        {
        }
    }
    /**
     * API\Reports\Stock\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Taxes {
    /**
     * REST API Reports taxes controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/taxes';
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Reports_Query $object Object data.
         * @return array
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Taxes\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_tax_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'taxes';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('tax_rate_id' => 'intval', 'name' => 'strval', 'tax_rate' => 'floatval', 'country' => 'strval', 'state' => 'strval', 'priority' => 'intval', 'total_tax' => 'floatval', 'order_tax' => 'floatval', 'shipping_tax' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'taxes';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Set up all the hooks for maintaining and populating table data.
         */
        public static function init()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args          Query arguments supplied by the user.
         * @param string $order_status_filter Order status subquery.
         */
        protected function add_from_sql_params($query_args, $order_status_filter)
        {
        }
        /**
         * Updates the database query with parameters used for Taxes report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Create or update an entry in the wc_order_tax_lookup table for an order.
         *
         * @param int $order_id Order ID.
         * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
         */
        public static function sync_order_taxes($order_id)
        {
        }
        /**
         * Clean taxes data when an order is deleted.
         *
         * @param int $order_id Order ID.
         */
        public static function sync_on_order_delete($order_id)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Taxes\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Taxes report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Taxes\Stats {
    /**
     * REST API Reports taxes stats controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/taxes/stats';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Set the default results to 0 if API returns an empty array
         *
         * @param Mixed $results Report data.
         * @return object
         */
        public function set_default_report_data($results)
        {
        }
        /**
         * Maps query arguments from the REST request.
         *
         * @param array $request Request array.
         * @return array
         */
        protected function prepare_reports_query($request)
        {
        }
        /**
         * Get all reports.
         *
         * @param WP_REST_Request $request Request data.
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param stdClass        $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * API\Reports\Taxes\Stats\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_tax_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'taxes_stats';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('tax_codes' => 'intval', 'total_tax' => 'floatval', 'order_tax' => 'floatval', 'shipping_tax' => 'floatval', 'orders_count' => 'intval');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'taxes_stats';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Updates the database query with parameters used for Taxes Stats report
         *
         * @param array $query_args       Query arguments supplied by the user.
         */
        protected function update_sql_query_params($query_args)
        {
        }
        /**
         * Get taxes associated with a store.
         *
         * @param array $args Array of args to filter the query by. Supports `include`.
         * @return array An array of all taxes.
         */
        public static function get_taxes($args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args  Query parameters.
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Taxes\Stats\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Taxes report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get tax stats data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class Segmenter extends \Automattic\WooCommerce\Admin\API\Reports\Segmenter
    {
        /**
         * Returns column => query mapping to be used for order-related order-level segmenting query (e.g. tax_rate_id).
         *
         * @param string $lookup_table Name of SQL table containing the order-level segmenting info.
         *
         * @return array Column => SELECT query mapping.
         */
        protected function get_segment_selections_order_level($lookup_table)
        {
        }
        /**
         * Calculate segments for totals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $totals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_totals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $totals_query)
        {
        }
        /**
         * Calculate segments for intervals query where the segmenting property is bound to order (e.g. coupon or customer type).
         *
         * @param string $segmenting_select SELECT part of segmenting SQL query.
         * @param string $segmenting_from FROM part of segmenting SQL query.
         * @param string $segmenting_where WHERE part of segmenting SQL query.
         * @param string $segmenting_groupby GROUP BY part of segmenting SQL query.
         * @param string $table_name Name of SQL table which is the stats table for orders.
         * @param array  $intervals_query Array of SQL clauses for intervals query.
         *
         * @return array
         */
        protected function get_order_related_intervals_segments($segmenting_select, $segmenting_from, $segmenting_where, $segmenting_groupby, $table_name, $intervals_query)
        {
        }
        /**
         * Return array of segments formatted for REST response.
         *
         * @param string $type Type of segments to return--'totals' or 'intervals'.
         * @param array  $query_params SQL query parameter array.
         * @param string $table_name Name of main SQL table for the data store (used as basis for JOINS).
         *
         * @return array
         * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException In case of segmenting by variations, when no parent product is specified.
         */
        protected function get_segments($type, $query_params, $table_name)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports {
    /**
     * Date & time interval and numeric range handling class for Reporting API.
     */
    class TimeInterval
    {
        /**
         * Format string for ISO DateTime formatter.
         *
         * @var string
         */
        public static $iso_datetime_format = 'Y-m-d\\TH:i:s';
        /**
         * Format string for use in SQL queries.
         *
         * @var string
         */
        public static $sql_datetime_format = 'Y-m-d H:i:s';
        /**
         * Converts local datetime to GMT/UTC time.
         *
         * @param string $datetime_string String representation of local datetime.
         * @return DateTime
         */
        public static function convert_local_datetime_to_gmt($datetime_string)
        {
        }
        /**
         * Returns default 'before' parameter for the reports.
         *
         * @return DateTime
         */
        public static function default_before()
        {
        }
        /**
         * Returns default 'after' parameter for the reports.
         *
         * @return DateTime
         */
        public static function default_after()
        {
        }
        /**
         * Returns date format to be used as grouping clause in SQL.
         *
         * @param string $time_interval Time interval.
         * @param string $table_name Name of the db table relevant for the date constraint.
         * @return mixed
         */
        public static function db_datetime_format($time_interval, $table_name)
        {
        }
        /**
         * Returns quarter for the DateTime.
         *
         * @param DateTime $datetime Local date & time.
         * @return int|null
         */
        public static function quarter($datetime)
        {
        }
        /**
         * Returns simple week number for the DateTime, for week starting on $first_day_of_week.
         *
         * The first week of the year is considered to be the week containing January 1.
         * The second week starts on the next $first_day_of_week.
         *
         * @param DateTime $datetime          Local date for which the week number is to be calculated.
         * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
         * @return int
         */
        public static function simple_week_number($datetime, $first_day_of_week)
        {
        }
        /**
         * Returns ISO 8601 week number for the DateTime, if week starts on Monday,
         * otherwise returns simple week number.
         *
         * @see TimeInterval::simple_week_number()
         *
         * @param DateTime $datetime          Local date for which the week number is to be calculated.
         * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
         * @return int
         */
        public static function week_number($datetime, $first_day_of_week)
        {
        }
        /**
         * Returns time interval id for the DateTime.
         *
         * @param string   $time_interval Time interval type (week, day, etc).
         * @param DateTime $datetime      Date & time.
         * @return string
         */
        public static function time_interval_id($time_interval, $datetime)
        {
        }
        /**
         * Calculates number of time intervals between two dates, closed interval on both sides.
         *
         * @param DateTime $start_datetime Start date & time.
         * @param DateTime $end_datetime End date & time.
         * @param string   $interval Time interval increment, e.g. hour, day, week.
         *
         * @return int
         */
        public static function intervals_between($start_datetime, $end_datetime, $interval)
        {
        }
        /**
         * Returns a new DateTime object representing the next hour start/previous hour end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_hour_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next day start, or previous day end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_day_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns DateTime object representing the next week start, or previous week end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_week_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next month start, or previous month end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_month_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns a new DateTime object representing the next quarter start, or previous quarter end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_quarter_start($datetime, $reversed = false)
        {
        }
        /**
         * Return a new DateTime object representing the next year start, or previous year end if reversed.
         *
         * @param DateTime $datetime Date and time.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function next_year_start($datetime, $reversed = false)
        {
        }
        /**
         * Returns beginning of next time interval for provided DateTime.
         *
         * E.g. for current DateTime, beginning of next day, week, quarter, etc.
         *
         * @param DateTime $datetime      Date and time.
         * @param string   $time_interval Time interval, e.g. week, day, hour.
         * @param bool     $reversed Going backwards in time instead of forward.
         * @return DateTime
         */
        public static function iterate($datetime, $time_interval, $reversed = false)
        {
        }
        /**
         * Returns expected number of items on the page in case of date ordering.
         *
         * @param int $expected_interval_count Expected number of intervals in total.
         * @param int $items_per_page          Number of items per page.
         * @param int $page_no                 Page number.
         *
         * @return float|int
         */
        public static function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
        {
        }
        /**
         * Returns true if there are any intervals that need to be filled in the response.
         *
         * @param int    $expected_interval_count Expected number of intervals in total.
         * @param int    $db_records              Total number of records for given period in the database.
         * @param int    $items_per_page          Number of items per page.
         * @param int    $page_no                 Page number.
         * @param string $order                   asc or desc.
         * @param string $order_by                Column by which the result will be sorted.
         * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
         *
         * @return bool
         */
        public static function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
        {
        }
        /**
         * Normalize "*_between" parameters to "*_min" and "*_max" for numeric values
         * and "*_after" and "*_before" for date values.
         *
         * @param array        $request Query params from REST API request.
         * @param string|array $param_names One or more param names to handle. Should not include "_between" suffix.
         * @param bool         $is_date Boolean if the param is date is related.
         * @return array Normalized query values.
         */
        public static function normalize_between_params($request, $param_names, $is_date)
        {
        }
        /**
         * Validate a "*_between" range argument (an array with 2 numeric items).
         *
         * @param  mixed           $value Parameter value.
         * @param  WP_REST_Request $request REST Request.
         * @param  string          $param Parameter name.
         * @return WP_Error|boolean
         */
        public static function rest_validate_between_numeric_arg($value, $request, $param)
        {
        }
        /**
         * Validate a "*_between" range argument (an array with 2 date items).
         *
         * @param  mixed           $value Parameter value.
         * @param  WP_REST_Request $request REST Request.
         * @param  string          $param Parameter name.
         * @return WP_Error|boolean
         */
        public static function rest_validate_between_date_arg($value, $request, $param)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API\Reports\Variations {
    /**
     * REST API Reports products controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Reports_Controller
     */
    class Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
    {
        /**
         * Exportable traits.
         */
        use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/variations';
        /**
         * Mapping between external parameter name and name used in query class.
         *
         * @var array
         */
        protected $param_mapping = array('products' => 'product_includes');
        /**
         * Get items.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param array           $report  Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param array $object Object data.
         * @return array        Links for the given post.
         */
        protected function prepare_links($object)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get stock status column export value.
         *
         * @param array $status Stock status from report row.
         * @return string
         */
        protected function _get_stock_status($status)
        {
        }
        /**
         * Get the column names for export.
         *
         * @return array Key value pair of Column ID => Label.
         */
        public function get_export_columns()
        {
        }
        /**
         * Get the column values for export.
         *
         * @param array $item Single report item/row.
         * @return array Key value pair of Column ID => Row Value.
         */
        public function prepare_item_for_export($item)
        {
        }
    }
    /**
     * API\Reports\Variations\DataStore.
     */
    class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
    {
        /**
         * Table used to get the data.
         *
         * @var string
         */
        protected static $table_name = 'wc_order_product_lookup';
        /**
         * Cache identifier.
         *
         * @var string
         */
        protected $cache_key = 'variations';
        /**
         * Mapping columns to data type to return correct response types.
         *
         * @var array
         */
        protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'variation_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'name' => 'strval', 'price' => 'floatval', 'image' => 'strval', 'permalink' => 'strval', 'sku' => 'strval');
        /**
         * Extended product attributes to include in the data.
         *
         * @var array
         */
        protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'low_stock_amount', 'sku');
        /**
         * Data store context used to pass to filters.
         *
         * @var string
         */
        protected $context = 'variations';
        /**
         * Assign report columns once full table name has been assigned.
         */
        protected function assign_report_columns()
        {
        }
        /**
         * Fills FROM clause of SQL request based on user supplied parameters.
         *
         * @param array  $query_args Parameters supplied by the user.
         * @param string $arg_name   Target of the JOIN sql param.
         */
        protected function add_from_sql_params($query_args, $arg_name)
        {
        }
        /**
         * Updates the database query with parameters used for Products report: categories and order status.
         *
         * @param array $query_args Query arguments supplied by the user.
         */
        protected function add_sql_query_params($query_args)
        {
        }
        /**
         * Maps ordering specified by the user to columns in the database/fields in the data.
         *
         * @param string $order_by Sorting criterion.
         *
         * @return string
         */
        protected function normalize_order_by($order_by)
        {
        }
        /**
         * Enriches the product data with attributes specified by the extended_attributes.
         *
         * @param array $products_data Product data.
         * @param array $query_args Query parameters.
         */
        protected function include_extended_info(&$products_data, $query_args)
        {
        }
        /**
         * Returns the report data based on parameters supplied by the user.
         *
         * @param array $query_args Query parameters.
         *
         * @return stdClass|WP_Error Data.
         */
        public function get_data($query_args)
        {
        }
        /**
         * Initialize query objects.
         */
        protected function initialize_queries()
        {
        }
    }
    /**
     * API\Reports\Variations\Query
     */
    class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
    {
        /**
         * Valid fields for Products report.
         *
         * @return array
         */
        protected function get_default_query_vars()
        {
        }
        /**
         * Get product data based on the current query vars.
         *
         * @return array
         */
        public function get_data()
        {
        }
    }
}
namespace {
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Setting_Options_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings/(?P<group_id>[\\w-]+)';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Return a single setting.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return all settings in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get setting data.
         *
         * @since  3.0.0
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Update a single setting in a group.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a single setting object for response.
         *
         * @since  3.0.0
         * @param object          $item Setting object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @since  3.0.0
         * @param string $setting_id Setting ID.
         * @param string $group_id Group ID.
         * @return array Links for the given setting.
         */
        protected function prepare_links($setting_id, $group_id)
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Filters out bad values from the settings array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function filter_setting($setting)
        {
        }
        /**
         * For image_width, Crop can return "0" instead of false -- so we want
         * to make sure we return these consistently the same we accept them.
         *
         * @todo remove in 4.0
         * @since 3.0.0
         * @param  array $setting Settings.
         * @return array
         */
        public function cast_image_width($setting)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Boolean for if a setting type is a valid supported setting type.
         *
         * @since  3.0.0
         * @param  string $type Type.
         * @return bool
         */
        public function is_setting_type_valid($type)
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @since 3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Setting Options controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Setting_Options_V2_Controller
     */
    class WC_REST_Setting_Options_Controller extends \WC_REST_Setting_Options_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get setting data.
         *
         * @param string $group_id Group ID.
         * @param string $setting_id Setting ID.
         * @return stdClass|WP_Error
         */
        public function get_setting($group_id, $setting_id)
        {
        }
        /**
         * Callback for allowed keys for each setting response.
         *
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_setting_keys($key)
        {
        }
        /**
         * Get all settings in a group.
         *
         * @param string $group_id Group ID.
         * @return array|WP_Error
         */
        public function get_group_settings($group_id)
        {
        }
        /**
         * Returns a list of countries and states for use in the base location setting.
         *
         * @since  3.0.7
         * @return array Array of states and countries.
         */
        private function get_countries_and_states()
        {
        }
        /**
         * Get the settings schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Setting Options controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Setting_Options_Controller
     */
    class SettingOptions extends \WC_REST_Setting_Options_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Invalidates API cache when updating settings options.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
    }
}
namespace {
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Taxes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes';
        /**
         * Register the routes for taxes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all taxes.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Take tax data from the request and return the updated or newly created rate.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @param stdClass|null $current Existing tax object.
         * @return object
         */
        protected function create_or_update_tax($request, $current = \null)
        {
        }
        /**
         * Create a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single tax.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax output for response.
         *
         * @param stdClass $tax Tax object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $tax Tax object.
         * @return array Links for the given tax.
         */
        protected function prepare_links($tax)
        {
        }
        /**
         * Get the Taxes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V1_Controller
     */
    class WC_REST_Taxes_V2_Controller extends \WC_REST_Taxes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Taxes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Taxes_V2_Controller
     */
    class WC_REST_Taxes_Controller extends \WC_REST_Taxes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Admin\API {
    /**
     * Taxes controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Taxes_Controller
     */
    class Taxes extends \WC_REST_Taxes_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-analytics';
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get all taxes and allow filtering by tax code.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
    }
    /**
     * Themes controller.
     *
     * @package WooCommerce Admin/API
     * @extends WC_REST_Data_Controller
     */
    class Themes extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc-admin';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'themes';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to edit upload plugins/themes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function upload_theme_permissions_check($request)
        {
        }
        /**
         * Upload and install a theme.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function upload_theme($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * \Automattic\WooCommerce\Admin\CategoryLookup class.
     */
    class CategoryLookup
    {
        /**
         * Stores changes to categories we need to sync.
         *
         * @var array
         */
        protected $edited_product_cats = array();
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Init hooks.
         */
        public function init()
        {
        }
        /**
         * Regenerate all lookup table data.
         */
        public function regenerate()
        {
        }
        /**
         * Store edits so we know when the parent ID changes.
         *
         * @param int $category_id Term ID being edited.
         */
        public function before_edit($category_id)
        {
        }
        /**
         * When a product category gets edited, see if we need to sync the table.
         *
         * @param int $category_id Term ID being edited.
         */
        public function on_edit($category_id)
        {
        }
        /**
         * Delete lookup table data from a tree.
         *
         * @param int $category_id Category ID to delete.
         * @param int $category_tree_id Tree to delete from.
         * @return void
         */
        protected function delete($category_id, $category_tree_id)
        {
        }
        /**
         * Updates lookup table data for a category by ID.
         *
         * @param int $category_id Category ID to update.
         */
        protected function update($category_id)
        {
        }
        /**
         * Get category lookup table values to insert.
         *
         * @param int $category_id Category ID to insert.
         * @param int $category_tree_id Tree to insert into.
         * @return string
         */
        protected function get_insert_sql($category_id, $category_tree_id)
        {
        }
        /**
         * Used to construct insert query recursively.
         *
         * @param  array $inserts Array of data to insert.
         * @param  array $terms   Terms to insert.
         * @param  array $parents Parent IDs the terms belong to.
         */
        protected function get_term_insert_values(&$inserts, $terms, $parents = array())
        {
        }
        /**
         * Convert flat terms array into nested array.
         *
         * @param array   $hierarchy Array to put terms into.
         * @param array   $terms Array of terms (id=>parent).
         * @param integer $parent Parent ID.
         */
        protected function unflatten_terms(&$hierarchy, &$terms, $parent = 0)
        {
        }
        /**
         * Get category descendants.
         *
         * @param int $category_id The category ID to lookup.
         * @return array
         */
        protected function get_descendants($category_id)
        {
        }
        /**
         * Return all ancestor category ids for a category.
         *
         * @param int $category_id The category ID to lookup.
         * @return array
         */
        protected function get_ancestors($category_id)
        {
        }
    }
    /**
     * WC_Admin_Events Class.
     */
    class Events
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Cron event handlers.
         */
        public function init()
        {
        }
        /**
         * Daily events to run.
         *
         * Note: WC_Admin_Notes_Order_Milestones::other_milestones is hooked to this as well.
         */
        public function do_wc_admin_daily()
        {
        }
    }
    /**
     * Feature plugin main class.
     *
     * @internal This file will not be bundled with woo core, only the feature plugin.
     * @internal Note this is not called WC_Admin due to a class already existing in core with that name.
     */
    class FeaturePlugin
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Init the feature plugin, only if we can detect both Gutenberg and WooCommerce.
         */
        public function init()
        {
        }
        /**
         * Install DB and create cron events when activated.
         *
         * @return void
         */
        public function on_activation()
        {
        }
        /**
         * Remove WooCommerce Admin scheduled actions on deactivate.
         *
         * @return void
         */
        public function on_deactivation()
        {
        }
        /**
         * Setup plugin once all other plugins are loaded.
         *
         * @return void
         */
        public function on_plugins_loaded()
        {
        }
        /**
         * Define Constants.
         */
        protected function define_constants()
        {
        }
        /**
         * Load Localisation files.
         */
        protected function load_plugin_textdomain()
        {
        }
        /**
         * Include WC Admin classes.
         */
        public function includes()
        {
        }
        /**
         * Filter in our ActionScheduler Store class.
         *
         * @param string $store_class ActionScheduler Store class name.
         * @return string ActionScheduler Store class name.
         */
        public function replace_actionscheduler_store_class($store_class)
        {
        }
        /**
         * Set up our admin hooks and plugin loader.
         */
        protected function hooks()
        {
        }
        /**
         * Get an array of dependency error messages.
         *
         * @return array
         */
        protected function get_dependency_errors()
        {
        }
        /**
         * Returns true if all dependencies for the wc-admin plugin are loaded.
         *
         * @return bool
         */
        public function has_satisfied_dependencies()
        {
        }
        /**
         * Returns true if build file exists.
         *
         * @return bool
         */
        protected function check_build()
        {
        }
        /**
         * Deactivates this plugin.
         */
        public function deactivate_self()
        {
        }
        /**
         * Notify users of the plugin requirements.
         */
        public function render_dependencies_notice()
        {
        }
        /**
         * Notify users that the plugin needs to be built.
         */
        public function render_build_notice()
        {
        }
        /**
         * Overwrites the allowed features array using a local `feature-config.php` file.
         *
         * @param array $features Array of feature slugs.
         */
        public function replace_supported_features($features)
        {
        }
        /**
         * Adds a menu item for the wc-admin devdocs.
         */
        public function register_devdocs_page()
        {
        }
        /**
         * Define constant if not already set.
         *
         * @param string      $name  Constant name.
         * @param string|bool $value Constant value.
         */
        protected function define($name, $value)
        {
        }
        /**
         * Prevent cloning.
         */
        private function __clone()
        {
        }
        /**
         * Prevent unserializing.
         */
        private function __wakeup()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Features {
    /**
     * Contains backend logic for the activity panel feature.
     */
    class ActivityPanels
    {
        /**
         * Class instance.
         *
         * @var ActivityPanels instance
         */
        protected static $instance = null;
        /**
         * Low Stock Transient Name.
         */
        const LOW_STOCK_TRANSIENT_NAME = 'woocommerce_admin_low_out_of_stock_count';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Adds fields so that we can store activity panel last read and open times.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Determines if there are out of stock or low stock products.
         *
         * @return boolean
         */
        public function has_low_stock_products()
        {
        }
        /**
         * Clears transient for out of stock indicator
         *
         * @return boolean
         */
        public static function clear_low_out_of_stock_count_transient()
        {
        }
        /**
         * Add alert count to the component settings.
         *
         * @param array $settings Component settings.
         */
        public function component_settings($settings)
        {
        }
        /**
         * Things to do after WooCommerce updates.
         */
        public function woocommerce_updated_note()
        {
        }
    }
    /**
     * Contains backend logic for the Analytics feature.
     */
    class Analytics
    {
        /**
         * Class instance.
         *
         * @var Analytics instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Preload data from the countries endpoint.
         *
         * @param array $endpoints Array of preloaded endpoints.
         * @return array
         */
        public function add_preload_endpoints($endpoints)
        {
        }
        /**
         * Adds fields so that we can store user preferences for the columns to display on a report.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Registers report pages.
         */
        public function register_pages()
        {
        }
    }
    /**
     * Contains backend logic for the dashboard feature.
     */
    class AnalyticsDashboard
    {
        /**
         * Menu slug.
         */
        const MENU_SLUG = 'wc-admin';
        /**
         * Class instance.
         *
         * @var AnalyticsDashboard instance
         */
        protected static $instance = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Preload data from API endpoints.
         *
         * @param array $endpoints Array of preloaded endpoints.
         * @return array
         */
        public function add_preload_endpoints($endpoints)
        {
        }
        /**
         * Adds fields so that we can store performance indicators, row settings, and chart type settings for users.
         *
         * @param array $user_data_fields User data fields.
         * @return array
         */
        public function add_user_data_fields($user_data_fields)
        {
        }
        /**
         * Registers dashboard page.
         */
        public function register_page()
        {
        }
        /**
         * Update the WooCommerce menu structure to make our main dashboard/handler
         * the top level link for 'WooCommerce'.
         */
        public function update_link_structure()
        {
        }
    }
    /**
     * Contains backend logic for the onboarding profile and checklist feature.
     */
    class Onboarding
    {
        /**
         * Class instance.
         *
         * @var Onboarding instance
         */
        protected static $instance = null;
        /**
         * Name of themes transient.
         *
         * @var string
         */
        const THEMES_TRANSIENT = 'wc_onboarding_themes';
        /**
         * Name of product data transient.
         *
         * @var string
         */
        const PRODUCT_DATA_TRANSIENT = 'wc_onboarding_product_data';
        /**
         * Profile data option name.
         */
        const PROFILE_DATA_OPTION = 'woocommerce_onboarding_profile';
        /**
         * Onboarding opt-in option name.
         */
        const OPT_IN_OPTION = 'woocommerce_onboarding_opt_in';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Hook into WooCommerce.
         */
        public function __construct()
        {
        }
        /**
         * Adds the ability to toggle the new onboarding experience on or off.
         */
        private function add_toggle_actions()
        {
        }
        /**
         * Add onboarding actions.
         */
        private function add_actions()
        {
        }
        /**
         * Add onboarding filters.
         */
        private function add_filters()
        {
        }
        /**
         * Redirect the old onboarding wizard to the profiler.
         */
        public static function redirect_old_onboarding()
        {
        }
        /**
         * Returns true if the profiler should be displayed (not completed).
         *
         * @return bool
         */
        public static function should_show_profiler()
        {
        }
        /**
         * Returns true if the task list should be displayed (not completed or hidden off the dashboard).
         *
         * @return bool
         */
        public static function should_show_tasks()
        {
        }
        /**
         * Get a list of allowed industries for the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_industries()
        {
        }
        /**
         * Get a list of allowed product types for the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_product_types()
        {
        }
        /**
         * Get a list of themes for the onboarding wizard.
         *
         * @return array
         */
        public static function get_themes()
        {
        }
        /**
         * Get theme data used in onboarding theme browser.
         *
         * @param WP_Theme $theme Theme to gather data from.
         * @return array
         */
        public static function get_theme_data($theme)
        {
        }
        /**
         * Add theme data to response from themes controller.
         *
         * @param WP_REST_Response $response Rest response.
         * @return WP_REST_Response
         */
        public static function add_uploaded_theme_data($response)
        {
        }
        /**
         * Check if theme has declared support for WooCommerce.
         *
         * @param WP_Theme $theme Theme to check.
         * @return bool
         */
        public static function has_woocommerce_support($theme)
        {
        }
        /**
         * Append dynamic product data from API.
         *
         * @param array $product_types Array of product types.
         * @return array
         */
        public static function append_product_data($product_types)
        {
        }
        /**
         * Delete the stored themes transient.
         */
        public static function delete_themes_transient()
        {
        }
        /**
         * Add profiler items to component settings.
         *
         * @param array $settings Component settings.
         */
        public function component_settings($settings)
        {
        }
        /**
         * Preload options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_options($options)
        {
        }
        /**
         * Preload WC setting options to prime state of the application.
         *
         * @param array $options Array of options to preload.
         * @return array
         */
        public function preload_settings($options)
        {
        }
        /**
         * Preload data from API endpoints.
         *
         * @param array $endpoints Array of preloaded endpoints.
         * @return array
         */
        public function add_preload_endpoints($endpoints)
        {
        }
        /**
         * Returns a list of Stripe supported countries. This method can be removed once merged to core.
         *
         * @return array
         */
        private static function get_stripe_supported_countries()
        {
        }
        /**
         * Gets an array of plugins that can be installed & activated via the onboarding wizard.
         *
         * @return array
         * @todo Handle edgecase of where installed plugins may have versioned folder names (i.e. `jetpack-master/jetpack.php`).
         */
        public static function get_allowed_plugins()
        {
        }
        /**
         * Get a list of active plugins, relevent to the onboarding wizard.
         *
         * @return array
         */
        public static function get_active_plugins()
        {
        }
        /**
         * Gets an array of themes that can be installed & activated via the onboarding wizard.
         *
         * @return array
         */
        public static function get_allowed_themes()
        {
        }
        /**
         * Get an array of installed plugin slugs.
         *
         * @return array
         */
        public static function get_installed_plugins()
        {
        }
        /**
         * Let the app know that we will be showing the onboarding route, so wp-admin elements should be hidden while loading.
         *
         * @param bool $is_loading Indicates if the `woocommerce-admin-is-loading` should be appended or not.
         * @return bool
         */
        public function is_loading($is_loading)
        {
        }
        /**
         * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
         *
         * @param string $location URL of redirect.
         * @param int    $status HTTP response status code.
         * @return string URL of redirect.
         */
        public function overwrite_paypal_redirect($location, $status)
        {
        }
        /**
         * Finishes the PayPal connection process by saving the correct settings.
         */
        public function finish_paypal_connect()
        {
        }
        /**
         * Instead of redirecting back to the payment settings page, we will redirect back to the payments task list with our status.
         *
         * @param string $location URL of redirect.
         * @param int    $status HTTP response status code.
         * @return string URL of redirect.
         */
        public function overwrite_square_redirect($location, $status)
        {
        }
        /**
         * Finishes the Square connection process by saving the correct settings.
         */
        public function finish_square_connect()
        {
        }
        /**
         * Update the existing help tab and add an option to enable the new onboarding experience.
         */
        public static function update_help_tab()
        {
        }
        /**
         * Reset the onboarding profiler and redirect to the profiler.
         */
        public static function enable_onboarding()
        {
        }
        /**
         * Track changes to the onboarding option.
         *
         * @param mixed  $mixed Option name or previous value if option previously existed.
         * @param string $value Value of the updated option.
         */
        public static function track_onboarding_toggle($mixed, $value)
        {
        }
        /**
         * Update the help tab setup link to reset the onboarding profiler.
         */
        public static function add_help_tab()
        {
        }
        /**
         * Allows quick access to testing the calypso parts of onboarding.
         */
        public static function calypso_tests()
        {
        }
        /**
         * Reset the onboarding profiler and redirect to the profiler.
         */
        public static function reset_profiler()
        {
        }
        /**
         * Reset the onboarding task list and redirect to the dashboard.
         */
        public static function reset_task_list()
        {
        }
        /**
         * Remove the install notice that prompts the user to visit the old onboarding setup wizard.
         *
         * @param bool   $show Show or hide the notice.
         * @param string $notice The slug of the notice.
         * @return bool
         */
        public static function remove_install_notice($show, $notice)
        {
        }
        /**
         * Redirects the user to the task list if the task list is enabled and finishing a wccom checkout.
         *
         * @todo Once URL params are added to the redirect, we can check those instead of the referer.
         */
        public static function redirect_wccom_install()
        {
        }
        /**
         * When updating WooCommerce, mark the profiler and task list complete.
         *
         * @todo The `maybe_enable_setup_wizard()` method should be revamped on onboarding enable in core.
         * See https://github.com/woocommerce/woocommerce/blob/1ca791f8f2325fe2ee0947b9c47e6a4627366374/includes/class-wc-install.php#L341
         */
        public static function maybe_mark_complete()
        {
        }
    }
    /**
     * Contains the logic for completing onboarding tasks.
     */
    class OnboardingTasks
    {
        /**
         * Class instance.
         *
         * @var OnboardingTasks instance
         */
        protected static $instance = null;
        /**
         * Name of the active task transient.
         *
         * @var string
         */
        const ACTIVE_TASK_TRANSIENT = 'wc_onboarding_active_task';
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Check if Square payment settings are complete.
         *
         * @param string $option Option name.
         * @param array  $value Current value.
         */
        public static function check_square_completion($option, $value)
        {
        }
        /**
         * Check if Paypal payment settings are complete.
         *
         * @param mixed $old_value Old value.
         * @param array $value Current value.
         */
        public static function check_paypal_completion($old_value, $value)
        {
        }
        /**
         * Check if Stripe payment settings are complete.
         *
         * @param mixed $old_value Old value.
         * @param array $value Current value.
         */
        public static function check_stripe_completion($old_value, $value)
        {
        }
        /**
         * Update the payments cache to complete if not already.
         *
         * @param string $payment_method Payment method slug.
         */
        public static function mark_payment_method_configured($payment_method)
        {
        }
        /**
         * Enqueue scripts and styles.
         */
        public function add_media_scripts()
        {
        }
        /**
         * Add task items to component settings.
         *
         * @param array $settings Component settings.
         * @return array
         */
        public function component_settings($settings)
        {
        }
        /**
         * Temporarily store the active task to persist across page loads when neccessary (such as publishing a product). Most tasks do not need to do this.
         */
        public static function set_active_task()
        {
        }
        /**
         * Get the name of the active task.
         *
         * @return string
         */
        public static function get_active_task()
        {
        }
        /**
         * Check for active task completion, and clears the transient.
         *
         * @return bool
         */
        public static function is_active_task_complete()
        {
        }
        /**
         * Check for task completion of a given task.
         *
         * @param string $task Name of task.
         * @return bool
         */
        public static function check_task_completion($task)
        {
        }
        /**
         * Hooks into the product page to add a notice to return to the task list if a product was added.
         *
         * @param string $hook Page hook.
         */
        public static function add_onboarding_product_notice_admin_script($hook)
        {
        }
        /**
         * Hooks into the post page to display a different success notice and sets the active page as the site's home page if visted from onboarding.
         *
         * @param string $hook Page hook.
         */
        public static function add_onboarding_homepage_notice_admin_script($hook)
        {
        }
        /**
         * Adds a notice to return to the task list when the save button is clicked on tax settings pages.
         */
        public static function add_onboarding_tax_notice_admin_script()
        {
        }
        /**
         * Adds a notice to return to the task list when the product importeris done running.
         *
         * @param string $hook Page hook.
         */
        public function add_onboarding_product_import_notice_admin_script($hook)
        {
        }
        /**
         * Get an array of countries that support automated tax.
         *
         * @return array
         */
        public static function get_automated_tax_supported_countries()
        {
        }
        /**
         * Add the task list completion note after completing all tasks.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function add_completion_note($old_value, $new_value)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * Install Class.
     */
    class Install
    {
        /**
         * Plugin version option name.
         */
        const VERSION_OPTION = 'woocommerce_admin_version';
        /**
         * DB updates and callbacks that need to be run per version.
         *
         * @var array
         */
        protected static $db_updates = array('0.20.1' => array('wc_admin_update_0201_order_status_index', 'wc_admin_update_0201_db_version'), '0.23.0' => array('wc_admin_update_0230_rename_gross_total', 'wc_admin_update_0230_db_version'), '0.25.1' => array('wc_admin_update_0251_remove_unsnooze_action', 'wc_admin_update_0251_db_version'));
        /**
         * Migrated option names mapping. New => old.
         *
         * @var array
         */
        protected static $migrated_options = array('woocommerce_onboarding_profile' => 'wc_onboarding_profile', 'woocommerce_admin_install_timestamp' => 'wc_admin_install_timestamp', 'woocommerce_onboarding_opt_in' => 'wc_onboarding_opt_in', 'woocommerce_admin_import_stats' => 'wc_admin_import_stats', 'woocommerce_admin_version' => 'wc_admin_version', 'woocommerce_admin_last_orders_milestone' => 'wc_admin_last_orders_milestone', 'woocommerce_admin-wc-helper-last-refresh' => 'wc-admin-wc-helper-last-refresh', 'woocommerce_admin_report_export_status' => 'wc_admin_report_export_status');
        /**
         * Hook in tabs.
         */
        public static function init()
        {
        }
        /**
         * Migrate option values to their new keys/names.
         *
         * @param mixed  $default Default value for the option.
         * @param string $new_option Option name.
         * @return mixed Migrated option value.
         */
        public static function handle_option_migration($default, $new_option)
        {
        }
        /**
         * Check WC Admin version and run the updater is required.
         *
         * This check is done on all requests and runs if the versions do not match.
         */
        public static function check_version()
        {
        }
        /**
         * Install WC Admin.
         */
        public static function install()
        {
        }
        /**
         * Get database schema.
         *
         * @return string
         */
        protected static function get_schema()
        {
        }
        /**
         * Create database tables.
         */
        public static function create_tables()
        {
        }
        /**
         * Return a list of tables. Used to make sure all WC Admin tables are dropped
         * when uninstalling the plugin in a single site or multi site environment.
         *
         * @return array WC tables.
         */
        public static function get_tables()
        {
        }
        /**
         * Adds new tables.
         *
         * @param array $wc_tables List of WooCommerce tables.
         * @return array
         */
        public static function add_tables($wc_tables)
        {
        }
        /**
         * Uninstall tables when MU blog is deleted.
         *
         * @param array $tables List of tables that will be deleted by WP.
         *
         * @return string[]
         */
        public static function wpmu_drop_tables($tables)
        {
        }
        /**
         * Get list of DB update callbacks.
         *
         * @return array
         */
        public static function get_db_update_callbacks()
        {
        }
        /**
         * Is a DB update needed?
         *
         * @return boolean
         */
        public static function needs_db_update()
        {
        }
        /**
         * See if we need to show or run database updates during install.
         */
        private static function maybe_update_db_version()
        {
        }
        /**
         * Push all needed DB updates to the queue for processing.
         */
        private static function update()
        {
        }
        /**
         * Update WC Admin version to current.
         *
         * @param string|null $version New WooCommerce Admin DB version or null.
         */
        public static function update_db_version($version = null)
        {
        }
        /**
         * Schedule cron events.
         */
        public static function create_events()
        {
        }
        /**
         * Create notes.
         */
        protected static function create_notes()
        {
        }
        /**
         * Drop WooCommerce Admin tables.
         *
         * @return void
         */
        public static function drop_tables()
        {
        }
    }
    /**
     * Loader Class.
     */
    class Loader
    {
        /**
         * App entry point.
         */
        const APP_ENTRY_POINT = 'wc-admin';
        /**
         * Class instance.
         *
         * @var Loader instance
         */
        protected static $instance = null;
        /**
         * An array of classes to load from the includes folder.
         *
         * @var array
         */
        protected static $classes = array();
        /**
         * WordPress capability required to use analytics features.
         *
         * @var string
         */
        protected static $required_capability = null;
        /**
         * Get class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         * Hooks added here should be removed in `wc_admin_initialize` via the feature plugin.
         */
        public function __construct()
        {
        }
        /**
         * Add custom tables to $wpdb object.
         */
        public static function define_tables()
        {
        }
        /**
         * Returns true if WooCommerce Admin is currently running in a development environment.
         */
        public static function is_dev()
        {
        }
        /**
         * Gets an array of enabled WooCommerce Admin features/sections.
         *
         * @return bool Enabled Woocommerce Admin features/sections.
         */
        public static function get_features()
        {
        }
        /**
         * Gets WordPress capability required to use analytics features.
         *
         * @return string
         */
        public static function get_analytics_capability()
        {
        }
        /**
         * Helper function indicating whether the current user has the required analytics capability.
         *
         * @return bool
         */
        public static function user_can_analytics()
        {
        }
        /**
         * Returns if a specific wc-admin feature is enabled.
         *
         * @param  string $feature Feature slug.
         * @return bool Returns true if the feature is enabled.
         */
        public static function is_feature_enabled($feature)
        {
        }
        /**
         * Returns if the onboarding feature of WooCommerce Admin should be enabled.
         *
         * While we preform an a/b test of onboarding, the feature will be enabled within the plugin build, but only if the user recieved the test/opted in.
         *
         * @return bool Returns true if the onboarding is enabled.
         */
        public static function is_onboarding_enabled()
        {
        }
        /**
         * Gets the URL to an asset file.
         *
         * @param  string $file name.
         * @return string URL to asset.
         */
        public static function get_url($file)
        {
        }
        /**
         * Gets the file modified time as a cache buster if we're in dev mode, or the plugin version otherwise.
         *
         * @param string $file Local path to the file.
         * @return string The cache buster value to use for the given file.
         */
        public static function get_file_version($file)
        {
        }
        /**
         * Gets the path for the asset depending on file type.
         *
         * @param  string $file name.
         * @return string Folder path of asset.
         */
        private static function get_path($file)
        {
        }
        /**
         * Class loader for enabled WooCommerce Admin features/sections.
         */
        public static function load_features()
        {
        }
        /**
         * Registers a basic page handler for the app entry point.
         *
         * @todo The entry point for the embed needs moved to this class as well.
         */
        public static function register_page_handler()
        {
        }
        /**
         * Remove the menu item for the app entry point page.
         */
        public static function remove_app_entry_page_menu_item()
        {
        }
        /**
         * Registers all the neccessary scripts and styles to show the admin experience.
         */
        public static function register_scripts()
        {
        }
        /**
         * Loads the required scripts on the correct pages.
         */
        public static function load_scripts()
        {
        }
        /**
         * Returns true if we are on a JS powered admin page.
         */
        public static function is_admin_page()
        {
        }
        /**
         *  Returns true if we are on a "classic" (non JS app) powered admin page.
         *
         * TODO: See usage in `admin.php`. This needs refactored and implemented properly in core.
         */
        public static function is_embed_page()
        {
        }
        /**
         * Returns breadcrumbs for the current page.
         */
        private static function get_embed_breadcrumbs()
        {
        }
        /**
         * Outputs breadcrumbs via PHP for the initial load of an embedded page.
         *
         * @param array $section Section to create breadcrumb from.
         */
        private static function output_breadcrumbs($section)
        {
        }
        /**
         * Set up a div for the header embed to render into.
         * The initial contents here are meant as a place loader for when the PHP page initialy loads.
         */
        public static function embed_page_header()
        {
        }
        /**
         * Adds body classes to the main wp-admin wrapper, allowing us to better target elements in specific scenarios.
         *
         * @param string $admin_body_class Body class to add.
         */
        public static function add_admin_body_classes($admin_body_class = '')
        {
        }
        /**
         * Removes notices that should not be displayed on WC Admin pages.
         */
        public static function remove_notices()
        {
        }
        /**
         * Runs before admin notices action and hides them.
         */
        public static function inject_before_notices()
        {
        }
        /**
         * Runs after admin notices and closes div.
         */
        public static function inject_after_notices()
        {
        }
        /**
         * Edits Admin title based on section of wc-admin.
         *
         * @param string $admin_title Modifies admin title.
         * @todo Can we do some URL rewriting so we can figure out which page they are on server side?
         */
        public static function update_admin_title($admin_title)
        {
        }
        /**
         * Set up a div for the app to render into.
         */
        public static function page_wrapper()
        {
        }
        /**
         * Hooks extra neccessary data into the component settings array already set in WooCommerce core.
         *
         * @param array $settings Array of component settings.
         * @return array Array of component settings.
         */
        public static function add_component_settings($settings)
        {
        }
        /**
         * Format order statuses by removing a leading 'wc-' if present.
         *
         * @param array $statuses Order statuses.
         * @return array formatted statuses.
         */
        public static function get_order_statuses($statuses)
        {
        }
        /**
         * Register the admin settings for use in the WC REST API
         *
         * @param array $groups Array of setting groups.
         * @return array
         */
        public static function add_settings_group($groups)
        {
        }
        /**
         * Add WC Admin specific settings
         *
         * @param array $settings Array of settings in wc admin group.
         * @return array
         */
        public static function add_settings($settings)
        {
        }
        /**
         * Filter invalid statuses from saved settings to avoid removed statuses throwing errors.
         *
         * @param array|null $value Saved order statuses.
         * @return array|null
         */
        public static function filter_invalid_statuses($value)
        {
        }
        /**
         * Gets custom settings used for WC Admin.
         *
         * @param array $settings Array of settings to merge into.
         * @return array
         */
        public static function get_custom_settings($settings)
        {
        }
        /**
         * Return an object defining the currecy options for the site's current currency
         *
         * @return  array  Settings for the current currency {
         *     Array of settings.
         *
         *     @type string $code       Currency code.
         *     @type string $precision  Number of decimals.
         *     @type string $symbol     Symbol for currency.
         * }
         */
        public static function get_currency_settings()
        {
        }
        /**
         * Registers WooCommerce specific user data to the WordPress user API.
         */
        public static function register_user_data()
        {
        }
        /**
         * For all the registered user data fields (  Loader::get_user_data_fields ), fetch the data
         * for returning via the REST API.
         *
         * @param WP_User $user Current user.
         */
        public static function get_user_data_values($user)
        {
        }
        /**
         * For all the registered user data fields ( Loader::get_user_data_fields ), update the data
         * for the REST API.
         *
         * @param array   $values   The new values for the meta.
         * @param WP_User $user     The current user.
         * @param string  $field_id The field id for the user meta.
         */
        public static function update_user_data_values($values, $user, $field_id)
        {
        }
        /**
         * We store some WooCommerce specific user meta attached to users endpoint,
         * so that we can track certain preferences or values such as the inbox activity panel last open time.
         * Additional fields can be added in the function below, and then used via wc-admin's currentUser data.
         *
         * @return array Fields to expose over the WP user endpoint.
         */
        public static function get_user_data_fields()
        {
        }
        /**
         * Helper to update user data fields.
         *
         * @param int    $user_id  User ID.
         * @param string $field Field name.
         * @param mixed  $value  Field value.
         */
        public static function update_user_data_field($user_id, $field, $value)
        {
        }
        /**
         * Helper to retrive user data fields.
         *
         * Migrates old key prefixes as well.
         *
         * @param int    $user_id  User ID.
         * @param string $field Field name.
         * @return mixed The user field value.
         */
        public static function get_user_data_field($user_id, $field)
        {
        }
        /**
         * Injects wp-shared-settings as a dependency if it's present.
         */
        public static function inject_wc_settings_dependencies()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Notes {
    /**
     * WC Admin Note Data Store (Custom Tables)
     */
    class DataStore extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface
    {
        /**
         * Method to create a new note in the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        public function create(&$note)
        {
        }
        /**
         * Method to read a note.
         *
         * @param WC_Admin_Note $note Admin note.
         * @throws \Exception Throws exception when invalid data is found.
         */
        public function read(&$note)
        {
        }
        /**
         * Updates a note in the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        public function update(&$note)
        {
        }
        /**
         * Deletes a note from the database.
         *
         * @param WC_Admin_Note $note Admin note.
         * @param array         $args Array of args to pass to the delete method (not used).
         */
        public function delete(&$note, $args = array())
        {
        }
        /**
         * Read actions from the database.
         *
         * @param WC_Admin_Note $note Admin note.
         */
        private function read_actions(&$note)
        {
        }
        /**
         * Save actions to the database.
         * This function clears old actions, then re-inserts new if any changes are found.
         *
         * @param WC_Admin_Note $note Note object.
         *
         * @return bool|void
         */
        private function save_actions(&$note)
        {
        }
        /**
         * Return an ordered list of notes.
         *
         * @param array $args Query arguments.
         * @return array An array of objects containing a note id.
         */
        public function get_notes($args = array())
        {
        }
        /**
         * Return a count of notes.
         *
         * @param string $type Comma separated list of note types.
         * @param string $status Comma separated list of statuses.
         * @return array An array of objects containing a note id.
         */
        public function get_notes_count($type = array(), $status = array())
        {
        }
        /**
         * Return where clauses for getting notes by status and type. For use in both the count and listing queries.
         *
         *  @param array $args Array of args to pass.
         * @return string Where clauses for the query.
         */
        public function get_notes_where_clauses($args = array())
        {
        }
        /**
         * Find all the notes with a given name.
         *
         * @param string $name Name to search for.
         * @return array An array of matching note ids.
         */
        public function get_notes_with_name($name)
        {
        }
    }
    /**
     * NoteTraits class.
     */
    trait NoteTraits
    {
        /**
         * Test how long WooCommerce Admin has been active.
         *
         * @param int $seconds Time in seconds to check.
         * @return bool Whether or not WooCommerce admin has been active for $seconds.
         */
        public static function wc_admin_active_for($seconds)
        {
        }
    }
    /**
     * WC_Admin_Note class.
     */
    class WC_Admin_Note extends \WC_Data
    {
        // Note types.
        const E_WC_ADMIN_NOTE_ERROR = 'error';
        // used for presenting error conditions.
        const E_WC_ADMIN_NOTE_WARNING = 'warning';
        // used for presenting warning conditions.
        const E_WC_ADMIN_NOTE_UPDATE = 'update';
        // i.e. used when a new version is available.
        const E_WC_ADMIN_NOTE_INFORMATIONAL = 'info';
        // used for presenting informational messages.
        // Note status codes.
        const E_WC_ADMIN_NOTE_UNACTIONED = 'unactioned';
        // the note has not yet been actioned by a user.
        const E_WC_ADMIN_NOTE_ACTIONED = 'actioned';
        // the note has had its action completed by a user.
        const E_WC_ADMIN_NOTE_SNOOZED = 'snoozed';
        // the note has been snoozed by a user.
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'admin-note';
        /**
         * Cache group.
         *
         * @var string
         */
        protected $cache_group = 'admin-note';
        /**
         * Note constructor. Loads note data.
         *
         * @param mixed $data Note data, object, or ID.
         */
        public function __construct($data = '')
        {
        }
        /**
         * Merge changes with data and clear.
         *
         * @since 3.0.0
         */
        public function apply_changes()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Helpers
        |--------------------------------------------------------------------------
        |
        | Methods for getting allowed types, statuses.
        |
        */
        /**
         * Get allowed types.
         *
         * @return array
         */
        public static function get_allowed_types()
        {
        }
        /**
         * Get allowed statuses.
         *
         * @return array
         */
        public static function get_allowed_statuses()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Getters
        |--------------------------------------------------------------------------
        |
        | Methods for getting data from the note object.
        |
        */
        /**
         * Get note name.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_name($context = 'view')
        {
        }
        /**
         * Get note type.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_type($context = 'view')
        {
        }
        /**
         * Get note locale.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_locale($context = 'view')
        {
        }
        /**
         * Get note title.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_title($context = 'view')
        {
        }
        /**
         * Get note content.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_content($context = 'view')
        {
        }
        /**
         * Get note icon (Gridicon).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_icon($context = 'view')
        {
        }
        /**
         * Get note content data (i.e. values that would be needed for re-localization)
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_content_data($context = 'view')
        {
        }
        /**
         * Get note status.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_status($context = 'view')
        {
        }
        /**
         * Get note source.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_source($context = 'view')
        {
        }
        /**
         * Get date note was created.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return WC_DateTime|NULL object if the date is set or null if there is no date.
         */
        public function get_date_created($context = 'view')
        {
        }
        /**
         * Get date on which user should be reminded of the note (if any).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return WC_DateTime|NULL object if the date is set or null if there is no date.
         */
        public function get_date_reminder($context = 'view')
        {
        }
        /**
         * Get note snoozability.
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return bool   Whether or not the note can be snoozed.
         */
        public function get_is_snoozable($context = 'view')
        {
        }
        /**
         * Get actions on the note (if any).
         *
         * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return array
         */
        public function get_actions($context = 'view')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Setters
        |--------------------------------------------------------------------------
        |
        | Methods for setting note data. These should not update anything in the
        | database itself and should only change what is stored in the class
        | object.
        |
        */
        /**
         * Set note name.
         *
         * @param string $name Note name.
         */
        public function set_name($name)
        {
        }
        /**
         * Set note type.
         *
         * @param string $type Note type.
         */
        public function set_type($type)
        {
        }
        /**
         * Set note locale.
         *
         * @param string $locale Note locale.
         */
        public function set_locale($locale)
        {
        }
        /**
         * Set note title.
         *
         * @param string $title Note title.
         */
        public function set_title($title)
        {
        }
        /**
         * Set note content.
         *
         * @param string $content Note content.
         */
        public function set_content($content)
        {
        }
        /**
         * Set note icon (Gridicon).
         *
         * @param string $icon Note icon.
         */
        public function set_icon($icon)
        {
        }
        /**
         * Set note data for potential re-localization.
         *
         * @todo Set a default empty array? https://github.com/woocommerce/woocommerce-admin/pull/1763#pullrequestreview-212442921.
         * @param object $content_data Note data.
         */
        public function set_content_data($content_data)
        {
        }
        /**
         * Set note status.
         *
         * @param string $status Note status.
         */
        public function set_status($status)
        {
        }
        /**
         * Set note source.
         *
         * @param string $source Note source.
         */
        public function set_source($source)
        {
        }
        /**
         * Set date note was created. NULL is not allowed
         *
         * @param string|integer $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed.
         */
        public function set_date_created($date)
        {
        }
        /**
         * Set date admin should be reminded of note. NULL IS allowed
         *
         * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
         */
        public function set_date_reminder($date)
        {
        }
        /**
         * Set note snoozability.
         *
         * @param bool $is_snoozable Whether or not the note can be snoozed.
         */
        public function set_is_snoozable($is_snoozable)
        {
        }
        /**
         * Clear actions from a note.
         */
        public function clear_actions()
        {
        }
        /**
         * Add an action to the note
         *
         * @param string  $name    Action name (not presented to user).
         * @param string  $label   Action label (presented as button label).
         * @param string  $url     Action URL, if navigation needed. Optional.
         * @param string  $status  Status to transition parent Note to upon click. Defaults to 'actioned'.
         * @param boolean $primary Whether or not this is the primary action. Defaults to false.
         */
        public function add_action($name, $label, $url = '', $status = self::E_WC_ADMIN_NOTE_ACTIONED, $primary = false)
        {
        }
        /**
         * Set actions on a note.
         *
         * @param array $actions Note actions.
         */
        public function set_actions($actions)
        {
        }
    }
    /**
     * Admin Notes class.
     */
    class WC_Admin_Notes
    {
        /**
         * Hook used for recurring "unsnooze" action.
         */
        const UNSNOOZE_HOOK = 'wc_admin_unsnooze_admin_notes';
        /**
         * Action scheduler group.
         */
        const QUEUE_GROUP = 'wc-admin-notes';
        /**
         * Queue instance.
         *
         * @var WC_Queue_Interface
         */
        protected static $queue = null;
        /**
         * Get queue instance.
         *
         * @return WC_Queue_Interface
         */
        public static function queue()
        {
        }
        /**
         * Hook appropriate actions.
         */
        public static function init()
        {
        }
        /**
         * Get notes from the database.
         *
         * @param string $context Getting notes for what context. Valid values: view, edit.
         * @param array  $args Arguments to pass to the query( e.g. per_page and page).
         * @return array Array of arrays.
         */
        public static function get_notes($context = 'edit', $args = array())
        {
        }
        /**
         * Get admin note using it's ID
         *
         * @param int $note_id Note ID.
         * @return WC_Admin_Note|bool
         */
        public static function get_note($note_id)
        {
        }
        /**
         * Get the total number of notes
         *
         * @param string $type Comma separated list of note types.
         * @param string $status Comma separated list of statuses.
         * @return int
         */
        public static function get_notes_count($type = array(), $status = array())
        {
        }
        /**
         * Deletes admin notes with a given name.
         *
         * @param string $name Name to search for.
         */
        public static function delete_notes_with_name($name)
        {
        }
        /**
         * Clear note snooze status if the reminder date has been reached.
         */
        public static function unsnooze_notes()
        {
        }
        /**
         * Schedule unsnooze notes event.
         */
        public static function schedule_unsnooze_notes()
        {
        }
        /**
         * Clears all queued actions.
         */
        public static function clear_queued_actions()
        {
        }
    }
    /**
     * WC_Admin_Notes_Add_First_Product
     */
    class WC_Admin_Notes_Add_First_Product
    {
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-add-first-product';
        /**
         * Possibly add the note.
         */
        public static function possibly_add_first_product_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Deactivate_Plugin.
     */
    class WC_Admin_Notes_Deactivate_Plugin
    {
        const NOTE_NAME = 'wc-admin-deactivate-plugin';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Creates the note to deactivate the older version.
         */
        public static function add_note()
        {
        }
        /**
         * Delete the note if the version is higher than the included.
         */
        public static function delete_note()
        {
        }
        /**
         * Deactivate feature plugin.
         */
        public function deactivate_feature_plugin()
        {
        }
    }
    /**
     * WC_Admin_Notes_Facebook_Extension
     */
    class WC_Admin_Notes_Facebook_Extension
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-facebook-extension';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Possibly add Facebook extension note.
         */
        public static function possibly_add_facebook_note()
        {
        }
        /**
         * Install Facebook extension when note is actioned.
         *
         * @param WC_Admin_Note $note Note being acted upon.
         */
        public function install_facebook_extension($note)
        {
        }
    }
    /**
     * WC_Admin_Notes_Giving_Feedback_Notes
     */
    class WC_Admin_Notes_Giving_Feedback_Notes
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Add notes for admin giving feedback.
         */
        public static function add_notes_for_admin_giving_feedback()
        {
        }
        /**
         * Possibly add a notice setting moved note.
         */
        protected static function possibly_add_admin_giving_feedback_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Historical_Data.
     */
    class WC_Admin_Notes_Historical_Data
    {
        const NOTE_NAME = 'wc-admin-historical-data';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Update status of note to actioned on data import trigger.
         */
        public static function update_status_to_actioned()
        {
        }
        /**
         * Creates a note for regenerating historical data.
         */
        public static function add_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Mobile_App
     */
    class WC_Admin_Notes_Mobile_App
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-mobile-app';
        /**
         * Possibly add mobile app note.
         */
        public static function possibly_add_mobile_app_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_New_Sales_Record
     */
    class WC_Admin_Notes_New_Sales_Record
    {
        const NOTE_NAME = 'wc-admin-new-sales-record';
        const RECORD_DATE_OPTION_KEY = 'woocommerce_sales_record_date';
        // ISO 8601 (YYYY-MM-DD) date.
        const RECORD_AMOUNT_OPTION_KEY = 'woocommerce_sales_record_amount';
        /**
         * Returns the total of yesterday's sales.
         *
         * @param string $date Date for sales to sum (i.e. YYYY-MM-DD).
         * @return floatval
         */
        public static function sum_sales_for_date($date)
        {
        }
        /**
         * Possibly add a sales record note.
         */
        public static function possibly_add_sales_record_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding.
     */
    class WC_Admin_Notes_Onboarding
    {
        const NOTE_NAME = 'wc-admin-task-list-complete';
        /**
         * Creates a note for task list completion.
         */
        public static function add_task_list_complete_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding_Email_Marketing
     */
    class WC_Admin_Notes_Onboarding_Email_Marketing
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-onboarding-email-marketing';
        /**
         * Possibly add email marketing note.
         */
        public static function possibly_add_onboarding_email_marketing_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Onboarding_Profiler.
     */
    class WC_Admin_Notes_Onboarding_Profiler
    {
        const NOTE_NAME = 'wc-admin-onboarding-profiler-reminder';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Creates a note to remind store owners to complete the profiler.
         */
        public static function add_reminder()
        {
        }
        /**
         * Updates the note status when the profiler is completed.
         *
         * @param mixed $old_value Old value.
         * @param mixed $new_value New value.
         */
        public static function update_status_on_complete($old_value, $new_value)
        {
        }
    }
    /**
     * WC_Admin_Notes_Order_Milestones
     */
    class WC_Admin_Notes_Order_Milestones
    {
        /**
         * Name of the "other milestones" note.
         */
        const ORDERS_MILESTONE_NOTE_NAME = 'wc-admin-orders-milestone';
        /**
         * Option key name to store last order milestone.
         */
        const LAST_ORDER_MILESTONE_OPTION_KEY = 'woocommerce_admin_last_orders_milestone';
        /**
         * Hook to process order milestones.
         */
        const PROCESS_ORDERS_MILESTONE_HOOK = 'wc_admin_process_orders_milestone';
        /**
         * Allowed order statuses for calculating milestones.
         *
         * @var array
         */
        protected $allowed_statuses = array('pending', 'processing', 'completed');
        /**
         * Orders count cache.
         *
         * @var int
         */
        protected $orders_count = null;
        /**
         * Further order milestone thresholds.
         *
         * @var array
         */
        protected $milestones = array(1, 10, 100, 250, 500, 1000, 5000, 10000, 500000, 1000000);
        /**
         * Delay hook attachment until after the WC post types have been registered.
         *
         * This is required for retrieving the order count.
         */
        public function __construct()
        {
        }
        /**
         * Hook everything up.
         */
        public function init()
        {
        }
        /**
         * Clear out our hourly milestone hook upon plugin deactivation.
         */
        public function clear_scheduled_event()
        {
        }
        /**
         * Get the total count of orders (in the allowed statuses).
         *
         * @param bool $no_cache Optional. Skip cache.
         * @return int Total orders count.
         */
        public function get_orders_count($no_cache = false)
        {
        }
        /**
         * Backfill the store's current milestone.
         *
         * Used to avoid celebrating milestones that were reached before plugin activation.
         */
        public function backfill_last_milestone()
        {
        }
        /**
         * Get the store's last milestone.
         *
         * @return int Last milestone reached.
         */
        public function get_last_milestone()
        {
        }
        /**
         * Update the last reached milestone.
         *
         * @param int $milestone Last milestone reached.
         */
        public function set_last_milestone($milestone)
        {
        }
        /**
         * Calculate the current orders milestone.
         *
         * Based on the threshold values in $this->milestones.
         *
         * @return int Current orders milestone.
         */
        public function get_current_milestone()
        {
        }
        /**
         * Get the appropriate note title for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return string Note title for the milestone.
         */
        public function get_note_title_for_milestone($milestone)
        {
        }
        /**
         * Get the appropriate note content for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return string Note content for the milestone.
         */
        public function get_note_content_for_milestone($milestone)
        {
        }
        /**
         * Get the appropriate note action for a given milestone.
         *
         * @param int $milestone Order milestone.
         * @return array Note actoion (name, label, query) for the milestone.
         */
        public function get_note_action_for_milestone($milestone)
        {
        }
        /**
         * Convenience method to see if the milestone notes are enabled.
         *
         * @return boolean True if milestone notifications are enabled.
         */
        public function are_milestones_enabled()
        {
        }
        /**
         * Add milestone notes for other significant thresholds.
         */
        public function other_milestones()
        {
        }
    }
    /**
     * WC_Admin_Notes_Settings_Notes
     */
    class WC_Admin_Notes_Settings_Notes
    {
        /**
         * Add notes for each setting that has moved.
         */
        public static function add_notes_for_settings_that_have_moved()
        {
        }
        /**
         * Possibly add a notice setting moved note.
         */
        protected static function possibly_add_notice_setting_moved_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Tracking_Opt_In
     */
    class WC_Admin_Notes_Tracking_Opt_In
    {
        /**
         * Note traits.
         */
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-admin-usage-tracking-opt-in';
        /**
         * Attach hooks.
         */
        public function __construct()
        {
        }
        /**
         * Possibly add Usage Tracking Opt In extension note.
         */
        public static function possibly_add_tracking_opt_in_note()
        {
        }
        /**
         * Opt in to usage tracking when note is actioned.
         *
         * @param WC_Admin_Note $note Note being acted upon.
         */
        public function opt_in_to_tracking($note)
        {
        }
    }
    /**
     * WC_Admin_Notes_Welcome_Message.
     */
    class WC_Admin_Notes_Welcome_Message
    {
        const NOTE_NAME = 'wc-admin-welcome-note';
        /**
         * Creates a note for welcome message.
         */
        public static function add_welcome_note()
        {
        }
    }
    /**
     * WC_Admin_Notes_Woo_Subscriptions_Notes
     */
    class WC_Admin_Notes_Woo_Subscriptions_Notes
    {
        const LAST_REFRESH_OPTION_KEY = 'woocommerce_admin-wc-helper-last-refresh';
        const CONNECTION_NOTE_NAME = 'wc-admin-wc-helper-connection';
        const SUBSCRIPTION_NOTE_NAME = 'wc-admin-wc-helper-subscription';
        const NOTIFY_WHEN_DAYS_LEFT = 60;
        /**
         * We want to bubble up expiration notices when they cross certain age
         * thresholds. PHP 5.2 doesn't support constant arrays, so we do this.
         *
         * @return array
         */
        private function get_bump_thresholds()
        {
        }
        /**
         * Hook all the things.
         */
        public function __construct()
        {
        }
        /**
         * Reacts to changes in the helper option.
         *
         * @param array $old_value The previous value of the option.
         * @param array $value The new value of the option.
         */
        public function update_option_woocommerce_helper_data($old_value, $value)
        {
        }
        /**
         * Things to do on admin_init.
         */
        public function admin_init()
        {
        }
        /**
         * Checks the connection. Adds a note (as necessary) if there is no connection.
         */
        public function check_connection()
        {
        }
        /**
         * Whether or not we think the site is currently connected to WooCommerce.com.
         *
         * @return bool
         */
        public function is_connected()
        {
        }
        /**
         * Returns the WooCommerce.com provided site ID for this site.
         *
         * @return int|false
         */
        public function get_connected_site_id()
        {
        }
        /**
         * Returns an array of product_ids whose subscriptions are active on this site.
         *
         * @return array
         */
        public function get_subscription_active_product_ids()
        {
        }
        /**
         * Clears all connection or subscription notes.
         */
        public function remove_notes()
        {
        }
        /**
         * Adds a note prompting to connect to WooCommerce.com.
         */
        public function add_no_connection_note()
        {
        }
        /**
         * Gets the product_id (if any) associated with a note.
         *
         * @param WC_Admin_Note $note The note object to interrogate.
         * @return int|false
         */
        public function get_product_id_from_subscription_note(&$note)
        {
        }
        /**
         * Removes notes for product_ids no longer active on this site.
         */
        public function prune_inactive_subscription_notes()
        {
        }
        /**
         * Finds a note for a given product ID, if the note exists at all.
         *
         * @param int $product_id The product ID to search for.
         * @return WC_Admin_Note|false
         */
        public function find_note_for_product_id($product_id)
        {
        }
        /**
         * Deletes a note for a given product ID, if the note exists at all.
         *
         * @param int $product_id The product ID to search for.
         */
        public function delete_any_note_for_product_id($product_id)
        {
        }
        /**
         * Adds or updates a note for an expiring subscription.
         *
         * @param array $subscription The subscription to work with.
         */
        public function add_or_update_subscription_expiring($subscription)
        {
        }
        /**
         * Adds a note for an expired subscription, or updates an expiring note to expired.
         *
         * @param array $subscription The subscription to work with.
         */
        public function add_or_update_subscription_expired($subscription)
        {
        }
        /**
         * For each active subscription on this site, checks the expiration date and creates/updates/deletes notes.
         */
        public function refresh_subscription_notes()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Overrides {
    /**
     * OrderTraits class.
     */
    trait OrderTraits
    {
        /**
         * Calculate shipping amount for line item/product as a total shipping amount ratio based on quantity.
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float|int
         */
        public function get_item_shipping_amount($item)
        {
        }
        /**
         * Calculate shipping tax amount for line item/product as a total shipping tax amount ratio based on quantity.
         *
         * Loosely based on code in includes/admin/meta-boxes/views/html-order-item(s).php.
         *
         * @todo If WC is currently not tax enabled, but it was before (or vice versa), would this work correctly?
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float|int
         */
        public function get_item_shipping_tax_amount($item)
        {
        }
        /**
         * Calculates coupon amount for specified line item/product.
         *
         * Coupon calculation based on woocommerce code in includes/admin/meta-boxes/views/html-order-item.php.
         *
         * @param WC_Order_Item $item Line item from order.
         *
         * @return float
         */
        public function get_item_coupon_amount($item)
        {
        }
    }
    /**
     * WC_Order subclass.
     */
    class Order extends \WC_Order
    {
        /**
         * Order traits.
         */
        use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
        /**
         * Holds refund amounts and quantities for the order.
         *
         * @var void|array
         */
        protected $refunded_line_items;
        /**
         * Add filter(s) required to hook this class to substitute WC_Order.
         */
        public static function add_filters()
        {
        }
        /**
         * Filter function to swap class WC_Order for this one in cases when it's suitable.
         *
         * @param string $classname Name of the class to be created.
         * @param string $order_type Type of order object to be created.
         * @param number $order_id Order id to create.
         *
         * @return string
         */
        public static function order_class_name($classname, $order_type, $order_id)
        {
        }
        /**
         * Get the customer ID used for reports in the customer lookup table.
         *
         * @return int
         */
        public function get_report_customer_id()
        {
        }
        /**
         * Returns true if the customer has made an earlier order.
         *
         * @return bool
         */
        public function is_returning_customer()
        {
        }
        /**
         * Get the customer's first name.
         */
        public function get_customer_first_name()
        {
        }
        /**
         * Get the customer's last name.
         */
        public function get_customer_last_name()
        {
        }
    }
    /**
     * WC_Order_Refund subclass.
     */
    class OrderRefund extends \WC_Order_Refund
    {
        /**
         * Order traits.
         */
        use \Automattic\WooCommerce\Admin\Overrides\OrderTraits;
        /**
         * Add filter(s) required to hook this class to substitute WC_Order_Refund.
         */
        public static function add_filters()
        {
        }
        /**
         * Filter function to swap class WC_Order_Refund for this one in cases when it's suitable.
         *
         * @param string $classname Name of the class to be created.
         * @param string $order_type Type of order object to be created.
         * @param number $order_id Order id to create.
         *
         * @return string
         */
        public static function order_class_name($classname, $order_type, $order_id)
        {
        }
        /**
         * Get the customer ID of the parent order used for reports in the customer lookup table.
         *
         * @return int|bool Customer ID of parent order, or false if parent order not found.
         */
        public function get_report_customer_id()
        {
        }
        /**
         * Returns null since refunds should not be counted towards returning customer counts.
         *
         * @return null
         */
        public function is_returning_customer()
        {
        }
    }
    /**
     * Admin\Overrides\ThemeUpgrader Class.
     */
    class ThemeUpgrader extends \Theme_Upgrader
    {
        /**
         * Install a theme package.
         *
         * @param string $package The full local path or URI of the package.
         * @param array  $args {
         *     Optional. Other arguments for installing a theme package. Default empty array.
         *
         *     @type bool $clear_update_cache Whether to clear the updates cache if successful.
         *                                    Default true.
         * }
         *
         * @return bool|WP_Error True if the installation was successful, false or a WP_Error object otherwise.
         */
        public function install($package, $args = array())
        {
        }
    }
    /**
     * Admin\Overrides\ThemeUpgraderSkin Class.
     */
    class ThemeUpgraderSkin extends \Theme_Upgrader_Skin
    {
        /**
         * Hide the skin header display.
         */
        public function header()
        {
        }
        /**
         * Hide the skin footer display.
         */
        public function footer()
        {
        }
        /**
         * Hide the skin feedback display.
         *
         * @param string $string String to display.
         */
        public function feedback($string)
        {
        }
        /**
         * Hide the skin after display.
         */
        public function after()
        {
        }
    }
    /**
     * Class WC Admin Action Scheduler Store.
     */
    class WPPostStore extends \ActionScheduler_wpPostStore
    {
        /**
         * Action scheduler job priority (lower numbers are claimed first).
         */
        const JOB_PRIORITY = 30;
        /**
         * Create the post array for storing actions as WP posts.
         *
         * For WC Admin actions, force a lower action claim
         * priority by setting a high value for `menu_order`.
         *
         * @param \ActionScheduler_Action $action Action.
         * @param \DateTime               $scheduled_date Action schedule.
         * @return array Post data array for usage in wp_insert_post().
         */
        protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = null)
        {
        }
        /**
         * Forcefully delete all pending WC Admin scheduled actions.
         * Directly trashes items from in database for performance.
         *
         * @param array $action_types Array of actions to delete.
         */
        public function clear_pending_wcadmin_actions($action_types)
        {
        }
        /**
         * Cancel all actions by group.
         *
         * @param string $group Group name.
         */
        public function cancel_actions_by_group($group)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Composer {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '1.0.2';
        /**
         * Package active.
         *
         * @var bool
         */
        private static $package_active = false;
        /**
         * Active version
         *
         * @var bool
         */
        private static $active_version = null;
        /**
         * Init the package.
         *
         * Only initialize for WP 5.3 or greater.
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
         * Return the active version of WC Admin.
         *
         * @return string
         */
        public static function get_active_version()
        {
        }
        /**
         * Return whether the package is active.
         *
         * @return bool
         */
        public static function is_package_active()
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
         * Add deactivation hook for versions of the plugin that don't have the deactivation note.
         */
        public static function on_deactivation()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * PageController
     */
    class PageController
    {
        // JS-powered page root.
        const PAGE_ROOT = 'wc-admin';
        /**
         * Singleton instance of self.
         *
         * @var PageController
         */
        private static $instance = false;
        /**
         * Current page ID (or false if not registered with this controller).
         *
         * @var string
         */
        private $current_page = null;
        /**
         * Registered pages
         * Contains information (breadcrumbs, menu info) about JS powered pages and classic WooCommerce pages.
         *
         * @var array
         */
        private $pages = array();
        /**
         * We want a single instance of this class so we can accurately track registered menus and pages.
         */
        public static function get_instance()
        {
        }
        /**
         * Connect an existing page to wc-admin.
         *
         * @param array $options {
         *   Array describing the page.
         *
         *   @type string       id           Id to reference the page.
         *   @type string|array title        Page title. Used in menus and breadcrumbs.
         *   @type string|null  parent       Parent ID. Null for new top level page.
         *   @type string       path         Path for this page. E.g. admin.php?page=wc-settings&tab=checkout
         *   @type string       capability   Capability needed to access the page.
         *   @type string       icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
         *   @type int          position     Menu item position.
         *   @type boolean      js_page      If this is a JS-powered page.
         * }
         */
        public function connect_page($options)
        {
        }
        /**
         * Determine the current page ID, if it was registered with this controller.
         */
        public function determine_current_page()
        {
        }
        /**
         * Get breadcrumbs for WooCommerce Admin Page navigation.
         *
         * @return array Navigation pieces (breadcrumbs).
         */
        public function get_breadcrumbs()
        {
        }
        /**
         * Get the current page.
         *
         * @return array|boolean Current page or false if not registered with this controller.
         */
        public function get_current_page()
        {
        }
        /**
         * Returns the current screen ID.
         *
         * This is slightly different from WP's get_current_screen, in that it attaches an action,
         * so certain pages like 'add new' pages can have different breadcrumbs or handling.
         * It also catches some more unique dynamic pages like taxonomy/attribute management.
         *
         * Format:
         * - {$current_screen->action}-{$current_screen->action}-tab-section
         * - {$current_screen->action}-{$current_screen->action}-tab
         * - {$current_screen->action}-{$current_screen->action} if no tab is present
         * - {$current_screen->action} if no action or tab is present
         *
         * @return string Current screen ID.
         */
        public function get_current_screen_id()
        {
        }
        /**
         * Returns the path from an ID.
         *
         * @param  string $id  ID to get path for.
         * @return string Path for the given ID, or the ID on lookup miss.
         */
        public function get_path_from_id($id)
        {
        }
        /**
         * Returns true if we are on a page connected to this controller.
         *
         * @return boolean
         */
        public function is_connected_page()
        {
        }
        /**
         * Returns true if we are on a page registed with this controller.
         *
         * @return boolean
         */
        public function is_registered_page()
        {
        }
        /**
         * Adds a JS powered page to wc-admin.
         *
         * @param array $options {
         *   Array describing the page.
         *
         *   @type string      id           Id to reference the page.
         *   @type string      title        Page title. Used in menus and breadcrumbs.
         *   @type string|null parent       Parent ID. Null for new top level page.
         *   @type string      path         Path for this page, full path in app context; ex /analytics/report
         *   @type string      capability   Capability needed to access the page.
         *   @type string      icon         Icon. Dashicons helper class, base64-encoded SVG, or 'none'.
         *   @type int         position     Menu item position.
         * }
         */
        public function register_page($options)
        {
        }
        /**
         * Set up a div for the app to render into.
         */
        public static function page_wrapper()
        {
        }
    }
    /**
     * ReportCSVEmail Class.
     */
    class ReportCSVEmail extends \WC_Email
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * This email has no user-facing settings.
         */
        public function init_form_fields()
        {
        }
        /**
         * This email has no user-facing settings.
         */
        public function init_settings()
        {
        }
        /**
         * Return email type.
         *
         * @return string
         */
        public function get_email_type()
        {
        }
        /**
         * Get email heading.
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Get email subject.
         *
         * @return string
         */
        public function get_default_subject()
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
         * Trigger the sending of this email.
         *
         * @param int    $user_id User ID to email.
         * @param string $report_type The type of report export being emailed.
         * @param string $download_url The URL for downloading the report.
         */
        public function trigger($user_id, $report_type, $download_url)
        {
        }
    }
    /**
     * ReportCSVExporter Class.
     */
    class ReportCSVExporter extends \WC_CSV_Batch_Exporter
    {
        /**
         * Type of report being exported.
         *
         * @var string
         */
        protected $report_type;
        /**
         * Parameters for the report query.
         *
         * @var array
         */
        protected $report_args;
        /**
         * REST controller for the report.
         *
         * @var WC_REST_Reports_Controller
         */
        protected $controller;
        /**
         * Constructor.
         *
         * @param string $type Report type. E.g. 'customers'.
         * @param array  $args Report parameters.
         */
        public function __construct($type = false, $args = array())
        {
        }
        /**
         * Setter for report type.
         *
         * @param string $type The report type. E.g. customers.
         */
        public function set_report_type($type)
        {
        }
        /**
         * Setter for report args.
         *
         * @param array $args The report args.
         */
        public function set_report_args($args)
        {
        }
        /**
         * Get a REST controller instance for the report type.
         *
         * @return bool|WC_REST_Reports_Controller Report controller instance or boolean false on error.
         */
        protected function map_report_controller()
        {
        }
        /**
         * Get the report columns from the controller.
         *
         * @return array Array of report column names.
         */
        protected function get_report_columns()
        {
        }
        /**
         * Get total % complete.
         *
         * Forces an int from parent::get_percent_complete(), which can return a float.
         *
         * @return int Percent complete.
         */
        public function get_percent_complete()
        {
        }
        /**
         * Get total number of rows in export.
         *
         * @return int Number of rows to export.
         */
        public function get_total_rows()
        {
        }
        /**
         * Prepare data for export.
         */
        public function prepare_data_to_export()
        {
        }
        /**
         * Generate row data from a raw report item.
         *
         * @param object $item Report item data.
         * @return array CSV row data.
         */
        protected function get_raw_row_data($item)
        {
        }
        /**
         * Get the export row for a given report item.
         *
         * @param object $item Report item data.
         * @return array CSV row data.
         */
        protected function generate_row_data($item)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Schedulers {
    /**
     * SchedulerTraits class.
     */
    trait SchedulerTraits
    {
        /**
         * Action scheduler group.
         *
         * @var string|null
         */
        public static $group = 'wc-admin-data';
        /**
         * Queue instance.
         *
         * @var WC_Queue_Interface
         */
        protected static $queue = null;
        /**
         * Add all actions as hooks.
         */
        public static function init()
        {
        }
        /**
         * Get queue instance.
         *
         * @return WC_Queue_Interface
         */
        public static function queue()
        {
        }
        /**
         * Set queue instance.
         *
         * @param WC_Queue_Interface $queue Queue instance.
         */
        public static function set_queue($queue)
        {
        }
        /**
         * Gets the default scheduler actions for batching and scheduling actions.
         */
        public static function get_default_scheduler_actions()
        {
        }
        /**
         * Gets the actions for this specific scheduler.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         */
        public static function get_actions()
        {
        }
        /**
         * Get an action tag name from the action name.
         *
         * @param string $action_name The action name.
         * @return string|null
         */
        public static function get_action($action_name)
        {
        }
        /**
         * Returns an array of actions and dependencies as key => value pairs.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get dependencies associated with an action.
         *
         * @param string $action_name The action slug.
         * @return string|null
         */
        public static function get_dependency($action_name)
        {
        }
        /**
         * Batch action size.
         */
        public static function get_batch_sizes()
        {
        }
        /**
         * Returns the batch size for an action.
         *
         * @param string $action Single batch action name.
         * @return int Batch size.
         */
        public static function get_batch_size($action)
        {
        }
        /**
         * Flatten multidimensional arrays to store for scheduling.
         *
         * @param array $args Argument array.
         * @return string
         */
        public static function flatten_args($args)
        {
        }
        /**
         * Check if existing jobs exist for an action and arguments.
         *
         * @param string $action_name Action name.
         * @param array  $args Array of arguments to pass to action.
         * @return bool
         */
        public static function has_existing_jobs($action_name, $args)
        {
        }
        /**
         * Get the next blocking job for an action.
         *
         * @param string $action_name Action name.
         * @return false|ActionScheduler_Action
         */
        public static function get_next_blocking_job($action_name)
        {
        }
        /**
         * Check for blocking jobs and reschedule if any exist.
         */
        public static function do_action_or_reschedule()
        {
        }
        /**
         * Get the DateTime for the next scheduled time an action should run.
         * This function allows backwards compatibility with Action Scheduler < v3.0.
         *
         * @param \ActionScheduler_Action $action Action.
         * @return DateTime|null
         */
        public static function get_next_action_time($action)
        {
        }
        /**
         * Schedule an action to run and check for dependencies.
         *
         * @param string $action_name Action name.
         * @param array  $args Array of arguments to pass to action.
         */
        public static function schedule_action($action_name, $args = array())
        {
        }
        /**
         * Queue a large number of batch jobs, respecting the batch size limit.
         * Reduces a range of batches down to "single batch" jobs.
         *
         * @param int    $range_start Starting batch number.
         * @param int    $range_end Ending batch number.
         * @param string $single_batch_action Action to schedule for a single batch.
         * @param array  $action_args Action arguments.
         * @return void
         */
        public static function queue_batches($range_start, $range_end, $single_batch_action, $action_args = array())
        {
        }
        /**
         * Clears all queued actions.
         */
        public static function clear_queued_actions()
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin {
    /**
     * ReportExporter Class.
     */
    class ReportExporter
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'report_exporter';
        /**
         * Scheduler traits.
         */
        use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
            init as scheduler_init;
        }
        /**
         * Export status option name.
         */
        const EXPORT_STATUS_OPTION = 'woocommerce_admin_report_export_status';
        /**
         * Export file download action.
         */
        const DOWNLOAD_EXPORT_ACTION = 'woocommerce_admin_download_report_csv';
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Add action dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Hook in action methods.
         */
        public static function init()
        {
        }
        /**
         * Queue up actions for a full report export.
         *
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @param array  $report_args Report parameters, passed to data query.
         * @param bool   $send_email Optional. Send an email when the export is complete.
         * @return int Number of items to export.
         */
        public static function queue_report_export($export_id, $report_type, $report_args = array(), $send_email = false)
        {
        }
        /**
         * Process a report export action.
         *
         * @param int    $page_number Page number for this action.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @param array  $report_args Report parameters, passed to data query.
         * @return void
         */
        public static function export_report($page_number, $export_id, $report_type, $report_args)
        {
        }
        /**
         * Generate a key to reference an export status.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @return string Status key.
         */
        protected static function get_status_key($report_type, $export_id)
        {
        }
        /**
         * Update the completion percentage of a report export.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param int    $percentage Completion percentage.
         * @return void
         */
        public static function update_export_percentage_complete($report_type, $export_id, $percentage)
        {
        }
        /**
         * Get the completion percentage of a report export.
         *
         * @param string $report_type Report type. E.g. 'customers'.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @return bool|int Completion percentage, or false if export not found.
         */
        public static function get_export_percentage_complete($report_type, $export_id)
        {
        }
        /**
         * Serve the export file.
         */
        public static function download_export_file()
        {
        }
        /**
         * Process a report export email action.
         *
         * @param int    $user_id User ID that requested the email.
         * @param string $export_id Unique ID for report (timestamp expected).
         * @param string $report_type Report type. E.g. 'customers'.
         * @return void
         */
        public static function email_report_download_link($user_id, $export_id, $report_type)
        {
        }
    }
    /**
     * ReportsSync Class.
     */
    class ReportsSync
    {
        /**
         * Hook in sync methods.
         */
        public static function init()
        {
        }
        /**
         * Get classes for syncing data.
         *
         * @return array
         * @throws \Exception Throws exception when invalid data is found.
         */
        public static function get_schedulers()
        {
        }
        /**
         * Returns true if an import is in progress.
         *
         * @return bool
         */
        public static function is_importing()
        {
        }
        /**
         * Regenerate data for reports.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return string
         */
        public static function regenerate_report_data($days, $skip_existing)
        {
        }
        /**
         * Update the import stat totals and counts.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         */
        public static function reset_import_stats($days, $skip_existing)
        {
        }
        /**
         * Get stats for current import.
         *
         * @return array
         */
        public static function get_import_stats()
        {
        }
        /**
         * Get the import totals for all syncs.
         *
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return array
         */
        public static function get_import_totals($days, $skip_existing)
        {
        }
        /**
         * Clears all queued actions.
         */
        public static function clear_queued_actions()
        {
        }
        /**
         * Delete all data for reports.
         *
         * @return string
         */
        public static function delete_report_data()
        {
        }
        /**
         * Clear the count cache when products are added or updated, or when
         * the no/low stock options are changed.
         *
         * @param int $id Post/product ID.
         */
        public static function clear_stock_count_cache($id)
        {
        }
    }
}
namespace Automattic\WooCommerce\Admin\Schedulers {
    interface ImportInterface
    {
        /**
         * Get items based on query and return IDs along with total available.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported items.
         */
        public static function get_items($limit, $page, $days, $skip_existing);
        /**
         * Get total number of items already imported.
         *
         * @return null
         */
        public static function get_total_imported();
    }
    /**
     * ImportScheduler class.
     */
    abstract class ImportScheduler implements \Automattic\WooCommerce\Admin\Schedulers\ImportInterface
    {
        /**
         * Import stats option name.
         */
        const IMPORT_STATS_OPTION = 'woocommerce_admin_import_stats';
        /**
         * Scheduler traits.
         */
        use \Automattic\WooCommerce\Admin\Schedulers\SchedulerTraits {
            get_batch_sizes as get_scheduler_batch_sizes;
        }
        /**
         * Returns true if an import is in progress.
         *
         * @return bool
         */
        public static function is_importing()
        {
        }
        /**
         * Get batch sizes.
         *
         * @retun array
         */
        public static function get_batch_sizes()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Queue the imports into multiple batches.
         *
         * @param integer|boolean $days Number of days to import.
         * @param boolean         $skip_existing Skip exisiting records.
         */
        public static function import_batch_init($days, $skip_existing)
        {
        }
        /**
         * Imports a batch of items to update.
         *
         * @param int      $batch_number Batch number to import (essentially a query page number).
         * @param int|bool $days Number of days to import.
         * @param bool     $skip_existing Skip exisiting records.
         * @return void
         */
        public static function import_batch($batch_number, $days, $skip_existing)
        {
        }
        /**
         * Queue item deletion in batches.
         */
        public static function delete_batch_init()
        {
        }
        /**
         * Delete a batch by passing the count to be deleted to the child delete method.
         *
         * @return void
         */
        public static function delete_batch()
        {
        }
    }
    /**
     * CustomersScheduler Class.
     */
    class CustomersScheduler extends \Automattic\WooCommerce\Admin\Schedulers\ImportScheduler
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'customers';
        /**
         * Attach customer lookup update hooks.
         */
        public static function init()
        {
        }
        /**
         * Add customer dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get the customer IDs and total count that need to be synced.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported customers.
         */
        public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
        {
        }
        /**
         * Exclude users that already exist in our customer lookup table.
         *
         * Meant to be hooked into 'pre_user_query' action.
         *
         * @param WP_User_Query $wp_user_query WP_User_Query to modify.
         */
        public static function exclude_existing_customers_from_query($wp_user_query)
        {
        }
        /**
         * Get total number of rows imported.
         *
         * @return int
         */
        public static function get_total_imported()
        {
        }
        /**
         * Get all available scheduling actions.
         * Used to determine action hook names and clear events.
         *
         * @return array
         */
        public static function get_scheduler_actions()
        {
        }
        /**
         * Schedule import.
         *
         * @param int $user_id User ID.
         * @return void
         */
        public static function schedule_import($user_id)
        {
        }
        /**
         * Schedule an action to anonymize a single Order.
         *
         * @param WC_Order $order Order object.
         * @return void
         */
        public static function schedule_anonymize($order)
        {
        }
        /**
         * Imports a single customer.
         *
         * @param int $user_id User ID.
         * @return void
         */
        public static function import($user_id)
        {
        }
        /**
         * Delete a batch of customers.
         *
         * @param int $batch_size Number of items to delete.
         * @return void
         */
        public static function delete($batch_size)
        {
        }
        /**
         * Anonymize the customer data for a single order.
         *
         * @param int $order_id Order id.
         * @return void
         */
        public static function anonymize($order_id)
        {
        }
    }
    /**
     * OrdersScheduler Class.
     */
    class OrdersScheduler extends \Automattic\WooCommerce\Admin\Schedulers\ImportScheduler
    {
        /**
         * Slug to identify the scheduler.
         *
         * @var string
         */
        public static $name = 'orders';
        /**
         * Attach order lookup update hooks.
         */
        public static function init()
        {
        }
        /**
         * Add customer dependencies.
         *
         * @return array
         */
        public static function get_dependencies()
        {
        }
        /**
         * Get the order/refund IDs and total count that need to be synced.
         *
         * @param int      $limit Number of records to retrieve.
         * @param int      $page  Page number.
         * @param int|bool $days Number of days prior to current date to limit search results.
         * @param bool     $skip_existing Skip already imported orders.
         */
        public static function get_items($limit = 10, $page = 1, $days = false, $skip_existing = false)
        {
        }
        /**
         * Get total number of rows imported.
         */
        public static function get_total_imported()
        {
        }
        /**
         * Schedule this import if the post is an order or refund.
         *
         * @param int $post_id Post ID.
         */
        public static function possibly_schedule_import($post_id)
        {
        }
        /**
         * Imports a single order or refund to update lookup tables for.
         * If an error is encountered in one of the updates, a retry action is scheduled.
         *
         * @param int $order_id Order or refund ID.
         * @return void
         */
        public static function import($order_id)
        {
        }
        /**
         * Delete a batch of orders.
         *
         * @param int $batch_size Number of items to delete.
         * @return void
         */
        public static function delete($batch_size)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Assets class.
     */
    class Assets
    {
        /**
         * Initialize class features on init.
         *
         * @since 2.5.0
         * Moved most initialization to BootStrap and AssetDataRegistry
         * classes as a part of ongoing refactor
         */
        public static function init()
        {
        }
        /**
         * Register block scripts & styles.
         *
         * @since 2.5.0
         * Moved data related enqueuing to new AssetDataRegistry class
         * as part of ongoing refactoring.
         */
        public static function register_assets()
        {
        }
        /**
         * Add body classes.
         *
         * @param array $classes Array of CSS classnames.
         * @return array Modified array of CSS classnames.
         */
        public static function add_theme_body_class($classes = [])
        {
        }
        /**
         * Returns block-related data for enqueued wc-block-settings script.
         *
         * This is used to map site settings & data into JS-accessible variables.
         *
         * @param array $settings The original settings array from the filter.
         *
         * @since 2.4.0
         * @since 2.5.0 returned merged data along with incoming $settings
         */
        public static function get_wc_block_data($settings)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         * @return string The cache buster value to use for the given file.
         */
        protected static function get_file_version($file)
        {
        }
        /**
         * Registers a script according to `wp_register_script`, additionally loading the translations for the file.
         *
         * @since 2.0.0
         *
         * @param string $handle    Name of the script. Should be unique.
         * @param string $src       Full URL of the script, or path of the script relative to the WordPress root directory.
         * @param array  $deps      Optional. An array of registered script handles this script depends on. Default empty array.
         * @param bool   $has_i18n  Optional. Whether to add a script translation call to this file. Default 'true'.
         */
        protected static function register_script($handle, $src, $deps = [], $has_i18n = true)
        {
        }
        /**
         * Queues a block script.
         *
         * @since 2.3.0
         *
         * @param string $name Name of the script used to identify the file inside build folder.
         */
        public static function register_block_script($name)
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.0.0
         *
         * @param string $handle Name of the stylesheet. Should be unique.
         * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
         * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         */
        protected static function register_style($handle, $src, $deps = [], $media = 'all')
        {
        }
        /**
         * Returns the appropriate asset path for loading either legacy builds or
         * current builds.
         *
         * @param   string $filename  Filename for asset path (without extension).
         * @param   string $type      File type (.css or .js).
         *
         * @return  string             The generated path.
         */
        protected static function get_block_asset_build_path($filename, $type = 'js')
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Assets {
    /**
     * The Api class provides an interface to various asset registration helpers.
     *
     * @since 2.5.0
     */
    class Api
    {
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
         * Returns the dependency array for the given asset relative path.
         *
         * @param string $asset_relative_path  Something like 'build/constants.js'
         *                                     considered to be relative to the main
         *                                     asset path.
         * @param array  $extra_dependencies   Extra dependencies to be explicitly
         *                                     added to the generated array.
         *
         * @return array  An array of dependencies
         */
        protected function get_dependencies($asset_relative_path, $extra_dependencies = [])
        {
        }
        /**
         * Registers a script according to `wp_register_script`, additionally
         * loading the translations for the file.
         *
         * @since 2.5.0
         *
         * @param string $handle        Name of the script. Should be unique.
         * @param string $relative_src  Relative url for the script to the path
         *                              from plugin root.
         * @param array  $deps          Optional. An array of registered script
         *                              handles this script depends on. Default
         *                              empty array.
         * @param bool   $has_i18n      Optional. Whether to add a script
         *                              translation call to this file. Default:
         *                              true.
         */
        public function register_script($handle, $relative_src, $deps = [], $has_i18n = true)
        {
        }
        /**
         * Queues a block script.
         *
         * @since 2.5.0
         *
         * @param string $name Name of the script used to identify the file inside build folder.
         */
        public function register_block_script($name)
        {
        }
        /**
         * Registers a style according to `wp_register_style`.
         *
         * @since 2.5.0
         *
         * @param string $handle Name of the stylesheet. Should be unique.
         * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
         * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
         * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
         *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
         */
        public function register_style($handle, $src, $deps = [], $media = 'all')
        {
        }
    }
    /**
     * Class instance for registering data used on the current view session by
     * assets.
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
         * Exposes core asset data
         *
         * @return array  An array containing core data.
         */
        protected function get_core_data()
        {
        }
        /**
         * Returns block-related data for enqueued wc-settings script.
         * Format order statuses by removing a leading 'wc-' if present.
         *
         * @param array $statuses Order statuses.
         * @return array formatted statuses.
         */
        protected function get_order_statuses($statuses)
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
         * Interface for adding data to the registry.
         *
         * @param string $key  The key used to reference the data being registered.
         *                     You can only register data that is not already in the
         *                     registry identified by the given key.
         * @param mixed  $data If not a function, registered to the registry as is.
         *                     If a function, then the callback is invoked right
         *                     before output to the screen.
         *
         * @throws InvalidArgumentException  Only throws when site is in debug mode.
         *                                   Always logs the error.
         */
        public function add($key, $data)
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
    /**
     * Backwards Compatibility class for plugins using wcSettings in prior versions.
     *
     * Note: This will be removed at some point.
     *
     * @since 2.5.0
     */
    class BackCompatAssetDataRegistry extends \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry
    {
        /**
         * Overrides parent method.
         *
         * @see AssetDataRegistry::enqueue_asset_data
         */
        public function enqueue_asset_data()
        {
        }
        /**
         * Override parent method.
         *
         * @see AssetDataRegistry::get_core_data
         *
         * @return array  An array of data to output for enqueued script.
         */
        protected function get_core_data()
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
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
    }
    /**
     * AbstractDynamicBlock class.
     */
    abstract class AbstractDynamicBlock
    {
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $namespace = 'woocommerce';
        /**
         * Block namespace.
         *
         * @var string
         */
        protected $block_name = '';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Include and render a dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public abstract function render($attributes = array(), $content = '');
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
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
         * Get a set of attributes shared across most of the grid blocks.
         *
         * @return array List of block attributes with type and defaults.
         */
        protected function get_attributes()
        {
        }
        /**
         * Include and render the dynamic block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
         * @param int $id Product ID.
         * @return string Rendered product output.
         */
        public function render_product($id)
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
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * AllProducts class.
     */
    class AllProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'all-products';
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
    }
    /**
     * FeaturedCategory class.
     */
    class FeaturedCategory extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-category';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true);
        /**
         * Render the Featured Category block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array    $attributes Block attributes. Default empty array.
         * @param \WP_Term $category Term object.
         * @return string
         */
        public function get_styles($attributes, $category)
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
         * Returns the main product image URL.
         *
         * @param \WP_Term $category Term object.
         * @param string   $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($category, $size = 'full')
        {
        }
    }
    /**
     * FeaturedProduct class.
     */
    class FeaturedProduct extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
    {
        /**
         * Block name.
         *
         * @var string
         */
        protected $block_name = 'featured-product';
        /**
         * Default attribute values, should match what's set in JS `registerBlockType`.
         *
         * @var array
         */
        protected $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'focalPoint' => false, 'height' => false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => true, 'showPrice' => true);
        /**
         * Render the Featured Product block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
        {
        }
        /**
         * Get the styles for the wrapper element (background image, color).
         *
         * @param array       $attributes Block attributes. Default empty array.
         * @param \WC_Product $product Product object.
         * @return string
         */
        public function get_styles($attributes, $product)
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
         * Returns the main product image URL.
         *
         * @param \WC_Product $product Product object.
         * @param string      $size    Image size, defaults to 'full'.
         * @return string
         */
        public function get_image($product, $size = 'full')
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
        protected function get_attributes()
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
        /**
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
        protected $defaults = array('hasCount' => true, 'hasEmpty' => false, 'isDropdown' => false, 'isHierarchical' => true);
        /**
         * Get block attributes.
         *
         * @return array
         */
        protected function get_attributes()
        {
        }
        /**
         * Render the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
         * @return array
         */
        protected function build_category_tree($categories)
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
        protected function get_attributes()
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
        protected function get_attributes()
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
        protected function get_attributes()
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
        protected function get_attributes()
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
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
         * Registers the block type with WordPress.
         */
        public function register_block_type()
        {
        }
        /**
         * Append frontend scripts when rendering the Product Categories List block.
         *
         * @param array  $attributes Block attributes. Default empty array.
         * @param string $content    Block content. Default empty string.
         * @return string Rendered block type output.
         */
        public function render($attributes = array(), $content = '')
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
        public function init()
        {
        }
        /**
         * Check dependencies exist.
         *
         * @return boolean
         */
        protected function has_dependencies()
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
         * Remove core blocks.
         *
         * Older installs of WooCommerce (3.6 and below) did not use the blocks package and instead included classes directly.
         * This code disables those core classes when running blocks as a feature plugin. Newer versions which use the Blocks package are unaffected.
         *
         * When the feature plugin supports only WooCommerce 3.7+ this method can be removed.
         */
        protected function remove_core_blocks()
        {
        }
    }
    /**
     * Main package class.
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
         * Constructor
         *
         * @param string $version      Version of the plugin.
         * @param string $plugin_path  Path to the main plugin file.
         */
        public function __construct($version, $plugin_path)
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
    }
}
namespace Automattic\WooCommerce\Blocks {
    /**
     * Library class.
     */
    class Library
    {
        /**
         * Initialize block library features.
         */
        public static function init()
        {
        }
        /**
         * Register blocks, hooking up assets and render functions as needed.
         */
        public static function register_blocks()
        {
        }
    }
    /**
     * Main package class.
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
         * everytime the dependency is requested.
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
         * If you want a new instance everytime it's required, then wrap the value
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
namespace Automattic\WooCommerce\Blocks {
    /**
     * RestApi class.
     */
    class RestApi
    {
        /**
         * Initialize class features.
         */
        public static function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public static function register_rest_routes()
        {
        }
        /**
         * Get routes for a namespace.
         *
         * @param string $namespace Namespace to retrieve.
         * @return array|null
         */
        public static function get_routes_from_namespace($namespace)
        {
        }
        /**
         * If we're making a cart request, we may need to load some additonal classes from WC Core so we're ready to deal with requests.
         *
         * Note: We load the session here early so guest nonces are in place.
         *
         * @todo check compat < WC 3.6. Make specific to cart endpoint.
         * @param mixed $return Value being filtered.
         * @return mixed
         */
        public static function maybe_init_cart_session($return)
        {
        }
        /**
         * Return a list of controller classes for this REST API namespace.
         *
         * @return array
         */
        protected static function get_controllers()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * Cart API.
     */
    class Cart extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'cart';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Cart item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get a collection of cart items.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single cart items.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Adds an item to the cart.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function add_item($request)
        {
        }
        /**
         * Convert a woo cart item to JSON schema.
         *
         * @param array $cart_item Cart item array.
         * @return array
         */
        protected function get_object_for_response($cart_item)
        {
        }
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @param int   $product_id contains the id of the product to add to the cart.
         * @param int   $quantity contains the quantity of the item to add.
         * @param int   $variation_id ID of the variation being added to the cart.
         * @param array $variation attribute values.
         * @param array $cart_item_data extra cart item data we want to pass into the item.
         * @return string|\WP_Error
         */
        protected function add_to_cart($product_id = 0, $quantity = 1, $variation_id = 0, $variation = array(), $cart_item_data = array())
        {
        }
    }
}
namespace {
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Attribute_Terms_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes/(?P<attribute_id>[\\d]+)/terms';
        /**
         * Register the routes for terms.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single product attribute term output for response.
         *
         * @param WP_Term $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update term meta fields.
         *
         * @param WP_Term $term
         * @param WP_REST_Request $request
         * @return bool|WP_Error
         */
        protected function update_term_meta_fields($term, $request)
        {
        }
        /**
         * Get the Attribute Term's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V1_Controller
     */
    class WC_REST_Product_Attribute_Terms_V2_Controller extends \WC_REST_Product_Attribute_Terms_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Attribute Terms controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attribute_Terms_V2_Controller
     */
    class WC_REST_Product_Attribute_Terms_Controller extends \WC_REST_Product_Attribute_Terms_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Attribute Terms controller class.
     */
    class ProductAttributeTerms extends \WC_REST_Product_Attribute_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace {
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Attributes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes';
        /**
         * Attribute name.
         *
         * @var string
         */
        protected $attribute = '';
        /**
         * Register the routes for product attributes.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a attribute.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all attributes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single term from a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single attribute.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product attribute output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $attribute Attribute object.
         * @return array Links for the given attribute.
         */
        protected function prepare_links($attribute)
        {
        }
        /**
         * Get the Attribute's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get attribute name.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return string
         */
        protected function get_taxonomy($request)
        {
        }
        /**
         * Get attribute data.
         *
         * @param int $id Attribute ID.
         * @return stdClass|WP_Error
         */
        protected function get_attribute($id)
        {
        }
        /**
         * Validate attribute slug.
         *
         * @deprecated 3.2.0
         * @param string $slug
         * @param bool $new_data
         * @return bool|WP_Error
         */
        protected function validate_attribute_slug($slug, $new_data = \true)
        {
        }
        /**
         * Schedule to flush rewrite rules.
         *
         * @deprecated 3.2.0
         * @since 3.0.0
         */
        protected function flush_rewrite_rules()
        {
        }
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V1_Controller
     */
    class WC_REST_Product_Attributes_V2_Controller extends \WC_REST_Product_Attributes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Attributes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Attributes_V2_Controller
     */
    class WC_REST_Product_Attributes_Controller extends \WC_REST_Product_Attributes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Attributes controller class.
     */
    class ProductAttributes extends \WC_REST_Product_Attributes_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a attribute.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Categories controller class.
     */
    class ProductCategories extends \WC_REST_Product_Categories_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
        /**
         * Prepare a single product category output for response.
         *
         * @param \WP_Term         $item    Term object.
         * @param \WP_REST_Request $request Request instance.
         * @return \WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Update the collection params.
         *
         * Adds new options for 'show_review_count'.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Reviews controller class.
     */
    class ProductReviews extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read the attributes.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all reviews.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return array|WP_Error
         */
        public function get_items($request)
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
         * Prepare a single product review output for response.
         *
         * @param \WP_Comment      $review Product review object.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
}
namespace {
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Tags_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/tags';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_tag';
        /**
         * Prepare a single product tag output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Tag's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V1_Controller
     */
    class WC_REST_Product_Tags_V2_Controller extends \WC_REST_Product_Tags_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Product Tags controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Tags_V2_Controller
     */
    class WC_REST_Product_Tags_Controller extends \WC_REST_Product_Tags_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Controllers {
    /**
     * REST API Product Tags controller class.
     */
    class ProductTags extends \WC_REST_Product_Tags_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check permissions.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @param string           $context Request context.
         * @return bool|\WP_Error
         */
        protected function check_permissions($request, $context = 'read')
        {
        }
    }
    /**
     * REST API Products controller class.
     */
    class Products extends \WC_REST_Products_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read an item.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Change REST API permissions so that authors have access to this API.
         *
         * This code only runs for methods of this class. @see Products::get_items below.
         *
         * @param bool $permission Does the current user have access to the API.
         * @return bool
         */
        public function force_edit_posts_permission($permission)
        {
        }
        /**
         * Get a collection of posts.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Make extra product orderby features supported by WooCommerce available to the WC API.
         * This includes 'price', 'popularity', and 'rating'.
         *
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get product data.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @param string                            $context Request context. Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Get a usable add to cart URL.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_add_to_cart_url($product)
        {
        }
        /**
         * Update the collection params.
         *
         * Adds new options for 'orderby', and new parameters 'category_operator', 'attribute_operator'.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API variations controller class.
     */
    class Variations extends \WC_REST_Product_Variations_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/blocks';
        /**
         * Register the routes for variations.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param  \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Prepare a single variation output for response.
         *
         * @param  \WC_Data         $object  Object data.
         * @param  \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Controllers {
    /**
     * Cart API.
     *
     * @since 2.5.0
     */
    class Cart extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'cart';
        /**
         * Schema class instance.
         *
         * @var object
         */
        protected $schema;
        /**
         * Setup API class.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get the cart.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Cart item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepares a single item output for response.
         *
         * @param array            $cart    Cart array.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response Response object.
         */
        public function prepare_item_for_response($cart, $request)
        {
        }
    }
    /**
     * Cart API.
     *
     * @since 2.5.0
     */
    class CartItems extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'cart/items';
        /**
         * Schema class instance.
         *
         * @var object
         */
        protected $schema;
        /**
         * Setup API class.
         */
        public function __construct()
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of cart items.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single cart items.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|\WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Creates one item from the collection.
         *
         * @param \WP_REST_Request $request Full data about the request.
         * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single cart item.
         *
         * @param \WP_Rest_Request $request Full data about the request.
         * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single cart item.
         *
         * @param \WP_Rest_Request $request Full data about the request.
         * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        public function delete_item($request)
        {
        }
        /**
         * Deletes all items in the cart.
         *
         * @param \WP_Rest_Request $request Full data about the request.
         * @return \WP_Error|\WP_REST_Response Response object on success, or WP_Error object on failure.
         */
        public function delete_items($request)
        {
        }
        /**
         * Cart item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepares a single item output for response.
         *
         * @param array            $cart_item    Cart item array.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response Response object.
         */
        public function prepare_item_for_response($cart_item, $request)
        {
        }
    }
    /**
     * Product attribute terms API.
     *
     * @since 2.5.0
     */
    class ProductAttributeTerms extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes/(?P<attribute_id>[\\d]+)/terms';
        /**
         * Schema class instance.
         *
         * @var TermSchema
         */
        protected $schema;
        /**
         * Query class instance.
         *
         * @var TermQuery
         */
        protected $term_query;
        /**
         * Setup API class.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes.
         */
        public function register_routes()
        {
        }
        /**
         * Item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare a single item for response.
         *
         * @param \WP_Term         $item Term object.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get a collection of attribute terms.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_items($request)
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
    }
    /**
     * Product attributes API.
     *
     * @since 2.5.0
     */
    class ProductAttributes extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/attributes';
        /**
         * Schema class instance.
         *
         * @var ProductAttributeSchema
         */
        protected $schema;
        /**
         * Setup API class.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes.
         */
        public function register_routes()
        {
        }
        /**
         * Item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare a single item for response.
         *
         * @param object           $item Attribute object.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get a single item.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Get a collection of attributes.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_items($request)
        {
        }
    }
    /**
     * ProductCollectionData API.
     *
     * @since 2.5.0
     */
    class ProductCollectionData extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/collection-data';
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Return the schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_items($request)
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
     * Products API.
     *
     * @since 2.5.0
     */
    class Products extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/store';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Schema class instance.
         *
         * @var ProductSchema
         */
        protected $schema;
        /**
         * Query class instance.
         *
         * @var ProductQuery
         */
        protected $product_query;
        /**
         * Setup API class.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Product item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare a single item for response.
         *
         * @param \WC_Product      $item Product object.
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get a single item.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Get a collection of posts and add the post title filter option to \WP_Query.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return RestError|\WP_REST_Response
         */
        public function get_items($request)
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
}
namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas {
    /**
     * AbstractBlock class.
     *
     * @since 2.5.0
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
         * Returns the full item schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Returns schema properties.
         *
         * @return array
         */
        protected abstract function get_properties();
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
         * Prepares HTML based content, such as post titles and content, for the API response.
         *
         * The wptexturize, convert_chars, and trim functions are also used in the `the_title` filter.
         * The function wp_kses_post removes disallowed HTML tags.
         *
         * @param string|array $response Data to format.
         * @return string|array Formatted data.
         */
        protected function prepare_html_response($response)
        {
        }
    }
    /**
     * AbstractBlock class.
     *
     * @since 2.5.0
     */
    class CartItemSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart_item';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        protected function get_properties()
        {
        }
        /**
         * Check given ID exists,
         *
         * @param integer $product_id Product ID.
         * @return bool
         */
        public function product_id_exists($product_id)
        {
        }
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
         * Format variation data, for example convert slugs such as attribute_pa_size to Size.
         *
         * @param array       $variation_data Array of data from the cart.
         * @param \WC_Product $product Product data.
         * @return array
         */
        protected function format_variation_data($variation_data, $product)
        {
        }
        /**
         * Get product attribute taxonomy name.
         *
         * @param string      $slug   Taxonomy name.
         * @param \WC_Product $object Product data.
         * @return string
         */
        protected function get_attribute_taxonomy_name($slug, $object)
        {
        }
    }
    /**
     * CartSchema class.
     *
     * @since 2.5.0
     */
    class CartSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'cart';
        /**
         * Cart schema properties.
         *
         * @return array
         */
        protected function get_properties()
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
    }
    /**
     * ProductAttributeSchema class.
     *
     * @since 2.5.0
     */
    class ProductAttributeSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product_attribute';
        /**
         * Term properties.
         *
         * @return array
         */
        protected function get_properties()
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
     * ProductSchema class.
     *
     * @since 2.5.0
     */
    class ProductSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'product';
        /**
         * Product schema properties.
         *
         * @return array
         */
        protected function get_properties()
        {
        }
        /**
         * Convert a WooCommerce product into an object suitable for the response.
         *
         * @param array $product Product object.
         * @return array
         */
        public function get_item_response($product)
        {
        }
        /**
         * Get an array of pricing data.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_prices($product)
        {
        }
        /**
         * Get price range from certain product types.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @return arary|null
         */
        protected function get_price_range($product)
        {
        }
    }
    /**
     * TermSchema class.
     *
     * @since 2.5.0
     */
    class TermSchema extends \Automattic\WooCommerce\Blocks\RestApi\StoreApi\Schemas\AbstractSchema
    {
        /**
         * The schema item name.
         *
         * @var string
         */
        protected $title = 'term';
        /**
         * Term properties.
         *
         * @return array
         */
        protected function get_properties()
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
}
namespace Automattic\WooCommerce\Blocks\RestApi\StoreApi\Utilities {
    /**
     * Woo Cart Controller class.
     *
     * @since 2.5.0
     */
    class CartController
    {
        /**
         * Based on the core cart class but returns errors rather than rendering notices directly.
         *
         * @throws RestException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return string|Error
         */
        public function add_to_cart($request)
        {
        }
        /**
         * Get main instance of cart class.
         *
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
         * @return array
         */
        public function get_cart_items()
        {
        }
        /**
         * Empty cart contents.
         */
        public function empty_cart()
        {
        }
        /**
         * Get a product object to be added to the cart.
         *
         * @throws RestException Exception if invalid data is detected.
         *
         * @param array $request Add to cart request params.
         * @return \WC_Product|Error Returns a product object if purchasable.
         */
        protected function get_product_for_cart($request)
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
         * @throws RestException Exception if invalid data is detected.
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
         * @throws RestException Exception if variation cannot be found.
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
         * @throws RestException Exception if variation cannot be found.
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
         * @throws RestException Exception if product is invalid.
         *
         * @param \WC_Product $product Product being added to the cart.
         * @return array
         */
        protected function get_variable_product_attributes($product)
        {
        }
    }
    /**
     * Pagination class.
     *
     * @since 2.5.0
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
     * Product Query fllters class.
     *
     * @since 2.5.0
     */
    class ProductQueryFilters
    {
        /**
         * Get filtered min price for current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @return array
         */
        public function get_filtered_price($request)
        {
        }
        /**
         * Get attribute counts for the current products.
         *
         * @param \WP_REST_Request $request The request object.
         * @param array            $attributes Attributes to count, either names or ids.
         * @return array termId=>count pairs.
         */
        public function get_attribute_counts($request, $attributes = [])
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
    }
    /**
     * Product Query class.
     *
     * @since 2.5.0
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
         * Get objects.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_objects($request)
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
         * Add meta query.
         *
         * @param array $args       Query args.
         * @param array $meta_query Meta query.
         * @return array
         */
        protected function add_meta_query($args, $meta_query)
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
     * Term Query class.
     *
     * @since 2.5.0
     */
    class TermQuery
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
         * Get objects.
         *
         * @param \WP_REST_Request $request Request data.
         * @return array
         */
        public function get_objects($request)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\RestApi\Utilities {
    /**
     * ProductImages class.
     */
    class ProductImages
    {
        /**
         * Convert product images/attachments to an array.
         *
         * @param \WC_Product|\WC_Product_Variation $product Product instance.
         * @return array Array of images confirming to product schema.
         */
        public function images_to_array($product)
        {
        }
    }
}
namespace Automattic\WooCommerce\Blocks\Utils {
    /**
     * BlocksWpQuery query.
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
}
namespace {
    /**
     * REST API Coupons controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Coupons_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'coupons';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_coupon';
        /**
         * Coupons actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for coupons.
         */
        public function register_routes()
        {
        }
        /**
         * Query args.
         *
         * @param array $args Query args
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single coupon output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Prepare a single coupon for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single coupon.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a coupon to the database.
         *
         * @since 3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|int
         */
        protected function save_coupon($request)
        {
        }
        /**
         * Get the Coupon's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customer_Downloads_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers/(?P<customer_id>[\\d]+)/downloads';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get all customer downloads.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single download output for response.
         *
         * @param stdObject $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given customer download.
         */
        protected function prepare_links($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Customers_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'customers';
        /**
         * Register the routes for customers.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create customers.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a customer.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get all customers.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single user.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single customer.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User          $user_data User object.
         * @param  WP_REST_Request  $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer $customer
         * @param WP_REST_Request $request
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_User $customer Customer object.
         * @return array Links for the given customer.
         */
        protected function prepare_links($customer)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get role names.
         *
         * @return array
         */
        protected function get_role_names()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Order_Notes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/notes';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Register the routes for order notes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create order notes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a order note.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Delete a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $note Delivery order_note object.
         * @return array Links for the given order note.
         */
        protected function prepare_links($note)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Orders_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Initialize orders actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for orders.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $data
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order $order Order object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order.
         */
        protected function prepare_links($order, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array $args
         * @param WP_REST_Request $request
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Prepare a single order for create.
         *
         * @param  WP_REST_Request $request Request object.
         * @return WP_Error|WC_Order $data Object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create base WC Order object.
         * @deprecated 3.0.0
         * @param array $data
         * @return WC_Order
         */
        protected function create_base_order($data)
        {
        }
        /**
         * Only return writable props from schema.
         * @param  array $schema
         * @return bool
         */
        protected function filter_writable_props($schema)
        {
        }
        /**
         * Create order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function create_order($request)
        {
        }
        /**
         * Update order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int|WP_Error
         */
        protected function update_order($request)
        {
        }
        /**
         * Update address.
         *
         * @param WC_Order $order
         * @param array $posted
         * @param string $type
         */
        protected function update_address($order, $posted, $type = 'billing')
        {
        }
        /**
         * Gets the product ID from the SKU or posted ID.
         *
         * @throws WC_REST_Exception When SKU or ID is not valid.
         * @param array           $posted Request data.
         * @param string          $action 'create' to add line item or 'update' to update it.
         * @return int
         */
        protected function get_product_id($posted, $action = 'create')
        {
        }
        /**
         * Maybe set an item prop if the value was posted.
         * @param WC_Order_Item $item
         * @param string $prop
         * @param array $posted Request data.
         */
        protected function maybe_set_item_prop($item, $prop, $posted)
        {
        }
        /**
         * Maybe set item props if the values were posted.
         * @param WC_Order_Item $item
         * @param string[] $props
         * @param array $posted Request data.
         */
        protected function maybe_set_item_props($item, $props, $posted)
        {
        }
        /**
         * Create or update a line item.
         *
         * @param array $posted Line item data.
         * @param string $action 'create' to add line item or 'update' to update it.
         *
         * @return WC_Order_Item_Product
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_line_items($posted, $action = 'create')
        {
        }
        /**
         * Create or update an order shipping method.
         *
         * @param $posted $shipping Item data.
         * @param string $action 'create' to add shipping or 'update' to update it.
         *
         * @return WC_Order_Item_Shipping
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_shipping_lines($posted, $action)
        {
        }
        /**
         * Create or update an order fee.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add fee or 'update' to update it.
         *
         * @return WC_Order_Item_Fee
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_fee_lines($posted, $action)
        {
        }
        /**
         * Create or update an order coupon.
         *
         * @param array $posted Item data.
         * @param string $action 'create' to add coupon or 'update' to update it.
         *
         * @return WC_Order_Item_Coupon
         * @throws WC_REST_Exception Invalid data, server error.
         */
        protected function prepare_coupon_lines($posted, $action)
        {
        }
        /**
         * Wrapper method to create/update order items.
         * When updating, the item ID provided is checked to ensure it is associated
         * with the order.
         *
         * @param WC_Order $order order
         * @param string $item_type
         * @param array $posted item provided in the request body
         * @throws WC_REST_Exception If item ID is not associated with order
         */
        protected function set_item($order, $item_type, $posted)
        {
        }
        /**
         * Helper method to check if the resource ID associated with the provided item is null.
         * Items can be deleted by setting the resource ID to null.
         *
         * @param array $item Item provided in the request body.
         * @return bool True if the item resource ID is null, false otherwise.
         */
        protected function item_is_null($item)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single order.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get order statuses without prefixes.
         * @return array
         */
        protected function get_order_statuses()
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V1_Controller
     */
    class WC_REST_Order_Refunds_V1_Controller extends \WC_REST_Orders_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Prepare a single order refund output for response.
         *
         * @param WP_Post $post Post object.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Order_Refund $refund Comment object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given order refund.
         */
        protected function prepare_links($refund, $request)
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request object.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Create a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Product_Reviews_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhook deliveries.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create a new product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a product review.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all reviews from a product.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product review.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a product review.
         *
         * @param WP_REST_Request $request Full details about the request
         *
         * @return bool|WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Prepare a single product review to be inserted into the database.
         *
         * @param  WP_REST_Request $request Request object.
         * @return array|WP_Error  $prepared_review
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WP_Comment $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product review.
         */
        protected function prepare_links($review, $request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Terms_Controller
     */
    class WC_REST_Product_Shipping_Classes_V1_Controller extends \WC_REST_Terms_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/shipping_classes';
        /**
         * Taxonomy.
         *
         * @var string
         */
        protected $taxonomy = 'product_shipping_class';
        /**
         * Prepare a single product shipping class output for response.
         *
         * @param obj $item Term object.
         * @param WP_REST_Request $request
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the Shipping Class schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Posts_Controller
     */
    class WC_REST_Products_V1_Controller extends \WC_REST_Posts_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'product';
        /**
         * Initialize product actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
        /**
         * Get post types.
         *
         * @return array
         */
        protected function get_post_types()
        {
        }
        /**
         * Query args.
         *
         * @param array           $args    Request args.
         * @param WP_REST_Request $request Request data.
         * @return array
         */
        public function query_args($args, $request)
        {
        }
        /**
         * Get the downloads for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_downloads($product)
        {
        }
        /**
         * Get taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param string     $taxonomy Taxonomy slug.
         * @return array
         */
        protected function get_taxonomy_terms($product, $taxonomy = 'cat')
        {
        }
        /**
         * Get the images for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_images($product)
        {
        }
        /**
         * Get attribute taxonomy label.
         *
         * @param  string $name Taxonomy name.
         * @return string
         */
        protected function get_attribute_taxonomy_label($name)
        {
        }
        /**
         * Get default attributes.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_default_attributes($product)
        {
        }
        /**
         * Get attribute options.
         *
         * @param int   $product_id Product ID.
         * @param array $attribute  Attribute data.
         * @return array
         */
        protected function get_attribute_options($product_id, $attribute)
        {
        }
        /**
         * Get the attributes for a product or product variation.
         *
         * @param WC_Product|WC_Product_Variation $product Product instance.
         * @return array
         */
        protected function get_attributes($product)
        {
        }
        /**
         * Get product menu order.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product Product instance.
         * @return int
         */
        protected function get_product_menu_order($product)
        {
        }
        /**
         * Get product data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_product_data($product)
        {
        }
        /**
         * Get an individual variation's data.
         *
         * @param WC_Product $product Product instance.
         * @return array
         */
        protected function get_variation_data($product)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WP_Post         $post    Post object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($post, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Product      $product Product object.
         * @param WP_REST_Request $request Request object.
         * @return array Links for the given product.
         */
        protected function prepare_links($product, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Create a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Saves a product to the database.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return int
         */
        public function save_product($request)
        {
        }
        /**
         * Save product images.
         *
         * @deprecated 3.0.0
         * @param int $product_id
         * @param array $images
         * @throws WC_REST_Exception
         */
        protected function save_product_images($product_id, $images)
        {
        }
        /**
         * Set product images.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product $product Product instance.
         * @param array      $images  Images data.
         * @return WC_Product
         */
        protected function set_product_images($product, $images)
        {
        }
        /**
         * Save product shipping data.
         *
         * @param WC_Product $product Product instance.
         * @param array      $data    Shipping data.
         * @return WC_Product
         */
        protected function save_product_shipping_data($product, $data)
        {
        }
        /**
         * Save downloadable files.
         *
         * @param WC_Product $product    Product instance.
         * @param array      $downloads  Downloads data.
         * @param int        $deprecated Deprecated since 3.0.
         * @return WC_Product
         */
        protected function save_downloadable_files($product, $downloads, $deprecated = 0)
        {
        }
        /**
         * Save taxonomy terms.
         *
         * @param WC_Product $product  Product instance.
         * @param array      $terms    Terms data.
         * @param string     $taxonomy Taxonomy name.
         * @return WC_Product
         */
        protected function save_taxonomy_terms($product, $terms, $taxonomy = 'cat')
        {
        }
        /**
         * Save default attributes.
         *
         * @since 3.0.0
         *
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function save_default_attributes($product, $request)
        {
        }
        /**
         * Save product meta.
         *
         * @deprecated 3.0.0
         * @param WC_Product $product
         * @param WP_REST_Request $request
         * @return bool
         * @throws WC_REST_Exception
         */
        protected function save_product_meta($product, $request)
        {
        }
        /**
         * Set product meta.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product Product instance.
         * @param WP_REST_Request $request Request data.
         * @return WC_Product
         */
        protected function set_product_meta($product, $request)
        {
        }
        /**
         * Save variations.
         *
         * @throws WC_REST_Exception REST API exceptions.
         * @param WC_Product      $product          Product instance.
         * @param WP_REST_Request $request          Request data.
         * @return bool
         */
        protected function save_variations_data($product, $request)
        {
        }
        /**
         * Add post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function add_post_meta_fields($post, $request)
        {
        }
        /**
         * Update post meta fields.
         *
         * @param WP_Post         $post    Post data.
         * @param WP_REST_Request $request Request data.
         * @return bool|WP_Error
         */
        protected function update_post_meta_fields($post, $request)
        {
        }
        /**
         * Clear cache/transients.
         *
         * @param WP_Post $post Post data.
         */
        public function clear_transients($post)
        {
        }
        /**
         * Delete post.
         *
         * @param int|WP_Post $id Post ID or WP_Post instance.
         */
        protected function delete_post($id)
        {
        }
        /**
         * Delete a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Report_Sales_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/sales';
        /**
         * Report instance.
         *
         * @var WC_Admin_Report
         */
        protected $report;
        /**
         * Register the routes for sales reports.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read report.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param null $_
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($_, $request)
        {
        }
        /**
         * Setup the report object and parse any date filtering.
         *
         * @param array $filter date filtering
         */
        protected function setup_report($filter)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V1_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/top_sellers';
        /**
         * Get sales reports.
         *
         * @param WP_REST_Request $request
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @param stdClass $top_seller
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($top_seller, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Tax_Classes_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'taxes/classes';
        /**
         * Register the routes for tax classes.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create tax classes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get all tax classes.
         *
         * @param WP_REST_Request $request
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a single tax class.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single tax class output for response.
         *
         * @param array $tax_class Tax class data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($tax_class, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @return array Links for the given tax class.
         */
        protected function prepare_links()
        {
        }
        /**
         * Get the Tax Classes schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhook_Deliveries_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks/(?P<webhook_id>[\\d]+)/deliveries';
        /**
         * Register the routes for webhook deliveries.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read taxes.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a tax.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get all webhook deliveries.
         *
         * @param WP_REST_Request $request
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single webhook delivery.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param stdClass $log Delivery log object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param stdClass $log Delivery log object.
         * @return array Links for the given webhook delivery.
         */
        protected function prepare_links($log)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Webhooks_V1_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'webhooks';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_webhook';
        /**
         * Register the routes for webhooks.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create webhooks.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access update a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a webhook.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access batch create, update and delete items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         *
         * @return bool|WP_Error
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get all webhooks.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single webhook.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single webhook for create or update.
         *
         * @param WP_REST_Request $request Request object.
         * @return WP_Error|stdClass $data Post object.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare a single webhook output for response.
         *
         * @param int               $id       Webhook ID or object.
         * @param WP_REST_Request   $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $id Webhook ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections of attachments.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V1_Controller
     */
    class WC_REST_Customer_Downloads_V2_Controller extends \WC_REST_Customer_Downloads_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single download output for response.
         *
         * @param stdClass        $download Download object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($download, $request)
        {
        }
        /**
         * Get the Customer Download's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V1_Controller
     */
    class WC_REST_Customers_V2_Controller extends \WC_REST_Customers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single customer output for response.
         *
         * @param  WP_User         $user_data User object.
         * @param  WP_REST_Request $request   Request object.
         * @return WP_REST_Response $response  Response data.
         */
        public function prepare_item_for_response($user_data, $request)
        {
        }
        /**
         * Update customer meta fields.
         *
         * @param WC_Customer     $customer Customer data.
         * @param WP_REST_Request $request  Request data.
         */
        protected function update_customer_meta_fields($customer, $request)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Register the routes for network orders.
         */
        public function register_routes()
        {
        }
        /**
         * Retrieves the item's schema for display / public consumption purposes.
         *
         * @return array Public item schema data.
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Does a permissions check for the proper requested blog
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return bool $permission
         */
        public function network_orders_permissions_check($request)
        {
        }
        /**
         * Get a collection of orders from the requested blog id
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response
         */
        public function network_orders($request)
        {
        }
        /**
         * Filters the post statuses to on hold and processing for the network order query.
         *
         * @param array $args Query args.
         *
         * @return array
         */
        public function network_orders_filter_args($args)
        {
        }
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V1_Controller
     */
    class WC_REST_Order_Notes_V2_Controller extends \WC_REST_Order_Notes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Get order notes from an order.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Orders_V2_Controller
     */
    class WC_REST_Order_Refunds_V2_Controller extends \WC_REST_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\\d]+)/refunds';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order_refund';
        /**
         * Stores the request.
         *
         * @var array
         */
        protected $request = array();
        /**
         * Order refunds actions.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for order refunds.
         */
        public function register_routes()
        {
        }
        /**
         * Get object.
         *
         * @since  3.0.0
         * @param  int $id Object ID.
         * @return WC_Data
         */
        protected function get_object($id)
        {
        }
        /**
         * Get formatted item data.
         *
         * @since  3.0.0
         * @param  WC_Data $object WC_Data instance.
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Prepare a single order output for response.
         *
         * @since  3.0.0
         *
         * @param  WC_Data         $object  Object data.
         * @param  WP_REST_Request $request Request object.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Data         $object  Object data.
         * @param WP_REST_Request $request Request object.
         * @return array                   Links for the given post.
         */
        protected function prepare_links($object, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Full details about the request.
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Save an object data.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request  Full details about the request.
         * @param  bool            $creating If is creating a new object.
         * @return WC_Data|WP_Error
         */
        protected function save_object($request, $creating = \false)
        {
        }
        /**
         * Get the Order's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Payment_Gateways_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'payment_gateways';
        /**
         * Register the route for /payment_gateways and /payment_gateways/<id>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a payment gateway.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit payment gateways.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Get payment gateways.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single payment gateway.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update A Single Payment Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Get a gateway based on the current request object.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|null
         */
        public function get_gateway($request)
        {
        }
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway data.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return array
         */
        protected function prepare_links($gateway, $request)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Product Reviews Controller Class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Reviews_V1_Controller
     */
    class WC_REST_Product_Reviews_V2_Controller extends \WC_REST_Product_Reviews_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/(?P<product_id>[\\d]+)/reviews';
        /**
         * Register the routes for product reviews.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to batch manage product reviews.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function batch_items_permissions_check($request)
        {
        }
        /**
         * Prepare a single product review output for response.
         *
         * @param WP_Comment      $review Product review object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($review, $request)
        {
        }
        /**
         * Bulk create, update and delete items.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full details about the request.
         * @return array Of WP_Error or WP_REST_Response.
         */
        public function batch_items($request)
        {
        }
        /**
         * Get the Product Review's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V1_Controller
     */
    class WC_REST_Product_Shipping_Classes_V2_Controller extends \WC_REST_Product_Shipping_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V1_Controller
     */
    class WC_REST_Report_Sales_V2_Controller extends \WC_REST_Report_Sales_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V1_Controller
     */
    class WC_REST_Report_Top_Sellers_V2_Controller extends \WC_REST_Report_Top_Sellers_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Settings_V2_Controller extends \WC_REST_Controller
    {
        /**
         * WP REST API namespace/version.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'settings';
        /**
         * Register routes.
         *
         * @since 3.0.0
         */
        public function register_routes()
        {
        }
        /**
         * Get all settings groups items.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $group_id Group ID.
         * @return array Links for the given group.
         */
        protected function prepare_links($group_id)
        {
        }
        /**
         * Prepare a report sales object for serialization.
         *
         * @since  3.0.0
         * @param array           $item Group object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Filters out bad values from the groups array/filter so we
         * only return known values via the API.
         *
         * @since 3.0.0
         * @param  array $group Group.
         * @return array
         */
        public function filter_group($group)
        {
        }
        /**
         * Callback for allowed keys for each group response.
         *
         * @since  3.0.0
         * @param  string $key Key to check.
         * @return boolean
         */
        public function allowed_group_keys($key)
        {
        }
        /**
         * Returns default settings for groups. null means the field is required.
         *
         * @since  3.0.0
         * @return array
         */
        protected function group_defaults()
        {
        }
        /**
         * Makes sure the current user has access to READ the settings APIs.
         *
         * @since  3.0.0
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Shipping_Methods_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping_methods';
        /**
         * Register the route for /shipping_methods and /shipping_methods/<method>
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view shipping methods.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a shipping method.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get shipping methods.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single Shipping Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare a shipping method for response.
         *
         * @param  WC_Shipping_Method $method   Shipping method object.
         * @param  WP_REST_Request    $request  Request object.
         * @return WP_REST_Response   $response Response data.
         */
        public function prepare_item_for_response($method, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param WC_Shipping_Method $method Shipping method object.
         * @param WP_REST_Request    $request Request object.
         * @return array
         */
        protected function prepare_links($method, $request)
        {
        }
        /**
         * Get the shipping method schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    /**
     * REST API Shipping Zones base class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    abstract class WC_REST_Shipping_Zones_Controller_Base extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipping/zones';
        /**
         * Retrieve a Shipping Zone by it's ID.
         *
         * @param int $zone_id Shipping Zone ID.
         * @return WC_Shipping_Zone|WP_Error
         */
        protected function get_zone($zone_id)
        {
        }
        /**
         * Check whether a given request has permission to read Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to edit Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to delete Shipping Zones.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_items_permissions_check($request)
        {
        }
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Locations_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Locations.
         */
        public function register_routes()
        {
        }
        /**
         * Get all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Update all Shipping Zone Locations.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_items($request)
        {
        }
        /**
         * Prepare the Shipping Zone Location for the REST response.
         *
         * @param array           $item Shipping Zone Location.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone Location.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zone Locations schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zone_Methods_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zone Methods.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zone Methods.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Create a new shipping zone method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Delete a shipping method instance.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function delete_item($request)
        {
        }
        /**
         * Update A Single Shipping Zone Method.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Updates settings, order, and enabled status on create.
         *
         * @param int                $instance_id Instance ID.
         * @param WC_Shipping_Method $method      Shipping method data.
         * @param WP_REST_Request    $request     Request data.
         *
         * @return WC_Shipping_Method
         */
        public function update_fields($instance_id, $method, $request)
        {
        }
        /**
         * Prepare the Shipping Zone Method for the REST response.
         *
         * @param array           $item Shipping Zone Method.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Return settings associated with this shipping zone method instance.
         *
         * @param WC_Shipping_Method $item Shipping method data.
         *
         * @return array
         */
        public function get_settings($item)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @param int $instance_id Given Shipping Zone Method Instance ID.
         * @return array Links for the given Shipping Zone Method.
         */
        protected function prepare_links($zone_id, $instance_id)
        {
        }
        /**
         * Get the Shipping Zone Methods schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_Controller_Base
     */
    class WC_REST_Shipping_Zones_V2_Controller extends \WC_REST_Shipping_Zones_Controller_Base
    {
        /**
         * Register the routes for Shipping Zones.
         */
        public function register_routes()
        {
        }
        /**
         * Get a single Shipping Zone.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Get all Shipping Zones.
         *
         * @param WP_REST_Request $request Request data.
         * @return WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single Shipping Zone.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare the Shipping Zone for the REST response.
         *
         * @param array           $item Shipping Zone.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int $zone_id Given Shipping Zone ID.
         * @return array Links for the given Shipping Zone.
         */
        protected function prepare_links($zone_id)
        {
        }
        /**
         * Get the Shipping Zones schema, conforming to JSON Schema
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_Tools_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status/tools';
        /**
         * Register the routes for /system_status/tools/*.
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status tools.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to view a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to execute a specific system status tool.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * A list of available tools for use in the system status section.
         * 'button' becomes 'action' in the API.
         *
         * @return array
         */
        public function get_tools()
        {
        }
        /**
         * Get a list of system status tools.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return a single tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Update (execute) a tool.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepare a tool item for serialization.
         *
         * @param  array           $item     Object.
         * @param  WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the system status tools schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param string $id ID.
         * @return array
         */
        protected function prepare_links($id)
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Actually executes a tool.
         *
         * @param  string $tool Tool.
         * @return array
         */
        public function execute_tool($tool)
        {
        }
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_System_Status_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'system_status';
        /**
         * Register the route for /system_status
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to view system status.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get a system status info, by section.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get the system status schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Return an array of sections and the data associated with each.
         *
         * @deprecated 3.9.0
         * @return array
         */
        public function get_item_mappings()
        {
        }
        /**
         * Return an array of sections and the data associated with each.
         *
         * @since 3.9.0
         * @param array $fields List of fields to be included on the response.
         * @return array
         */
        public function get_item_mappings_per_fields($fields)
        {
        }
        /**
         * Get array of environment information. Includes thing like software
         * versions, and various server settings.
         *
         * @deprecated 3.9.0
         * @return array
         */
        public function get_environment_info()
        {
        }
        /**
         * Check if field item exists.
         *
         * @since 3.9.0
         * @param string $section Fields section.
         * @param array  $items List of items to check for.
         * @param array  $fields List of fields to be included on the response.
         * @return bool
         */
        private function check_if_field_item_exists($section, $items, $fields)
        {
        }
        /**
         * Get array of environment information. Includes thing like software
         * versions, and various server settings.
         *
         * @param array $fields List of fields to be included on the response.
         * @return array
         */
        public function get_environment_info_per_fields($fields)
        {
        }
        /**
         * Add prefix to table.
         *
         * @param string $table Table name.
         * @return stromg
         */
        protected function add_db_table_prefix($table)
        {
        }
        /**
         * Get array of database information. Version, prefix, and table existence.
         *
         * @return array
         */
        public function get_database_info()
        {
        }
        /**
         * Get array of counts of objects. Orders, products, etc.
         *
         * @return array
         */
        public function get_post_type_counts()
        {
        }
        /**
         * Get a list of plugins active on the site.
         *
         * @return array
         */
        public function get_active_plugins()
        {
        }
        /**
         * Get a list of inplugins active on the site.
         *
         * @return array
         */
        public function get_inactive_plugins()
        {
        }
        /**
         * Format plugin data, including data on updates, into a standard format.
         *
         * @since 3.6.0
         * @param string $plugin Plugin directory/file.
         * @param array  $data Plugin data from WP.
         * @return array Formatted data.
         */
        protected function format_plugin_data($plugin, $data)
        {
        }
        /**
         * Get a list of Dropins and MU plugins.
         *
         * @since 3.6.0
         * @return array
         */
        public function get_dropins_mu_plugins()
        {
        }
        /**
         * Get info on the current active theme, info on parent theme (if presnet)
         * and a list of template overrides.
         *
         * @return array
         */
        public function get_theme_info()
        {
        }
        /**
         * Get some setting values for the site that are useful for debugging
         * purposes. For full settings access, use the settings api.
         *
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Returns security tips.
         *
         * @return array
         */
        public function get_security_info()
        {
        }
        /**
         * Returns a mini-report on WC pages and if they are configured correctly:
         * Present, visible, and including the correct shortcode.
         *
         * @return array
         */
        public function get_pages()
        {
        }
        /**
         * Get any query params needed.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Prepare the system status response
         *
         * @param  array           $system_status System status data.
         * @param  WP_REST_Request $request       Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($system_status, $request)
        {
        }
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V1_Controller
     */
    class WC_REST_Tax_Classes_V2_Controller extends \WC_REST_Tax_Classes_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
    }
    /**
     * REST API Webhook Deliveries controller class.
     *
     * @deprecated 3.3.0 Webhooks deliveries logs now uses logging system.
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhook_Deliveries_V1_Controller
     */
    class WC_REST_Webhook_Deliveries_V2_Controller extends \WC_REST_Webhook_Deliveries_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook delivery output for response.
         *
         * @param  stdClass        $log Delivery log object.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($log, $request)
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V1_Controller
     */
    class WC_REST_Webhooks_V2_Controller extends \WC_REST_Webhooks_V1_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v2';
        /**
         * Prepare a single webhook output for response.
         *
         * @param int             $id       Webhook ID.
         * @param WP_REST_Request $request  Request object.
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($id, $request)
        {
        }
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
        /**
         * Get the Webhook's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customer_Downloads_V2_Controller
     */
    class WC_REST_Customer_Downloads_Controller extends \WC_REST_Customer_Downloads_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Customers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Customers_V2_Controller
     */
    class WC_REST_Customers_Controller extends \WC_REST_Customers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get formatted item data.
         *
         * @param WC_Data $object WC_Data instance.
         *
         * @since  3.0.0
         * @return array
         */
        protected function get_formatted_item_data($object)
        {
        }
        /**
         * Get the Customer's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data continents controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Controller
     */
    class WC_REST_Data_Continents_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/continents';
        /**
         * Register routes.
         *
         * @since 3.5.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the list of countries and states for a given continent.
         *
         * @since  3.5.0
         * @param  string          $continent_code Continent code.
         * @param  WP_REST_Request $request        Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_continent($continent_code = \false, $request)
        {
        }
        /**
         * Return the list of states for all continents.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of locations for a given continent.
         *
         * @since  3.5.0
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.5.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given continent.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.5.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data Currencies controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     */
    class WC_REST_Data_Currencies_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/currencies';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Get currency information.
         *
         * @param  string          $code    Currency code.
         * @param  WP_REST_Request $request Request data.
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_currency($code = \false, $request)
        {
        }
        /**
         * Return the list of currencies.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return information for a specific currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Return information for the current site currency.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function get_current_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given currency.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the currency schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Network Orders controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Network_Orders_V2_Controller
     */
    class WC_REST_Network_Orders_Controller extends \WC_REST_Network_Orders_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Order Notes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Notes_V2_Controller
     */
    class WC_REST_Order_Notes_Controller extends \WC_REST_Order_Notes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a single order note output for response.
         *
         * @param WP_Comment      $note    Order note object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($note, $request)
        {
        }
        /**
         * Create a single order note.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Order Refunds controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Order_Refunds_V2_Controller
     */
    class WC_REST_Order_Refunds_Controller extends \WC_REST_Order_Refunds_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepares one object for create or update operation.
         *
         * @since  3.0.0
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
    }
    /**
     * Paymenga gateways controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Payment_Gateways_V2_Controller
     */
    class WC_REST_Payment_Gateways_Controller extends \WC_REST_Payment_Gateways_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Prepare a payment gateway for response.
         *
         * @param  WC_Payment_Gateway $gateway    Payment gateway object.
         * @param  WP_REST_Request    $request    Request object.
         * @return WP_REST_Response   $response   Response data.
         */
        public function prepare_item_for_response($gateway, $request)
        {
        }
        /**
         * Return settings associated with this payment gateway.
         *
         * @param WC_Payment_Gateway $gateway Gateway instance.
         *
         * @return array
         */
        public function get_settings($gateway)
        {
        }
        /**
         * Get the payment gateway schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Product Shipping Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Product_Shipping_Classes_V2_Controller
     */
    class WC_REST_Product_Shipping_Classes_Controller extends \WC_REST_Product_Shipping_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Reports Coupons Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Coupons_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/coupons/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Customers Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Customers_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/customers/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Orders Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Orders_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/orders/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Products Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Products_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/products/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Reports Reviews Totals controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Reports_Controller
     */
    class WC_REST_Report_Reviews_Totals_Controller extends \WC_REST_Reports_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'reports/reviews/totals';
        /**
         * Get reports list.
         *
         * @since 3.5.0
         * @return array
         */
        protected function get_reports()
        {
        }
        /**
         * Prepare a report object for serialization.
         *
         * @param  stdClass        $report Report data.
         * @param  WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($report, $request)
        {
        }
        /**
         * Get the Report's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Report Sales controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Sales_V2_Controller
     */
    class WC_REST_Report_Sales_Controller extends \WC_REST_Report_Sales_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Report Top Sellers controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Report_Top_Sellers_V2_Controller
     */
    class WC_REST_Report_Top_Sellers_Controller extends \WC_REST_Report_Top_Sellers_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Settings controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Settings_V2_Controller
     */
    class WC_REST_Settings_Controller extends \WC_REST_Settings_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Makes sure the current user has access to WRITE the settings APIs.
         *
         * @param WP_REST_Request $request Full data about the request.
         * @return WP_Error|bool
         */
        public function update_items_permissions_check($request)
        {
        }
        /**
         * Update a setting.
         *
         * @param  WP_REST_Request $request Request data.
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Get the groups schema, conforming to JSON Schema.
         *
         * @since  3.0.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * Shipping methods controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Methods_V2_Controller
     */
    class WC_REST_Shipping_Methods_Controller extends \WC_REST_Shipping_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Locations class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Locations_V2_Controller
     */
    class WC_REST_Shipping_Zone_Locations_Controller extends \WC_REST_Shipping_Zone_Locations_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zone Methods class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zone_Methods_V2_Controller
     */
    class WC_REST_Shipping_Zone_Methods_Controller extends \WC_REST_Shipping_Zone_Methods_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Shipping Zones class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Shipping_Zones_V2_Controller
     */
    class WC_REST_Shipping_Zones_Controller extends \WC_REST_Shipping_Zones_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_V2_Controller
     */
    class WC_REST_System_Status_Controller extends \WC_REST_System_Status_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * System status tools controller.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_System_Status_Tools_V2_Controller
     */
    class WC_REST_System_Status_Tools_Controller extends \WC_REST_System_Status_Tools_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Tax Classes controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Tax_Classes_V2_Controller
     */
    class WC_REST_Tax_Classes_Controller extends \WC_REST_Tax_Classes_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
    }
    /**
     * REST API Webhooks controller class.
     *
     * @package Automattic/WooCommerce/RestApi
     * @extends WC_REST_Webhooks_V2_Controller
     */
    class WC_REST_Webhooks_Controller extends \WC_REST_Webhooks_V2_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Get the default REST API version.
         *
         * @since  3.0.0
         * @return string
         */
        protected function get_default_api_version()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Main package class.
     */
    class Package
    {
        /**
         * Version.
         *
         * @var string
         */
        const VERSION = '1.0.7';
        /**
         * Init the package - load the REST API Server class.
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
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * Singleton trait.
     */
    trait SingletonTrait
    {
        /**
         * The single instance of the class.
         *
         * @var object
         */
        protected static $instance = null;
        /**
         * Constructor
         *
         * @return void
         */
        protected function __construct()
        {
        }
        /**
         * Get class instance.
         *
         * @return object Instance.
         */
        public static final function instance()
        {
        }
        /**
         * Prevent cloning.
         */
        private function __clone()
        {
        }
        /**
         * Prevent unserializing.
         */
        private function __wakeup()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi {
    /**
     * Class responsible for loading the REST API and all REST API namespaces.
     */
    class Server
    {
        use \Automattic\WooCommerce\RestApi\Utilities\SingletonTrait;
        /**
         * REST API namespaces and endpoints.
         *
         * @var array
         */
        protected $controllers = [];
        /**
         * Hook into WordPress ready to init the REST API as needed.
         */
        public function init()
        {
        }
        /**
         * Register REST API routes.
         */
        public function register_rest_routes()
        {
        }
        /**
         * Get API namespaces - new namespaces should be registered here.
         *
         * @return array List of Namespaces and Main controller classes.
         */
        protected function get_rest_namespaces()
        {
        }
        /**
         * List of controllers in the wc/v1 namespace.
         *
         * @return array
         */
        protected function get_v1_controllers()
        {
        }
        /**
         * List of controllers in the wc/v2 namespace.
         *
         * @return array
         */
        protected function get_v2_controllers()
        {
        }
        /**
         * List of controllers in the wc/v3 namespace.
         *
         * @return array
         */
        protected function get_v3_controllers()
        {
        }
    }
}
namespace Automattic\WooCommerce\RestApi\Utilities {
    /**
     * ImageAttachment class.
     */
    class ImageAttachment
    {
        /**
         * Attachment ID.
         *
         * @var integer
         */
        public $id = 0;
        /**
         * Object attached to.
         *
         * @var integer
         */
        public $object_id = 0;
        /**
         * Constructor.
         *
         * @param integer $id Attachment ID.
         * @param integer $object_id Object ID.
         */
        public function __construct($id = 0, $object_id = 0)
        {
        }
        /**
         * Upload an attachment file.
         *
         * @throws \WC_REST_Exception REST API exceptions.
         * @param string $src URL to file.
         */
        public function upload_image_from_src($src)
        {
        }
        /**
         * Update attachment alt text.
         *
         * @param string $text Text to set.
         */
        public function update_alt_text($text)
        {
        }
        /**
         * Update attachment name.
         *
         * @param string $text Text to set.
         */
        public function update_name($text)
        {
        }
    }
}