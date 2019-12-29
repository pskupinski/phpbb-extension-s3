<?php
/**
 *
 * @package       phpBB Extension - S3
 * @copyright (c) 2019 Preston Skupinski
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace AustinMaddox\s3\migrations;

class release_1_0_4 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\AustinMaddox\s3\migrations\release_1_0_2'];
	}

	public function update_data()
	{
		return [
			['config.add', ['s3_cdn_domain', '']],
		];
	}
}
