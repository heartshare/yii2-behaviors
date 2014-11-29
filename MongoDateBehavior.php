<?php

namespace mongosoft\behaviors;

/**
 * MongoDateBehavior automatically fills the specified attributes with the current ISODate.
 *
 * To use MongoDateBehavior, insert the following code to your ActiveRecord class:
 *
 * ```php
 * use mongosoft\behaviors\MongoDateBehavior;
 *
 * public function behaviors()
 * {
 *     return [
 *         MongoDateBehavior::className(),
 *     ];
 * }
 * ```
 *
 * By default, MongoDateBehavior will fill the `created` and `updated` attributes with the current ISODate
 * when the associated AR object is being inserted; it will fill the `updated` attribute
 * with the ISODate when the AR object is being updated.
 *
 * MongoDateBehavior also provides a method named [[touch()]] that allows you to assign the current
 * ISODate to the specified attribute(s) and save them to the database. For example,
 *
 * ```php
 * $this->identity->touch('login');
 * ```
 *
 * @author Alexander Mohorev <dev.mohorev@gmail.com>
 */
class MongoDateBehavior extends \mongosoft\mongodb\MongoDateBehavior
{
}
