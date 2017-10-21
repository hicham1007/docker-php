<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_33\\Model\\Plugin') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_33\Model\Plugin) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_33\Model\Plugin();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Enabled')) {
            $object->setEnabled($data->{'Enabled'});
        }
        if (property_exists($data, 'Settings')) {
            $object->setSettings($this->denormalizer->denormalize($data->{'Settings'}, 'Docker\\API\\V1_33\\Model\\PluginSettings', 'json', $context));
        }
        if (property_exists($data, 'PluginReference')) {
            $object->setPluginReference($data->{'PluginReference'});
        }
        if (property_exists($data, 'Config')) {
            $object->setConfig($this->denormalizer->denormalize($data->{'Config'}, 'Docker\\API\\V1_33\\Model\\PluginConfig', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getEnabled()) {
            $data->{'Enabled'} = $object->getEnabled();
        }
        if (null !== $object->getSettings()) {
            $data->{'Settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getPluginReference()) {
            $data->{'PluginReference'} = $object->getPluginReference();
        }
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }

        return $data;
    }
}
