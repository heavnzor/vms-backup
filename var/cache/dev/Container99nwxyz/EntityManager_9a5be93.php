<?php

namespace Container99nwxyz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f893 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb2101 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd622 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getConnection', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getMetadataFactory', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getExpressionBuilder', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'beginTransaction', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getCache', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'transactional', array('func' => $func), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->transactional($func);
    }

    public function commit()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'commit', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->commit();
    }

    public function rollback()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'rollback', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'createQuery', array('dql' => $dql), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'createQueryBuilder', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'flush', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'clear', array('entityName' => $entityName), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->clear($entityName);
    }

    public function close()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'close', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->close();
    }

    public function persist($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'persist', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'remove', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'refresh', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'detach', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'merge', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'contains', array('entity' => $entity), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getEventManager', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getConfiguration', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'isOpen', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getUnitOfWork', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getProxyFactory', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'getFilters', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'isFiltersStateClean', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'hasFilters', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return $this->valueHolder9f893->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb2101 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9f893) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f893 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f893->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__get', ['name' => $name], $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        if (isset(self::$publicPropertiesbd622[$name])) {
            return $this->valueHolder9f893->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f893;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f893;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f893;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f893;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__isset', array('name' => $name), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f893;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f893;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__unset', array('name' => $name), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f893;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f893;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__clone', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        $this->valueHolder9f893 = clone $this->valueHolder9f893;
    }

    public function __sleep()
    {
        $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, '__sleep', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;

        return array('valueHolder9f893');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2101 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2101;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb2101 && ($this->initializerb2101->__invoke($valueHolder9f893, $this, 'initializeProxy', array(), $this->initializerb2101) || 1) && $this->valueHolder9f893 = $valueHolder9f893;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f893;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f893;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
