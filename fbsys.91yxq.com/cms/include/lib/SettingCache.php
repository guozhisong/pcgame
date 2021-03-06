<?php
class SettingCache
{

				public $_data = array( );

				public function addData( $_data, $_val = NULL )
				{
								if ( is_array( $_data ) )
								{
												foreach ( $_data as $key => $var )
												{
																$this->_data[$key] = $var;
												}
								}
								else
								{
												$this->_data[$_data] = $_val;
								}
				}

				public function getData( $_key = NULL )
				{
								if ( empty( $_key ) )
								{
												return $this->_data;
								}
								else
								{
												return $this->_data[$_key];
								}
				}

				public function delData( $_key )
				{
								unset( $this->_data[$_key] );
				}

				public function load( $_setting_name )
				{
								if ( $this->isCacheExists( $_setting_name ) )
								{
												include( CACHE_DIR."SettingCache.".$_setting_name.".php" );
								}
								else
								{
												$this->make( $_setting_name );
												include( CACHE_DIR."SettingCache.".$_setting_name.".php" );
								}
								$this->_data = $SettingCache;
								return $SettingCache;
				}

				public function make( $_setting_name, $SettingCache = "" )
				{
								if ( empty( $SettingCache ) )
								{
												if ( !empty( $this->_data ) )
												{
																$SettingCache =& $this->_data;
												}
												else
												{
																switch ( $_setting_name )
																{
																case "plugin_base_comment" :
																				$SettingCache['enableComment'] = 1;
																				$SettingCache['enableCommentApprove'] = 0;
																				$SettingCache['usernameMaxLength'] = 20;
																				$SettingCache['contentMinLength'] = 3;
																				$SettingCache['contentMaxLength'] = 1000;
																				$SettingCache['filterMode'] = 1;
																				$SettingCache['replaceWord'] = "*";
																				$SettingCache['filterWords'] = "fuck,shit,TMD";
																				break;
																}
												}
								}
								if ( empty( $SettingCache ) )
								{
												$this->error( "can not make cache, no CacheData supplied" );
								}
								$results = var_export( $SettingCache, true );
								$results = "\$SettingCache = ".$results.";";
								return writecache( CACHE_DIR."SettingCache.".$_setting_name.".php", $results );
				}

				public function isCacheExists( $_setting_name )
				{
								if ( file_exists( CACHE_DIR."SettingCache.".$_setting_name.".php" ) )
								{
												return true;
								}
								else
								{
												return false;
								}
				}

				public function error( $_msg )
				{
								trigger_error( "SettingCache : {$_msg} ", E_USER_ERROR );
				}

}

?>
