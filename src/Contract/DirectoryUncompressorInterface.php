<?php

/**
 * DirectoryUncompressorInterface.php
 *
 * Copyright 2020 Danny Damsky
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package coffeephp\uncompressor
 * @author Danny Damsky <dannydamsky99@gmail.com>
 * @since 2020-09-10
 */

declare(strict_types=1);

namespace CoffeePhp\Uncompress\Contract;

use CoffeePhp\FileSystem\Contract\Data\Path\DirectoryInterface;
use CoffeePhp\FileSystem\Contract\Data\Path\FileInterface;
use CoffeePhp\Uncompress\Exception\UncompressException;

/**
 * Interface DirectoryUncompressorInterface
 * @package coffeephp\uncompressor
 * @author Danny Damsky <dannydamsky99@gmail.com>
 * @since 2020-09-10
 */
interface DirectoryUncompressorInterface
{
    /**
     * Uncompress the given directory.
     *
     * @param FileInterface $compressedDirectory The directory to uncompress.
     * @return DirectoryInterface The uncompressed directory.
     * @throws UncompressException
     */
    public function uncompressDirectory(FileInterface $compressedDirectory): DirectoryInterface;
}
