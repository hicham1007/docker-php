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

class ServiceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_28\\Model\\ServiceSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_28\Model\ServiceSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_28\Model\ServiceSpec();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'TaskTemplate')) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data->{'TaskTemplate'}, 'Docker\\API\\V1_28\\Model\\TaskSpec', 'json', $context));
        }
        if (property_exists($data, 'Mode')) {
            $object->setMode($this->denormalizer->denormalize($data->{'Mode'}, 'Docker\\API\\V1_28\\Model\\ServiceSpecMode', 'json', $context));
        }
        if (property_exists($data, 'UpdateConfig')) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data->{'UpdateConfig'}, 'Docker\\API\\V1_28\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        }
        if (property_exists($data, 'RollbackConfig')) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data->{'RollbackConfig'}, 'Docker\\API\\V1_28\\Model\\ServiceSpecRollbackConfig', 'json', $context));
        }
        if (property_exists($data, 'Networks')) {
            $values_1 = [];
            foreach ($data->{'Networks'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\V1_28\\Model\\ServiceSpecNetworksItem', 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (property_exists($data, 'EndpointSpec')) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data->{'EndpointSpec'}, 'Docker\\API\\V1_28\\Model\\EndpointSpec', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getTaskTemplate()) {
            $data->{'TaskTemplate'} = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        }
        if (null !== $object->getMode()) {
            $data->{'Mode'} = $this->normalizer->normalize($object->getMode(), 'json', $context);
        }
        if (null !== $object->getUpdateConfig()) {
            $data->{'UpdateConfig'} = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        }
        if (null !== $object->getRollbackConfig()) {
            $data->{'RollbackConfig'} = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
        }
        if (null !== $object->getNetworks()) {
            $values_1 = [];
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Networks'} = $values_1;
        }
        if (null !== $object->getEndpointSpec()) {
            $data->{'EndpointSpec'} = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        }

        return $data;
    }
}
