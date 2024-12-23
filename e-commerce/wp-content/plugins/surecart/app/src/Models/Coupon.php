<?php

namespace SureCart\Models;

use SureCart\Models\Traits\HasDates;
use SureCart\Support\Currency;
use SureCart\Support\TimeDate;

/**
 * Price model
 */
class Coupon extends Model {
	use HasDates;

	/**
	 * Rest API endpoint
	 *
	 * @var string
	 */
	protected $endpoint = 'coupons';

	/**
	 * Object name
	 *
	 * @var string
	 */
	protected $object_name = 'coupon';

	/**
	 * Is this cachable?
	 *
	 * @var boolean
	 */
	protected $cachable = true;

	/**
	 * Clear cache when coupons are updated.
	 *
	 * @var string
	 */
	protected $cache_key = 'coupons';

	/**
	 * Get the human discount attribute.
	 *
	 * @return string
	 */
	public function getHumanDiscountAttribute() {
		if ( ! empty( $this->amount_off ) && ! empty( $this->currency ) ) {
			return Currency::format( $this->amount_off, $this->currency );
		}

		if ( ! empty( $this->percent_off ) ) {
			return sprintf( __( '%1d%% off', 'surecart' ), $this->percent_off | 0 );
		}

		return '';

	}

	/**
	 * Get discount amount attribute.
	 *
	 * @return string
	 */
	public function getDiscountAmountAttribute() {
		return $this->amount_off ? Currency::format( $this->amount_off, $this->currency ) : $this->percent_off . '%';
	}

	/**
	 * Set the subscriptions attribute
	 *
	 * @param  object $value Subscription data array.
	 * @return void
	 */
	public function setPromotionsAttribute( $value ) {
		if ( ! empty( $value->data ) ) {
			// coming back from server.
			$this->setCollection( 'promotions', $value, Promotion::class );
		} else {
			// sending to server.
			if ( is_array( $value ) ) {
				foreach ( $value as $attributes ) {
					$models[] = is_a( $attributes, Promotion::class ) ? $attributes : new Promotion( $attributes );
				}
				$this->attributes['promotions'] = $models;
			}
		}
	}

	/**
	 * Get the Redeem By Date attribute.
	 *
	 * @return string
	 */
	public function getRedeemByDateAttribute() {
		return ! empty( $this->redeem_by ) ? TimeDate::formatDate( $this->redeem_by ) : '';
	}

	/**
	 * Get the Redeem By Date Time attribute.
	 *
	 * @return string
	 */
	public function getRedeemByDateTimeAttribute() {
		return ! empty( $this->redeem_by ) ? TimeDate::formatDateAndTime( $this->redeem_by ) : '';
	}

	/**
	 * Get the archived at date attribute.
	 *
	 * @return string
	 */
	public function getArchivedAtDateAttribute() {
		return ! empty( $this->archived_at ) ? TimeDate::formatDate( $this->archived_at ) : '';
	}

	/**
	 * Get the archived at date time attribute.
	 *
	 * @return string
	 */
	public function getArchivedAtDateTimeAttribute() {
		return ! empty( $this->archived_at ) ? TimeDate::formatDateAndTime( $this->archived_at ) : '';
	}
}
