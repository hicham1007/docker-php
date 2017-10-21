<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_28\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_28\\Model\\TaskSpecContainerSpecDNSConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_28\Model\TaskSpecContainerSpecDNSConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_28\Model\TaskSpecContainerSpecDNSConfig();
        if (property_exists($data, 'Nameservers')) {
            $values = [];
            foreach ($data->{'Nameservers'} as $value) {
                $values[] = $value;
            }
            $object->setNameservers($values);
        }
        if (property_exists($data, 'Search')) {
            $values_1 = [];
            foreach ($data->{'Search'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSearch($values_1);
        }
        if (property_exists($data, 'Options')) {
            $values_2 = [];
            foreach ($data->{'Options'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setOptions($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNameservers()) {
            $values = [];
            foreach ($object->getNameservers() as $value) {
                $values[] = $value;
            }
            $data->{'Nameservers'} = $values;
        }
        if (null !== $object->getSearch()) {
            $values_1 = [];
            foreach ($object->getSearch() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Search'} = $values_1;
        }
        if (null !== $object->getOptions()) {
            $values_2 = [];
            foreach ($object->getOptions() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Options'} = $values_2;
        }

        return $data;
    }
}
